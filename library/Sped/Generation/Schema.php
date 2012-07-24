<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Generation;

/**
 * @category   Sped
 * @package    Sped\Generation
 * @copyright  Copyright (c) 2012 Antonio Spinelli
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Schema {

    /**
     *
     * @var \Sped\Components\Xml\Schema
     */
    protected $loadedSchema = null;
    protected $dirTarget = null;
    protected $defaultNamespace = null;

    public function getDefaultNamespace() {
        return $this->defaultNamespace;
    }

    public function setDefaultNamespace($defaultNamespace) {
        $this->defaultNamespace = $defaultNamespace;
    }

    /**
     *
     * @return string
     */
    public function getDirTarget() {
        return $this->dirTarget;
    }

    /**
     *
     * @param string $dirTarget
     * @return \Sped\Generation\Schema
     * @throws \Exception 
     */
    public function setDirTarget($dirTarget) {
        if (!is_dir($dirTarget))
            throw new \Exception('This directory ' . $dirTarget . 'is not found');
        $this->dirTarget = realpath($dirTarget);
        return $this;
    }

    /**
     * 
     * @return \Sped\Components\Xml\Schema
     */
    public function getLoadedSchema() {
        return $this->loadedSchema;
    }

    /**
     *
     * @param string $fileName
     * @return \Sped\Generation\Schema
     * @throws \RuntimeException 
     */
    public function loadXmlSchema($fileName) {
        $fileName = realpath($fileName);

        if (!is_file($fileName))
            throw new \RuntimeException('This file ' . $fileName . ' not found');

        $this->loadedSchema = new \Sped\Components\Xml\Schema();

        $this->loadedSchema->load($fileName, null, true);
        return $this;
    }

    /**
     * @return boolean
     * @throws \RuntimeException 
     */
    public function exportClasses() {
        $xsd = $this->getLoadedSchema();
        if (!$xsd instanceof \Sped\Components\Xml\Schema)
            throw new \RuntimeException('Can\'t read a xsd file to export classes');

        $schema = $xsd->documentElement;

        foreach ($schema->childNodes as $node) {

            if (!$node instanceof \DOMElement)
                continue;

            $this->createClassFromNode($node);
        }
        return true;
    }

    /**
     *
     * @param \DOMElement $node
     * @param string $namespace
     * @param string $dirTarget 
     */
    public function createClassFromNode(\DOMElement $node = null, $namespace = null, $dirTarget = null) {
        if ($node === null)
            $node = $this->getLoadedSchema()->documentElement;

        if ($namespace === NULL)
            $namespace = $this->getDefaultNamespace();

        if ($dirTarget === NULL) {
            $dirTarget = $this->getDirTarget();
        }

        $class = new \PhpClass();

        if (!is_null($namespace))
            $class->setNamespace(new \PhpClass_Namespace(array('path' => $namespace)));

        $class->setExtends('\Sped\Components\Xml\Element');
        $class->setName($node->getAttribute('name'));
        $class->setDescription($this->getDocumentation($node));
        $class->addCommentTag(new \PhpClass_DocBlock_Tag(array('name' => 'category', 'description' => 'Sped')));
        $class->addCommentTag(new \PhpClass_DocBlock_Tag(array('name' => 'package', 'description' => 'Sped')));
        $class->addCommentTag(new \PhpClass_DocBlock_Tag(array(
                    'name' => 'copyright',
                    'description' => 'Copyright (c) 2012 Antonio Spinelli')));
        $class->addCommentTag(new \PhpClass_DocBlock_Tag(array(
                    'name' => 'license',
                    'description' => 'http://www.gnu.org/licenses/gpl.html GNU/GPL v.3')));

        $nodeName = $node->getAttribute('name');

        //verifica se o elemento está apenas no segundo nível do documento
        if ($node->localName == 'element' AND $this->getNodeLevel($node) === 2) {
            $class->getConstants()->clear();
            $class->getMethods()->clear();
            $class->setExtends('\Sped\Components\Xml\Document');
            $class->setName('Document' . ucfirst($nodeName));
            if ($node->hasAttribute('type')) {
                $prefix = $node->prefix;
                if ($prefix != 'xs')
                    $namespaceURI = $this->getLoadedSchema()->lookupNamespaceUri($prefix);
                else
                    $namespaceURI = $this->getLoadedSchema()->getTargetNamespace();

                $methodName = $this->getSufixName($nodeName);
                $methodNamespace = $class->getNamespace()->getPath() . '\\' . $this->getSufixName($node->getAttribute('type'));
            } elseif ($node->hasAttribute('ref')) {
                $prefix = $this->getPrefixName($node->getAttribute('ref'));
                $namespaceURI = $this->getLoadedSchema()->lookupNamespaceUri($prefix);
                $methodName = $this->getSufixName($node->getAttribute('ref'));
                $methodNamespace = $class->getNamespace()->getPath() . '\\' . $methodName;
            }

            $class->addConstant(new \PhpClass_Constant(array(
                        'name' => $nodeName, 'value' => $nodeName)));

            $class->addMethod($this->createElementGetMethod($methodName, $methodNamespace, false, false));
            $class->addMethod($this->createElementAddMethod(array(
                        'name' => $methodName,
                        'type' => $methodNamespace,
                        'namespaceURI' => $namespaceURI)));

            $class->addMethod($this->createElementSetMethod($methodName, $methodNamespace));
        }

        if (!preg_match('/^Document/', $class->getName()))
            $this->createClassMethodsFromNode($class, $node);
        $class->save($dirTarget);
    }

    public function createClassMethodsFromNode(\PhpClass &$class, \DOMElement $node) {
        $dom = new \DOMXPath($this->loadedSchema);
        if ($node->hasAttribute('type')) {
            $nodes = $dom->query("//*[@name='{$node->getAttribute('type')}']");
        }
        else
            $nodes = $node->childNodes;

        foreach ($nodes as $node) {
            switch ($node->localName) {
                case 'attribute':
                    $this->createAttributeMethods($class, $node);
                    break;
                case 'sequence':
                case 'choice':
                case 'complexType':
                    $this->createClassMethodsFromNode($class, $node);
                    break;
                case 'simpleType':
                    if ($node->parentNode->localName == 'element')
                        return;
                case 'element':
                    $hasIndex = (int) $node->hasAttribute('minOccurs');
                    if ($node->hasAttribute('name')) {
                        $name = $node->getAttribute('name');
                        $type = $node->hasAttribute('type') ? $this->getSufixName($node->getAttribute('type')) : null;
                        $prefix = $node->prefix;
                        if ($prefix != 'xs')
                            $namespaceURI = $this->getLoadedSchema()->lookupNamespaceUri($prefix);
                        else
                            $namespaceURI = $this->getLoadedSchema()->getTargetNamespace();
                        if (!is_null($type))
                            $type = $this->getDefaultNamespace() . '\\' . ucfirst($type);
                        elseif ($class->getExtends() === '\Sped\Components\Xml\Document')
                            $type = $class->getNamespace()->getPath() . '\\' . $type;
                        else
                            $type = $class->getFullName() . '\\' . ucfirst($name);
                    } elseif ($node->hasAttribute('ref')) {
                        $prefix = $this->getPrefixName($node->getAttribute('ref'));
                        $namespaceURI = $this->getLoadedSchema()->lookupNamespaceUri($prefix);
                        $name = $this->getSufixName($node->getAttribute('ref'));
                        $refNode = $dom->query("//*[@name='{$name}']")->item(0);
                        $type = $refNode->hasAttribute('type') ?
                                preg_replace('/^.*:/', '', $refNode->getAttribute('type')) : $refNode->getAttribute('name');
                        $type = $this->getDefaultNamespace() . '\\' . ucfirst($type);
                    }

                    $class->addConstant(new \PhpClass_Constant(array(
                                'name' => $name,
                                'value' => $name)));

                    $class->addMethod($this->createElementGetMethod($name, $type, $hasIndex));
                    $class->addMethod($this->createElementAddMethod(array(
                                'name' => $name,
                                'type' => $type,
                                'hasValue' => $this->isLastLevel($node),
                                'isUnique' => ($hasIndex == 0),
                                'namespaceURI' => $namespaceURI)));
                    $class->addMethod($this->createElementSetMethod($name, $type));

                    if ($node->localName != 'simpleType'
                            AND $node->hasChildNodes()
                            AND $class->getExtends() == '\Sped\Components\Xml\Element'
                            AND $this->hasChildrenElements($node)) {
                        $this->createClassFromNode($node, $class->getFullName());
                    }
            }
        }
    }

    public function hasChildrenElements(\DOMElement $node) {
        return ($node->getElementsByTagName('element')->length > 0
                OR $node->getElementsByTagName('simpleType')->length > 0
                OR $node->getElementsByTagName('choice')->length > 0
                OR $node->getElementsByTagName('complexType')->length > 0);
    }

    public function isLastLevel(\DOMElement $node) {
        return ($node->localName == 'element'
                AND $node->getElementsByTagName('complexType')->length === 0
                AND $node->getElementsByTagName('sequence')->length === 0);
    }

    public function createClassConstructMethod($namespace, $isSetValue = false) {
        $met = new \PhpClass_Method(array(
                    'name' => '__construct',
                    'body' => "parent::__construct(\$name, null, '$namespace');",
                ));
        if ($isSetValue) {
            $met->setBody("parent::__construct(\$name, \$value, '$namespace');");
            $met->addParameter(new \PhpClass_Parameter(array(
                        'name' => 'value',
                        'value' => null,
                        'isOptional' => true,
                    )));
        }
        return $met;
    }

    public function getNodeLevel(\DOMElement $node) {
        return (count(explode('/', $node->getNodePath())) - 1);
    }

    public function getPrefixName($name) {
        return preg_replace('/:.*$/', '', $name);
    }

    public function getSufixName($name) {
        return preg_replace('/^.*:/', '', $name);
    }

    /**
     * Recupera a descrição adicionada para o elemento.
     * @param \DOMElement $node
     * @return string 
     */
    public function getDocumentation(\DOMElement $node) {
        $description = null;

        if (!$node->hasChildNodes())
            return $description;

        foreach ($node->childNodes as $child) {
            if ($node->localName == 'documentation')
                $description = $node->nodeValue;

            if ($child->hasChildNodes())
                $description = $this->getDocumentation($child);

            if (!is_null($description))
                break;
        }
        return $description;
    }

    public function createAttributeMethods(\PhpClass &$class, \DOMElement $node) {
        $methodName = $node->getAttribute('name');
        $returnType = in_array($node->getAttribute('type'), array('string')) ? null : $class->getFullName();

        $class->addMethod($this->createAttributeGetMethod($methodName));
        $class->addMethod($this->createAttributeSetMethod($methodName, $returnType));
        if ($node->hasAttribute('use') AND $node->getAttribute('use') == 'optional') {
            $class->addMethod($this->createAttributeIsSetMethod($methodName));
            $class->addMethod($this->createAttributeUnsetMethod($methodName));
        }
    }

    public function createAttributeGetMethod($name) {
        $met = new \PhpClass_Method(array(
                    'name' => 'get' . ucfirst($name),
                    'returns' => 'string'
                ));
        $body = <<<BODY
return \$this->getAttribute('{$name}');
BODY;
        $met->setBody($body);
        return $met;
    }

    /**
     * Cria o método AttributeSet*
     * @param string $methodName
     * @param string $type
     * @return \PhpClass_Method 
     */
    public function createAttributeSetMethod($methodName, $type = null) {
        $method = new \PhpClass_Method(array(
                    'name' => 'set' . ucfirst($methodName),
                    'parameters' => array(
                        new \PhpClass_Parameter(array('name' => 'value'))),
                    'returns' => $type
                ));

        $body = <<<BODY
\$this->setAttribute('{$methodName}', \$value);
return \$this;
BODY;
        $method->setBody($body);
        return $method;
    }

    /**
     * Cria método IsSet*.
     * @param string $$methodName
     * @return \PhpClass_Method 
     */
    public function createAttributeIsSetMethod($methodName) {
        $met = new \PhpClass_Method(array(
                    'name' => 'isSet' . ucfirst($methodName),
                    'returns' => 'boolean'
                ));
        $body = <<<BODY
return \$this->hasAttribute('{$methodName}');
BODY;
        $met->setBody($body);
        return $met;
    }

    /**
     * Cria o método Unset*
     * @param string $methodName
     * @return \PhpClass_Method 
     */
    public function createAttributeUnsetMethod($methodName) {
        $met = new \PhpClass_Method(array(
                    'name' => 'unset' . ucfirst($methodName),
                    'returns' => 'boolean'
                ));
        $body = <<<BODY
\$this->removeAttribute('{$methodName}');
return true;
BODY;
        $met->setBody($body);
        return $met;
    }

    /**
     * Cria o método Add* de acordo com a configuração informada.
     * @param type $methodName
     * @param type $type
     * @param type $hasIndex
     * @param type $isElement
     * @return \PhpClass_Method 
     */
    public function createElementGetMethod($methodName, $type, $hasIndex = false, $isElement = true) {
        $methodName = ucfirst($methodName);
        $constantName = mb_strtoupper($methodName);
        $param = '0';
        $method = new \PhpClass_Method(array(
                    'name' => 'get' . $methodName,
                    'returns' => $type
                ));

        if ($hasIndex) {
            $method->addParameter(new \PhpClass_Parameter(array('name' => 'index')));
            $param = '$index';
        }

        $ownerDocument = ($isElement ? 'ownerDocument->' : '');

        $body = <<<BODY
\$this->{$ownerDocument}registerNodeClass('\DOMElement', '{$type}');
return \$this->getElementsByTagName(self::{$constantName})->item({$param});
BODY;
        $method->setBody($body);
        return $method;
    }

    /**
     * Cria o método Add* de acordo com a configuração informada.
     * @param array $config
     * @return \PhpClass_Method 
     */
    public function createElementAddMethod($config = array()) {

        if (is_null($config['name']) OR empty($config['name']))
            throw new \RuntimeException("The method name can't be a null or empty");

        if (is_null($config['type']) OR empty($config['type']))
            throw new \RuntimeException("The method type can't be a null or empty");

        $methodName = ucfirst($config['name']);
        $constantName = mb_strtoupper($methodName);
        $param = '';

        $method = new \PhpClass_Method(array(
                    'name' => 'add' . $methodName,
                    'returns' => $config['type']));

        if ($config['hasValue']) {
            $method->addParameter(new \PhpClass_Parameter(array(
                        'name' => 'value',
                        'value' => NULL,
                        'isOptional' => true))
            );
            $param = ', $value';
        }

        if ($config['namespaceURI']) {
            $param = $config['hasValue'] ? $param : ', NULL';
            $param .= ", '{$config['namespaceURI']}'";
        }

        $isUnique = $config['isUnique'] ? 'true' : 'false';
        $body = <<<BODY
return \$this->appendChild(new {$config['type']}(self::{$constantName}{$param}), {$isUnique});
BODY;
        $method->setBody($body);
        return $method;
    }

    /**
     * Cria o método Set* de acordo com a configuração informada.
     * @param string $methodName
     * @param string $type
     * @return \PhpClass_Method 
     */
    public function createElementSetMethod($methodName, $type) {
        $methodName = ucfirst($methodName);
        $constantName = mb_strtoupper($methodName);
        $method = new \PhpClass_Method(array('name' => 'set' . $methodName));

        $param = new \PhpClass_Parameter(array(
                    'name' => 'param' . $methodName,
                    'value' => NULL,
                    'type' => $type));
        $method->addParameter($param);

        $isUnique = $isUnique ? 'true' : 'false';
        $body = <<<BODY
\$this->removeElementsByTagName(self::{$constantName});
\$this->appendChild(\${$param->getName()}, {$isUnique});
return \$this;
BODY;
        $method->setBody($body);
        return $method;
    }

}