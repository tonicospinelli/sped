<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @name TransformsType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TransformsType extends \Sped\Components\Xml\Element  {

    const TRANSFORM = 'Transform';

    /**
     * 
     * @return \Sped\Schemas\V200\TransformType 
     * @param type $index 
     */
    public function getTransform($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TransformType');
        return $this->getElementsByTagName(self::TRANSFORM)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TransformType 
     * @param type $value 
     */
    public function addTransform($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TransformType(self::TRANSFORM, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TransformType $paramTransform 
     * @return \Sped\Schemas\V200\TransformsType 
     */
    public function setTransform(\Sped\Schemas\V200\TransformType $paramTransform){
        $this->removeElementsByTagName(self::TRANSFORM);
        $this->appendChild($paramTransform, false);
        return $this;
    }

}