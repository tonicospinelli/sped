<?php
namespace Sped\Schemas\V200\TProtNFe;

/**
 * Dados do protocolo de status

 * @name InfProt
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class InfProt extends \Sped\Components\Xml\Element  {
    const NAME = 'infProt';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TAmb 
     */
    public function getTpAmb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TAmb');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TAmb::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TAmb 
     */
    public function addTpAmb(){
        return $this->appendChild(new \Sped\Schemas\V200\TAmb(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TAmb $paramTpAmb 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TAmb::NAME);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TVerAplic 
     */
    public function getVerAplic(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVerAplic');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TVerAplic::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TVerAplic 
     */
    public function addVerAplic(){
        return $this->appendChild(new \Sped\Schemas\V200\TVerAplic(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TVerAplic $paramVerAplic 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setVerAplic(\Sped\Schemas\V200\TVerAplic $paramVerAplic){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TVerAplic::NAME);
        $this->appendChild($paramVerAplic, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function getChNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TChNFe');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TChNFe::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function addChNFe(){
        return $this->appendChild(new \Sped\Schemas\V200\TChNFe(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TChNFe $paramChNFe 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setChNFe(\Sped\Schemas\V200\TChNFe $paramChNFe){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TChNFe::NAME);
        $this->appendChild($paramChNFe, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\DateTime 
     */
    public function getDhRecbto(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\DateTime');
        return $this->getElementsByTagName(\Sped\Schemas\V200\DateTime::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\DateTime 
     */
    public function addDhRecbto(){
        return $this->appendChild(new \Sped\Schemas\V200\DateTime(), true);
    }

    /**

     * @param \Sped\Schemas\V200\DateTime $paramDhRecbto 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setDhRecbto(\Sped\Schemas\V200\DateTime $paramDhRecbto){
        $this->removeElementsByTagName(\Sped\Schemas\V200\DateTime::NAME);
        $this->appendChild($paramDhRecbto, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TProt 
     * @param int $index 
     */
    public function getNProt(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProt');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TProt::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TProt 
     */
    public function addNProt(){
        return $this->appendChild(new \Sped\Schemas\V200\TProt(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TProt $paramNProt 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setNProt(\Sped\Schemas\V200\TProt $paramNProt){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TProt::NAME);
        $this->appendChild($paramNProt, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\DigestValueType 
     * @param int $index 
     */
    public function getDigVal(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\DigestValueType');
        return $this->getElementsByTagName(\Sped\Schemas\V200\DigestValueType::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\DigestValueType 
     */
    public function addDigVal(){
        return $this->appendChild(new \Sped\Schemas\V200\DigestValueType(), true);
    }

    /**

     * @param \Sped\Schemas\V200\DigestValueType $paramDigVal 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setDigVal(\Sped\Schemas\V200\DigestValueType $paramDigVal){
        $this->removeElementsByTagName(\Sped\Schemas\V200\DigestValueType::NAME);
        $this->appendChild($paramDigVal, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TStat 
     */
    public function getCStat(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TStat');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TStat::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TStat 
     */
    public function addCStat(){
        return $this->appendChild(new \Sped\Schemas\V200\TStat(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TStat $paramCStat 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setCStat(\Sped\Schemas\V200\TStat $paramCStat){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TStat::NAME);
        $this->appendChild($paramCStat, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TMotivo 
     */
    public function getXMotivo(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMotivo');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TMotivo::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TMotivo 
     */
    public function addXMotivo(){
        return $this->appendChild(new \Sped\Schemas\V200\TMotivo(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TMotivo $paramXMotivo 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setXMotivo(\Sped\Schemas\V200\TMotivo $paramXMotivo){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TMotivo::NAME);
        $this->appendChild($paramXMotivo, false);
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
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
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