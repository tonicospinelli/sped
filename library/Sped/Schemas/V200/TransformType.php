<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @name TransformType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TransformType extends \Sped\Components\Xml\Element  {

    const XPATH = 'XPath';

    /**
     * 
     * @return \Sped\Schemas\V200\String 
     */
    public function getXPath(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\String');
        return $this->getElementsByTagName(self::XPATH)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\String 
     * @param type $value 
     */
    public function addXPath($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\String(self::XPATH, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\String $paramXPath 
     * @return \Sped\Schemas\V200\TransformType 
     */
    public function setXPath(\Sped\Schemas\V200\String $paramXPath){
        $this->removeElementsByTagName(self::XPATH);
        $this->appendChild($paramXPath, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getAlgorithm(){
        return $this->getAttribute('Algorithm');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TransformType 
     */
    public function setAlgorithm(string $value){
        $this->setAttribute('Algorithm', $value);
        return $this;
    }

}