<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name SignedInfoType
 * @package Sped
 */
class SignedInfoType extends \Sped\Components\Xml\Element 
{

    const CANONICALIZATIONMETHOD = 'CanonicalizationMethod';

    const SIGNATUREMETHOD = 'SignatureMethod';

    const REFERENCE = 'Reference';

    /**
     * 
     * @return \Sped\Schemas\V200\SignedInfoType\CanonicalizationMethod 
     */
    public function getCanonicalizationMethod()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignedInfoType\CanonicalizationMethod');
        return $this->getElementsByTagName(self::CANONICALIZATIONMETHOD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignedInfoType\CanonicalizationMethod 
     */
    public function addCanonicalizationMethod()
    {
        return $this->appendChild(new \Sped\Schemas\V200\SignedInfoType\CanonicalizationMethod(self::CANONICALIZATIONMETHOD, NULL, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignedInfoType\CanonicalizationMethod $paramCanonicalizationMethod 
     * @return \Sped\Schemas\V200\SignedInfoType 
     */
    public function setCanonicalizationMethod(\Sped\Schemas\V200\SignedInfoType\CanonicalizationMethod $paramCanonicalizationMethod)
    {
        $this->removeElementsByTagName(self::CANONICALIZATIONMETHOD);
        $this->appendChild($paramCanonicalizationMethod, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignedInfoType\SignatureMethod 
     */
    public function getSignatureMethod()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignedInfoType\SignatureMethod');
        return $this->getElementsByTagName(self::SIGNATUREMETHOD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignedInfoType\SignatureMethod 
     */
    public function addSignatureMethod()
    {
        return $this->appendChild(new \Sped\Schemas\V200\SignedInfoType\SignatureMethod(self::SIGNATUREMETHOD, NULL, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignedInfoType\SignatureMethod $paramSignatureMethod 
     * @return \Sped\Schemas\V200\SignedInfoType 
     */
    public function setSignatureMethod(\Sped\Schemas\V200\SignedInfoType\SignatureMethod $paramSignatureMethod)
    {
        $this->removeElementsByTagName(self::SIGNATUREMETHOD);
        $this->appendChild($paramSignatureMethod, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\ReferenceType 
     */
    public function getReference()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\ReferenceType');
        return $this->getElementsByTagName(self::REFERENCE)->item(0);
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\ReferenceType 
     */
    public function addReference($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\ReferenceType(self::REFERENCE, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\ReferenceType $paramReference 
     * @return \Sped\Schemas\V200\SignedInfoType 
     */
    public function setReference(\Sped\Schemas\V200\ReferenceType $paramReference)
    {
        $this->removeElementsByTagName(self::REFERENCE);
        $this->appendChild($paramReference, false);
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