<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TransformsType
 * @package Sped
 */
class TransformsType extends \Sped\Components\Xml\Element 
{

    const TRANSFORM = 'Transform';

    /**
     * 
     * @return \Sped\Schemas\V200\TransformType 
     */
    public function getTransform()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TransformType');
        return $this->getElementsByTagName(self::TRANSFORM)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TransformType 
     */
    public function addTransform($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TransformType(self::TRANSFORM, $value, 'http://www.w3.org/2000/09/xmldsig#'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TransformType $paramTransform 
     * @return \Sped\Schemas\V200\TransformsType 
     */
    public function setTransform(\Sped\Schemas\V200\TransformType $paramTransform)
    {
        $this->removeElementsByTagName(self::TRANSFORM);
        $this->appendChild($paramTransform, false);
        return $this;
    }

}