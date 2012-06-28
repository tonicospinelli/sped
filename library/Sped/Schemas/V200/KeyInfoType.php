<?php
namespace Sped\Schemas\V200;

/**
 * 

 * @name KeyInfoType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class KeyInfoType extends \Sped\Components\Xml\Element  {
    const NAME = 'KeyInfo';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\X509DataType 
     */
    public function getX509Data(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\X509DataType');
        return $this->getElementsByTagName(\Sped\Schemas\V200\X509DataType::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\X509DataType 
     */
    public function addX509Data(){
        return $this->appendChild(new \Sped\Schemas\V200\X509DataType(), true);
    }

    /**

     * @param \Sped\Schemas\V200\X509DataType $paramX509Data 
     * @return \Sped\Schemas\V200\KeyInfoType 
     */
    public function setX509Data(\Sped\Schemas\V200\X509DataType $paramX509Data){
        $this->removeElementsByTagName(\Sped\Schemas\V200\X509DataType::NAME);
        $this->appendChild($paramX509Data, false);
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
     * @return \Sped\Schemas\V200\KeyInfoType 
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