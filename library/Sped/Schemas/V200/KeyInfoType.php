<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name KeyInfoType
 * @package Sped
 */
class KeyInfoType extends \Sped\Components\Xml\Element 
{

    const X509DATA = 'X509Data';

    /**
     * 
     * @return \Sped\Schemas\V200\X509DataType 
     */
    public function getX509Data()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\X509DataType');
        return $this->getElementsByTagName(self::X509DATA)->item(0);
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\X509DataType 
     */
    public function addX509Data($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\X509DataType(self::X509DATA, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\X509DataType $paramX509Data 
     * @return \Sped\Schemas\V200\KeyInfoType 
     */
    public function setX509Data(\Sped\Schemas\V200\X509DataType $paramX509Data)
    {
        $this->removeElementsByTagName(self::X509DATA);
        $this->appendChild($paramX509Data, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getId()
    {
        return $this->getAttribute('Id');
    }

    /**
     * 
     * @param type $value 
     */
    public function setId($value)
    {
        $this->setAttribute('Id', $value);
        return $this;
    }

    /**
     * 
     * @return boolean 
     */
    public function isSetId()
    {
        return $this->hasAttribute('Id');
    }

    /**
     * 
     * @return boolean 
     */
    public function unsetId()
    {
        $this->removeAttribute('Id');
        return true;
    }

}