<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name SignatureType
 * @package Sped
 */
class SignatureType extends \Sped\Components\Xml\Element 
{

    const SIGNEDINFO = 'SignedInfo';

    const SIGNATUREVALUE = 'SignatureValue';

    const KEYINFO = 'KeyInfo';

    /**
     * 
     * @return \Sped\Schemas\V200\SignedInfoType 
     */
    public function getSignedInfo()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignedInfoType');
        return $this->getElementsByTagName(self::SIGNEDINFO)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\SignedInfoType 
     */
    public function addSignedInfo($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\SignedInfoType(self::SIGNEDINFO, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignedInfoType $paramSignedInfo 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function setSignedInfo(\Sped\Schemas\V200\SignedInfoType $paramSignedInfo)
    {
        $this->removeElementsByTagName(self::SIGNEDINFO);
        $this->appendChild($paramSignedInfo, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignatureValueType 
     */
    public function getSignatureValue()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignatureValueType');
        return $this->getElementsByTagName(self::SIGNATUREVALUE)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\SignatureValueType 
     */
    public function addSignatureValue($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\SignatureValueType(self::SIGNATUREVALUE, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignatureValueType $paramSignatureValue 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function setSignatureValue(\Sped\Schemas\V200\SignatureValueType $paramSignatureValue)
    {
        $this->removeElementsByTagName(self::SIGNATUREVALUE);
        $this->appendChild($paramSignatureValue, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\KeyInfoType 
     */
    public function getKeyInfo()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\KeyInfoType');
        return $this->getElementsByTagName(self::KEYINFO)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\KeyInfoType 
     */
    public function addKeyInfo($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\KeyInfoType(self::KEYINFO, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\KeyInfoType $paramKeyInfo 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function setKeyInfo(\Sped\Schemas\V200\KeyInfoType $paramKeyInfo)
    {
        $this->removeElementsByTagName(self::KEYINFO);
        $this->appendChild($paramKeyInfo, false);
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