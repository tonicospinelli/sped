<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TransformType
 * @package Sped
 */
class TransformType extends \Sped\Components\Xml\Element 
{

    const XPATH = 'XPath';

    /**
     * 
     * @return \Sped\Components\Xml\Element 
     */
    public function getXPath()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Components\Xml\Element');
        return $this->getElementsByTagName(self::XPATH)->item(0);
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Components\Xml\Element 
     */
    public function addXPath($value = NULL)
    {
        return $this->appendChild(new \Sped\Components\Xml\Element(self::XPATH, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Components\Xml\Element $paramXPath 
     * @return \Sped\Schemas\V200\TransformType 
     */
    public function setXPath(\Sped\Components\Xml\Element $paramXPath)
    {
        $this->removeElementsByTagName(self::XPATH);
        $this->appendChild($paramXPath, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getAlgorithm()
    {
        return $this->getAttribute('Algorithm');
    }

    /**
     * 
     * @param type $value 
     */
    public function setAlgorithm($value)
    {
        $this->setAttribute('Algorithm', $value);
        return $this;
    }

}