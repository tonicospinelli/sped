<?php

/**
 * Este arquivo é parte do projeto SpedPHP - Nota Fiscal eletrônica em PHP.
 *
 * Este programa é um software livre: você pode redistribuir e/ou modificá-lo
 * sob os termos da Licença Pública Geral GNU como é publicada pela Fundação 
 * para o Software Livre, na versão 3 da licença, ou qualquer versão posterior.
 *
 * Este programa é distribuído na esperança que será útil, mas SEM NENHUMA
 * GARANTIA; sem mesmo a garantia explícita do VALOR COMERCIAL ou ADEQUAÇÃO PARA
 * UM PROPÓSITO EM PARTICULAR, veja a Licença Pública Geral GNU para mais
 * detalhes.
 *
 * Você deve ter recebido uma cópia da Licença Publica GNU junto com este
 * programa. Caso contrário consulte <http://www.fsfla.org/svnwiki/trad/GPLv3>.
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
class Schema {

    public function generate($filePath, array $param) {
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