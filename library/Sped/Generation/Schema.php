<?php

/**
 * Este arquivo Ã© parte do projeto SpedPHP - Nota Fiscal eletrÃ´nica em PHP.
 *
 * Este programa Ã© um software livre: vocÃª pode redistribuir e/ou modificÃ¡-lo
 * sob os termos da LicenÃ§a PÃºblica Geral GNU como Ã© publicada pela FundaÃ§Ã£o 
 * para o Software Livre, na versÃ£o 3 da licenÃ§a, ou qualquer versÃ£o posterior.
 *
 * Este programa Ã© distribuÃ­do na esperanÃ§a que serÃ¡ Ãºtil, mas SEM NENHUMA
 * GARANTIA; sem mesmo a garantia explÃ­cita do VALOR COMERCIAL ou ADEQUAÃ‡ÃƒO PARA
 * UM PROPÃ“SITO EM PARTICULAR, veja a LicenÃ§a PÃºblica Geral GNU para mais
 * detalhes.
 *
 * VocÃª deve ter recebido uma cÃ³pia da LicenÃ§a Publica GNU junto com este
 * programa. Caso contrÃ¡rio consulte <http://www.fsfla.org/svnwiki/trad/GPLv3>.
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Antonio Spinelli
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @link       https://bitbucket.org.com/tonicospinelli/Sped.git
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

    /**
     * 
     * @return \Sped\Components\Xml\Schema
     */
    public function getLoadedSchema()
    {
        return $this->loadedSchema;
    }

    public function loadXmlSchema($fileName)
    {
        $fileName = realpath($fileName);

        if (!is_file($fileName))
            throw new \RuntimeException('This file ' . $fileName . ' not found');

        $this->loadedSchema = new \Sped\Components\Xml\Schema();

        $this->loadedSchema->load($fileName, null, true);
    }

    public function createClassFromNode(\DOMElement $node = null, $namespace = null)
    {
        if ($node === null)
            $node = $this->getLoadedSchema()->firstChild;

        if (!$node->hasChildNodes())
            return false;

        foreach ($node->childNodes as $child) {
            if ($child instanceof \DOMText)
                continue;

            $class = new \PhpClass();

            if (!is_null($namespace))
                $class->setNamespace(new \PhpClass_Namespace(array('path' => $namespace)));

            if ($child->localName == 'element' AND $node->getLineNo() === 2) {
                $class->setExtends('\Sped\Components\Xml\Document');
                $class->setName($child->getAttribute('name') . 'Document');
                if ($child->hasAttribute('type'))
                    $methodName = preg_replace('/(^.*:|^T|Type$)/', '', $child->getAttribute('type'));

                $methodNamespace = $class->getNamespace()->getPath() . '\\' . preg_replace('/^.*:/', '', $child->getAttribute('type'));
                $class->addMethod($this->createElementGetMethod($methodName, $methodNamespace));
                $class->addMethod($this->createElementAddMethod($methodName, $methodNamespace));
            }
            elseif ($child->localName == 'element') {
                $class->setExtends('\Sped\Components\Xml\Element');
                $class->setName($child->getAttribute('name'));
            }
            elseif ($child->localName == 'simpleType') {
                $class->setName($child->getAttribute('name'));
//                $class->addConstant(new \PhpClass_Constant(array(
//                            'name' => 'name',
//                            'value' => $child->getAttribute('name'))));
//                $class->addMethod(
//                        $this->createClassConstructMethod(
//                                $this->getLoadedSchema()->lookupNamespaceUri($child->prefix), true));
            }
            else {
                $class->addConstant(new \PhpClass_Constant(array(
                            'name' => 'name',
                            'value' => preg_replace('/Type$/', '', $child->getAttribute('name')))));

                $class->addMethod(
                        $this->createClassConstructMethod(
                                $this->getLoadedSchema()->lookupNamespaceUri($child->prefix)));

                $class->setExtends('\Sped\Components\Xml\Element');
                $class->setName($child->getAttribute('name'));
            }

            $class->addCommentTag(new \PhpClass_DocBlock_Tag(array('name' => 'category', 'description' => 'Sped')));
            $class->addCommentTag(new \PhpClass_DocBlock_Tag(array('name' => 'package', 'description' => 'Sped')));
            $class->addCommentTag(new \PhpClass_DocBlock_Tag(array('name' => 'copyright', 'description' => 'Copyright (c) 2012 Antonio Spinelli')));
            $class->addCommentTag(new \PhpClass_DocBlock_Tag(array('name' => 'license', 'description' => 'http://www.gnu.org/licenses/gpl.html GNU/GPL v.3')));

            $this->createClassMethodsFromNode($class, $child);
            var_dump($class->toString());
        }
    }

    public function createClassConstructMethod($namespace, $isSetValue = false)
    {
        $met = new \PhpClass_Method(array(
                    'name' => '__construct',
                    'body' => "parent::__construct(self::NAME, null, '$namespace');",
                ));
        if ($isSetValue) {
            $met->setBody("parent::__construct(self::NAME, \$value, '$namespace');");
            $met->addParam(new \PhpClass_Parameter(array(
                        'name' => 'value',
                        'type' => 'string',
                        'value' => null,
                        'isOptional' => true,
                    )));
        }
        return $met;
    }

    public function createClassMethodsFromNode(\PhpClass &$class, \DOMElement $node)
    {
        if ($node->hasAttribute('type')) {
            $dom = new \DOMXPath($this->loadedSchema);
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
                    $this->createClassMethodsFromNode($class, $node);
                    break;
                case 'element':
                    $type = $node->hasAttribute('type') ? $node->getAttribute('type') : $node->getAttribute('name');
                    $type = preg_replace('/^.*:/', '', $type);
                    $childNamespace = $class->getNamespace()->getPath() . '\\' . $type;
                    $hasIndex = $node->hasAttribute('minOccurs');
                    $class->addMethod(
                            $this->createElementGetMethod(
                                    $node->getAttribute('name'), $childNamespace, $hasIndex
                            ));
                    $class->addMethod(
                            $this->createElementAddMethod(
                                    $node->getAttribute('name'), $childNamespace));
            }
        }
    }

    public function createAttributeMethods(\PhpClass &$class, \DOMElement $node)
    {
        $name = $node->getAttribute('name');

        $class->addMethod($this->createAttributeGetMethod($name));
        $class->addMethod($this->createAttributeSetMethod($name, $class->getFullName()));
        if ($node->hasAttribute('use') AND $node->getAttribute('use') == 'optional') {
            $class->addMethod($this->createAttributeIsSetMethod($name));
            $class->addMethod($this->createAttributeUnsetMethod($name));
        }
    }

    public function createAttributeGetMethod($name)
    {
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

    public function createAttributeSetMethod($name, $type = null)
    {
        $met = new \PhpClass_Method(array(
                    'name' => 'set' . ucfirst($name),
                    'params' => array(new \PhpClass_Parameter(array(
                            'name' => 'value',
                            'type' => 'string'))),
                    'returns' => $type
                ));
        $body = <<<BODY
\$this->setAttribute('{$name}', \$value);
return \$this;
BODY;
        $met->setBody($body);
        return $met;
    }

    public function createAttributeIsSetMethod($name)
    {
        $met = new \PhpClass_Method(array(
                    'name' => 'isSet' . ucfirst($name),
                    'returns' => 'boolean'
                ));
        $body = <<<BODY
return \$this->hasAttribute('{$name}');
BODY;
        $met->setBody($body);
        return $met;
    }

    public function createAttributeUnsetMethod($name)
    {
        $met = new \PhpClass_Method(array(
                    'name' => 'unset' . ucfirst($name),
                    'returns' => 'boolean'
                ));
        $body = <<<BODY
\$this->removeAttribute('{$name}');
return true;
BODY;
        $met->setBody($body);
        return $met;
    }

    public function createElementGetMethod($name, $type, $hasIndex = false)
    {
        $name = ucfirst($name);
        $param = '0';
        $met = new \PhpClass_Method(array(
                    'name' => 'get' . $name,
                    'returns' => $type
                ));

        if ($hasIndex) {
            $met->addParam(new \PhpClass_Parameter(array(
                        'name' => 'index',
                        'type' => 'int'
                    )));
            $param = '$index';
        }
        
        $body = <<<BODY
\$this->ownerDocument->registerNodeClass('\DOMElement', '{$type}');
return \$this->getElementsByTagName({$name}::NAME)->item({$param});
BODY;
        $met->setBody($body);
        return $met;
    }

    public function createElementAddMethod($name, $type, $hasValue = false)
    {
        $name = ucfirst($name);
        $param = '';
        $met = new \PhpClass_Method(array(
                    'name' => 'add' . $name,
                    'returns' => $type
                ));
        if ($hasValue) {
            $met->addParam(new \PhpClass_Parameter(array(
                        'name' => 'value',
                        'value' => NULL,
                        'isOptional' => true,
                        'type' => 'string'))
            );
            $param = '$value';
        }
        $body = <<<BODY
return \$this->appendChild(new {$name}({$param}), true);
BODY;
        $met->setBody($body);
        return $met;
    }

    public function generate($filePath, array $param)
    {
        $class = new \PhpClass();
        $class->setName($param['name']);
        $class->setNamespace(new \PhpClass_Namespace(array('path' => $param['namespace'])));
        $class->setExtends('\Sped\Components\Xml\Element');

        $doc = new \PhpClass_DocBlock();
        $doc->setDescription($param['description']);
        $doc->addTag(new \PhpClass_DocBlock_Tag(array('name' => 'category', 'description' => 'Sped')));
        $doc->addTag(new \PhpClass_DocBlock_Tag(array('name' => 'package', 'description' => 'Sped')));
        $doc->addTag(new \PhpClass_DocBlock_Tag(array('name' => 'copyright', 'description' => 'Copyright (c) 2012 Antonio Spinelli')));
        $doc->addTag(new \PhpClass_DocBlock_Tag(array('name' => 'license', 'description' => 'http://www.gnu.org/licenses/gpl.html GNU/GPL v.3')));
        $class->setDocBlock($doc);

        $const = new \PhpClass_Constant(array('name' => 'NAME', 'value' => $param['tagName']));
        $class->addConstant($const);

        $met = new \PhpClass_Method(array(
                    'name' => '__construct',
                    'body' => "parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');",
                ));
        if (array_key_exists('value', $param)) {
            $met->setBody("parent::__construct(self::NAME, \$value, 'http://www.portalfiscal.inf.br/nfe');");
            $met->addParam(new \PhpClass_Parameter(array(
                        'name' => 'value',
                        'type' => 'string',
                        'value' => $param['value'],
                        'isOptional' => true,
                    )));
        }
        $class->addMethod($met);
        foreach ($param['children'] as $child) {
            $child = ucfirst($child);
            $childNamespace = $param['namespace'] . '\\' . $param['name'] . '\\' . $child;
            $class->addUses($childNamespace);

            foreach (array('get', 'add', 'set') as $action) {
                $methodName = $action . $child;
                switch ($action) {
                    case 'get':
                        $met = new \PhpClass_Method(array(
                                    'name' => $methodName,
                                    'returns' => $childNamespace
                                ));
                        $body = <<<BODY
\$this->ownerDocument->registerNodeClass('\DOMElement', '{$childNamespace}');
return \$this->getElementsByTagName({$child}::NAME)->item(0);
BODY;
                        $met->setBody($body);

                        $class->addMethod($met);
                        break;
                    case 'add':
                        $met = new \PhpClass_Method(array(
                                    'name' => $methodName,
                                    'params' => array(
                                        new \PhpClass_Parameter(array(
                                            'name' => 'value',
                                            'value' => NULL,
                                            'isOptional' => true,
                                            'type' => 'string'))
                                    ),
                                    'returns' => $childNamespace
                                ));
                        $body = <<<BODY
return \$this->appendChild(new {$child}(\$value), true);
BODY;
                        $met->setBody($body);
                        $class->addMethod($met);
                        break;
                    case 'set':
                        $met = new \PhpClass_Method(array(
                                    'name' => $methodName,
                                    'params' => array(
                                        new \PhpClass_Parameter(array(
                                            'name' => 'param' . $child,
                                            'type' => $childNamespace
                                        ))
                                    ),
                                    'returns' => $param['namespace'] . '\\' . $param['name']
                                ));
                        $body = <<<BODY
return \$this->appendChild(\$param{$child}, true);
BODY;
                        $met->setBody($body);
                        $class->addMethod($met);
                        break;

                    default:
                        break;
                }
            }
        }
        echo $class->toString();
    }

}