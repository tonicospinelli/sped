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
class Schema
{

    /**
     *
     * @var \Sped\Components\Xml\Schema
     */
    protected $loadedSchema = null;
    protected $dirTarget = null;
    protected $defaultNamespace = null;

    public function getDefaultNamespace()
    {
        return $this->defaultNamespace;
    }

    public function setDefaultNamespace($defaultNamespace)
    {
        $this->defaultNamespace = $defaultNamespace;
    }

    /**
     *
     * @return string
     */
    public function getDirTarget()
    {
        return $this->dirTarget;
    }

    /**
     *
     * @param string $dirTarget
     * @return \Sped\Generation\Schema
     * @throws \Exception 
     */
    public function setDirTarget($dirTarget)
    {
        if (!is_dir($dirTarget))
            throw new \Exception('This directory ' . $dirTarget . 'is not found');
        $this->dirTarget = realpath($dirTarget);
        return $this;
    }

    /**
     * 
     * @return \Sped\Components\Xml\Schema
     */
    public function getLoadedSchema()
    {
        return $this->loadedSchema;
    }

    /**
     *
     * @param string $fileName
     * @return \Sped\Generation\Schema
     * @throws \RuntimeException 
     */
    public function loadXmlSchema($fileName)
    {
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
    public function exportClasses()
    {
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
    public function createClassFromNode(\DOMElement $node = null, $namespace = null, $dirTarget = null)
    {
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
            $class->setDescription('Documento ' . $class->getDocBlock()->getDescription());
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

            $class->addMethod($this->createElementGetMethod(array(
                        'name' => $methodName,
                        'description' => $this->getDocumentation($node),
                        'type' => $methodNamespace,
                        'hasValue' => false,
                        'isElement' => false)));

            $class->addMethod($this->createElementAddMethod(array(
                        'name' => $methodName,
                        'description' => $this->getDocumentation($node),
                        'type' => $methodNamespace,
                        'namespaceURI' => $namespaceURI)));

            $class->addMethod($this->createElementSetMethod(array(
                        'name' => $methodName,
                        'description' => $this->getDocumentation($node),
                        'type' => $methodNamespace)));
        }

        if (!preg_match('/^Document/', $class->getName()))
            $this->createClassMethodsFromNode($class, $node);

        $class->save($dirTarget, null, true);
        var_dump($class->getFullName() . ' is generated.');
    }

    public function createClassMethodsFromNode(\PhpClass &$class, \DOMElement $node)
    {
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

                        $typeElementsLength = $dom->query("//*[@name='{$type}']")->length;

                        if (!is_null($type) && $typeElementsLength > 0)
                            $type = $this->getDefaultNamespace() . '\\' . ucfirst($type);
                        elseif (!is_null($type) && $typeElementsLength < 1)
                            $type = '\Sped\Components\Xml\Element';
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

                    $class->addMethod($this->createElementGetMethod(array(
                                'name' => $name,
                                'description' => $this->getDocumentation($node),
                                'type' => $type,
                                'hasValue' => $hasIndex,
                                'isElement' => true)));

                    $class->addMethod($this->createElementAddMethod(array(
                                'name' => $name,
                                'description' => $this->getDocumentation($node),
                                'type' => $type,
                                'hasValue' => $this->isLastLevel($node),
                                'isUnique' => ($hasIndex == 0),
                                'namespaceURI' => $namespaceURI)));

                    $class->addMethod($this->createElementSetMethod(array(
                                'name' => $name,
                                'description' => $this->getDocumentation($node),
                                'type' => $type)));

                    if ($node->localName != 'simpleType'
                            AND $node->hasChildNodes()
                            AND $class->getExtends() == '\Sped\Components\Xml\Element'
                            AND $this->hasChildrenElements($node)) {
                        $this->createClassFromNode($node, $class->getFullName());
                    }
            }
        }
    }

    public function hasChildrenElements(\DOMElement $node)
    {
        return ($node->getElementsByTagName('element')->length > 0
                OR $node->getElementsByTagName('simpleType')->length > 0
                OR $node->getElementsByTagName('choice')->length > 0
                OR $node->getElementsByTagName('complexType')->length > 0);
    }

    public function isLastLevel(\DOMElement $node)
    {
        return ($node->localName == 'element'
                AND $node->getElementsByTagName('complexType')->length === 0
                AND $node->getElementsByTagName('sequence')->length === 0);
    }

    public function createClassConstructMethod($namespace, $isSetValue = false)
    {
        $met = new \PhpClass_Method(array(
                    'name' => '__construct',
                    'code' => "parent::__construct(\$name, null, '$namespace');",
                ));
        if ($isSetValue) {
            $met->setCode("parent::__construct(\$name, \$value, '$namespace');");
            $met->addArgument(new \PhpClass_Argument(array(
                        'name' => 'value',
                        'value' => null,
                        'isOptional' => true,
                    )));
        }
        return $met;
    }

    public function getNodeLevel(\DOMElement $node)
    {
        return (count(explode('/', $node->getNodePath())) - 1);
    }

    public function getPrefixName($name)
    {
        return preg_replace('/:.*$/', '', $name);
    }

    public function getSufixName($name)
    {
        return preg_replace('/^.*:/', '', $name);
    }

    /**
     * Recupera a descrição adicionada para o elemento.
     * @param \DOMElement $node
     * @return string 
     */
    public function getDocumentation(\DOMElement $node)
    {
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

    public function createAttributeMethods(\PhpClass &$class, \DOMElement $node)
    {
        $methodName = $node->getAttribute('name');
        $returnType = in_array($node->getAttribute('type'), array('string')) ? null : $class->getFullName();

        $class->addMethod($this->createAttributeGetMethod($methodName));
        $class->addMethod($this->createAttributeSetMethod($methodName, $returnType));
        if ($node->hasAttribute('use') AND $node->getAttribute('use') == 'optional') {
            $class->addMethod($this->createAttributeIsSetMethod($methodName));
            $class->addMethod($this->createAttributeUnsetMethod($methodName));
        }
    }

    public function createAttributeGetMethod($name)
    {
        $met = new \PhpClass_Method(array(
                    'name' => 'get' . ucfirst($name),
                    'returns' => 'string'
                ));
        $code = <<<CODE
return \$this->getAttribute('{$name}');
CODE;
        $met->setCode($code);
        return $met;
    }

    /**
     * Cria o método AttributeSet*
     * @param string $methodName
     * @param string $type
     * @return \PhpClass_Method 
     */
    public function createAttributeSetMethod($methodName, $type = null)
    {
        $param = new \PhpClass_Argument(array('name' => 'value'));

        $method = new \PhpClass_Method(array(
                    'name' => 'set' . ucfirst($methodName),
                    'arguments' => array($param),
                    'returns' => $type
                ));

        $code = <<<CODE
\$this->setAttribute('{$methodName}', {$param->getName(true)});
return \$this;
CODE;
        $method->setCode($code);
        return $method;
    }

    /**
     * Cria método IsSet*.
     * @param string $$methodName
     * @return \PhpClass_Method 
     */
    public function createAttributeIsSetMethod($methodName)
    {
        $met = new \PhpClass_Method(array(
                    'name' => 'isSet' . ucfirst($methodName),
                    'returns' => 'boolean'
                ));
        $code = <<<CODE
return \$this->hasAttribute('{$methodName}');
CODE;
        $met->setCode($code);
        return $met;
    }

    /**
     * Cria o método Unset*
     * @param string $methodName
     * @return \PhpClass_Method 
     */
    public function createAttributeUnsetMethod($methodName)
    {
        $met = new \PhpClass_Method(array(
                    'name' => 'unset' . ucfirst($methodName),
                    'returns' => 'boolean'
                ));
        $code = <<<CODE
\$this->removeAttribute('{$methodName}');
return true;
CODE;
        $met->setCode($code);
        return $met;
    }

    /**
     * Cria o método Add* de acordo com a configuração informada.
     * @param array $config Parametros de configuração.<br/>
     * <code>
     * $config = array(
     *  'name' => 'teste',
     *  'type' => 'DateTime',
     *  'description' => 'Metodo teste',
     *  'isElement' => true,
     * );
     * </code>
     * @return \PhpClass_Method 
     */
    public function createElementGetMethod($config = array())
    {
        $this->validateParameters($config);

        $methodName = ucfirst($config['name']);
        $constantName = mb_strtoupper($config['name']);

        $method = new \PhpClass_Method(array(
                    'name' => 'get' . $methodName,
                    'description' => is_null($config['description']) ? '' : 'Retorna ' . $config['description'],
                    'returns' => $config['type']
                ));

        if ($config['hasIndex']) {
            $method->addArgument(new \PhpClass_Argument(array(
                        'name' => 'index',
                        'type' => 'int')));
            $param = '$index';
        }
        else
            $param = '0';

        $ownerDocument = ($config['isElement'] ? 'ownerDocument->' : '');

        $code = <<<CODE
\$this->{$ownerDocument}registerNodeClass('\DOMElement', '{$config['type']}');
return \$this->getElementsByTagName(self::{$constantName})->item({$param});
CODE;
        $method->setCode($code);
        return $method;
    }

    /**
     * Cria o método Add* de acordo com a configuração informada.
     * @param array $config Parametros de configuração.<br/>
     * <code>
     * $config = array(
     *  'name' => 'teste',
     *  'type' => 'DateTime',
     *  'description' => 'Metodo teste',
     *  'hasValue' => true,
     *  'namespaceURI' => '',
     *  'isUnique' => false,
     * );
     * </code>
     * @return \PhpClass_Method 
     */
    public function createElementAddMethod($config = array())
    {
        $this->validateParameters($config);

        $methodName = ucfirst($config['name']);
        $constantName = mb_strtoupper($methodName);
        $param = '';

        $method = new \PhpClass_Method(array(
                    'name' => 'add' . $methodName,
                    'description' => is_null($config['description']) ? '' : 'Adiciona ' . $config['description'],
                    'returns' => $config['type']));

        if ($config['hasValue']) {
            $method->addArgument(new \PhpClass_Argument(array(
                        'name' => 'value',
                        'type' => 'string',
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
        $code = <<<CODE
return \$this->appendChild(new {$config['type']}(self::{$constantName}{$param}), {$isUnique});
CODE;
        $method->setCode($code);
        return $method;
    }

    /**
     * Cria o método Set* de acordo com a configuração informada.
     * @param array $config Parametros de configuração.<br/>
     * <code>
     * $config = array(
     *  'name' => 'teste',
     *  'type' => 'DateTime',
     *  'description' => 'Metodo teste',
     * );
     * </code>
     * @return \PhpClass_Method 
     */
    public function createElementSetMethod($config)
    {
        $this->validateParameters($config);
        
        $methodName = ucfirst($config['name']);
        $constantName = mb_strtoupper($methodName);
        $method = new \PhpClass_Method(array(
                    'name' => 'set' . $methodName,
                    'description' => is_null($config['description']) ? '' : 'Define ' . $config['description'],
                ));

        $param = new \PhpClass_Argument(array(
                    'name' => 'param' . $methodName,
                    'value' => NULL,
                    'type' => $config['type']));
        $method->addArgument($param);

        $isUnique = $config['isUnique'] ? 'true' : 'false';
        $code = <<<CODE
\$this->removeElementsByTagName(self::{$constantName});
\$this->appendChild(\${$param->getName()}, {$isUnique});
return \$this;
CODE;
        $method->setCode($code);
        return $method;
    }

    protected function validateParameters($parameters = array())
    {
        if (\Sped\Commons\StringHelper::isNullOrEmpty($parameters['name']))
            throw new \RuntimeException("The method name can't be a null or empty");

        if (\Sped\Commons\StringHelper::isNullOrEmpty($parameters['type']))
            throw new \RuntimeException("The method type can't be a null or empty");
    }

}