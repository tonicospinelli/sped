<?php
namespace Sped\Schemas\V200;

/**
 * Tipo Dados do Endereço do Emitente  // 24/10/08 - desmembrado / tamanho mínimo

 * @name TEnderEmi
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TEnderEmi extends \Sped\Components\Xml\Element  {
    const NAME = 'EnderEmi';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XLgr 
     */
    public function getXLgr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XLgr');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XLgr::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XLgr 
     */
    public function addXLgr(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XLgr(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\XLgr $paramXLgr 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXLgr(\Sped\Schemas\V200\TEnderEmi\XLgr $paramXLgr){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XLgr::NAME);
        $this->appendChild($paramXLgr, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\Nro 
     */
    public function getNro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\Nro');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\Nro::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\Nro 
     */
    public function addNro(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\Nro(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\Nro $paramNro 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setNro(\Sped\Schemas\V200\TEnderEmi\Nro $paramNro){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\Nro::NAME);
        $this->appendChild($paramNro, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XCpl 
     * @param int $index 
     */
    public function getXCpl(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XCpl');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XCpl::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XCpl 
     */
    public function addXCpl(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XCpl(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\XCpl $paramXCpl 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXCpl(\Sped\Schemas\V200\TEnderEmi\XCpl $paramXCpl){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XCpl::NAME);
        $this->appendChild($paramXCpl, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XBairro 
     */
    public function getXBairro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XBairro');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XBairro::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XBairro 
     */
    public function addXBairro(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XBairro(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\XBairro $paramXBairro 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXBairro(\Sped\Schemas\V200\TEnderEmi\XBairro $paramXBairro){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XBairro::NAME);
        $this->appendChild($paramXBairro, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMun(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCodMunIBGE::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMun(){
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMun 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCMun(\Sped\Schemas\V200\TCodMunIBGE $paramCMun){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCodMunIBGE::NAME);
        $this->appendChild($paramCMun, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XMun 
     */
    public function getXMun(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XMun');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XMun::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XMun 
     */
    public function addXMun(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XMun(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXMun(\Sped\Schemas\V200\TEnderEmi\XMun $paramXMun){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XMun::NAME);
        $this->appendChild($paramXMun, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function getUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUfEmi');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TUfEmi::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function addUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TUfEmi $paramUF 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setUF(\Sped\Schemas\V200\TUfEmi $paramUF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TUfEmi::NAME);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\CEP 
     */
    public function getCEP(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\CEP');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\CEP::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\CEP 
     */
    public function addCEP(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\CEP(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\CEP $paramCEP 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCEP(\Sped\Schemas\V200\TEnderEmi\CEP $paramCEP){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\CEP::NAME);
        $this->appendChild($paramCEP, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\CPais 
     * @param int $index 
     */
    public function getCPais(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\CPais');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\CPais::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\CPais 
     */
    public function addCPais(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\CPais(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\CPais $paramCPais 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCPais(\Sped\Schemas\V200\TEnderEmi\CPais $paramCPais){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\CPais::NAME);
        $this->appendChild($paramCPais, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XPais 
     * @param int $index 
     */
    public function getXPais(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XPais');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XPais::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\XPais 
     */
    public function addXPais(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XPais(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\XPais $paramXPais 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXPais(\Sped\Schemas\V200\TEnderEmi\XPais $paramXPais){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\XPais::NAME);
        $this->appendChild($paramXPais, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\Fone 
     * @param int $index 
     */
    public function getFone(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\Fone');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEnderEmi\Fone::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TEnderEmi\Fone 
     */
    public function addFone(){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\Fone(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEnderEmi\Fone $paramFone 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setFone(\Sped\Schemas\V200\TEnderEmi\Fone $paramFone){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEnderEmi\Fone::NAME);
        $this->appendChild($paramFone, false);
        return $this;
    }

}