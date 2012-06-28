<?php
namespace Sped\Schemas\V200;

/**
 * 

 * @name SignatureType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class SignatureType extends \Sped\Components\Xml\Element  {
    const NAME = 'Signature';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\SignedInfoType 
     */
    public function getSignedInfo(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignedInfoType');
        return $this->getElementsByTagName(\Sped\Schemas\V200\SignedInfoType::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\SignedInfoType 
     */
    public function addSignedInfo(){
        return $this->appendChild(new \Sped\Schemas\V200\SignedInfoType(), true);
    }

    /**

     * @param \Sped\Schemas\V200\SignedInfoType $paramSignedInfo 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function setSignedInfo(\Sped\Schemas\V200\SignedInfoType $paramSignedInfo){
        $this->removeElementsByTagName(\Sped\Schemas\V200\SignedInfoType::NAME);
        $this->appendChild($paramSignedInfo, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\SignatureValueType 
     */
    public function getSignatureValue(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignatureValueType');
        return $this->getElementsByTagName(\Sped\Schemas\V200\SignatureValueType::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\SignatureValueType 
     */
    public function addSignatureValue(){
        return $this->appendChild(new \Sped\Schemas\V200\SignatureValueType(), true);
    }

    /**

     * @param \Sped\Schemas\V200\SignatureValueType $paramSignatureValue 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function setSignatureValue(\Sped\Schemas\V200\SignatureValueType $paramSignatureValue){
        $this->removeElementsByTagName(\Sped\Schemas\V200\SignatureValueType::NAME);
        $this->appendChild($paramSignatureValue, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\KeyInfoType 
     */
    public function getKeyInfo(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\KeyInfoType');
        return $this->getElementsByTagName(\Sped\Schemas\V200\KeyInfoType::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\KeyInfoType 
     */
    public function addKeyInfo(){
        return $this->appendChild(new \Sped\Schemas\V200\KeyInfoType(), true);
    }

    /**

     * @param \Sped\Schemas\V200\KeyInfoType $paramKeyInfo 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function setKeyInfo(\Sped\Schemas\V200\KeyInfoType $paramKeyInfo){
        $this->removeElementsByTagName(\Sped\Schemas\V200\KeyInfoType::NAME);
        $this->appendChild($paramKeyInfo, false);
        return $this;
    }

    /**

     * @return string 
     */
    public function getId(){
        return $this->getAttribute('Id');
    }

    /**

     * @param string $value 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function setId(string $value){
        $this->setAttribute('Id', $value);
        return $this;
    }

    /**

     * @return boolean 
     */
    public function isSetId(){
        return $this->hasAttribute('Id');
    }

    /**

     * @return boolean 
     */
    public function unsetId(){
        $this->removeAttribute('Id');
        return true;
    }

}