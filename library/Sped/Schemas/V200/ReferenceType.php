<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @name ReferenceType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ReferenceType extends \Sped\Components\Xml\Element  {

    const TRANSFORMS = 'Transforms';

    const DIGESTMETHOD = 'DigestMethod';

    const DIGESTVALUE = 'DigestValue';

    /**
     * 
     * @return \Sped\Schemas\V200\TransformsType 
     */
    public function getTransforms(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TransformsType');
        return $this->getElementsByTagName(self::TRANSFORMS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TransformsType 
     * @param type $value 
     */
    public function addTransforms($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TransformsType(self::TRANSFORMS, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TransformsType $paramTransforms 
     * @return \Sped\Schemas\V200\ReferenceType 
     */
    public function setTransforms(\Sped\Schemas\V200\TransformsType $paramTransforms){
        $this->removeElementsByTagName(self::TRANSFORMS);
        $this->appendChild($paramTransforms, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\ReferenceType\DigestMethod 
     */
    public function getDigestMethod(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\ReferenceType\DigestMethod');
        return $this->getElementsByTagName(self::DIGESTMETHOD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\ReferenceType\DigestMethod 
     */
    public function addDigestMethod(){
        return $this->appendChild(new \Sped\Schemas\V200\ReferenceType\DigestMethod(self::DIGESTMETHOD), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\ReferenceType\DigestMethod $paramDigestMethod 
     * @return \Sped\Schemas\V200\ReferenceType 
     */
    public function setDigestMethod(\Sped\Schemas\V200\ReferenceType\DigestMethod $paramDigestMethod){
        $this->removeElementsByTagName(self::DIGESTMETHOD);
        $this->appendChild($paramDigestMethod, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\DigestValueType 
     */
    public function getDigestValue(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\DigestValueType');
        return $this->getElementsByTagName(self::DIGESTVALUE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\DigestValueType 
     * @param type $value 
     */
    public function addDigestValue($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\DigestValueType(self::DIGESTVALUE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\DigestValueType $paramDigestValue 
     * @return \Sped\Schemas\V200\ReferenceType 
     */
    public function setDigestValue(\Sped\Schemas\V200\DigestValueType $paramDigestValue){
        $this->removeElementsByTagName(self::DIGESTVALUE);
        $this->appendChild($paramDigestValue, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getId(){
        return $this->getAttribute('Id');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\ReferenceType 
     */
    public function setId(string $value){
        $this->setAttribute('Id', $value);
        return $this;
    }

    /**
     * 
     * @return boolean 
     */
    public function isSetId(){
        return $this->hasAttribute('Id');
    }

    /**
     * 
     * @return boolean 
     */
    public function unsetId(){
        $this->removeAttribute('Id');
        return true;
    }

    /**
     * 
     * @return string 
     */
    public function getURI(){
        return $this->getAttribute('URI');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\ReferenceType 
     */
    public function setURI(string $value){
        $this->setAttribute('URI', $value);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getType(){
        return $this->getAttribute('Type');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\ReferenceType 
     */
    public function setType(string $value){
        $this->setAttribute('Type', $value);
        return $this;
    }

    /**
     * 
     * @return boolean 
     */
    public function isSetType(){
        return $this->hasAttribute('Type');
    }

    /**
     * 
     * @return boolean 
     */
    public function unsetType(){
        $this->removeAttribute('Type');
        return true;
    }

}