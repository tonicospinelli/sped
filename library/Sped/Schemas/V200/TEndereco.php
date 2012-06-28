<?php
namespace Sped\Schemas\V200;

/**
 * Tipo Dados do Endereço  // 24/10/08 - tamanho mínimo

 * @name TEndereco
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TEndereco extends \Sped\Components\Xml\Element  {
    const NAME = 'Endereco';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XLgr 
     */
    public function getXLgr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XLgr');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEndereco\XLgr::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XLgr 
     */
    public function addXLgr(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XLgr(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEndereco\XLgr $paramXLgr 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXLgr(\Sped\Schemas\V200\TEndereco\XLgr $paramXLgr){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEndereco\XLgr::NAME);
        $this->appendChild($paramXLgr, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\Nro 
     */
    public function getNro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\Nro');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEndereco\Nro::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\Nro 
     */
    public function addNro(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\Nro(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEndereco\Nro $paramNro 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setNro(\Sped\Schemas\V200\TEndereco\Nro $paramNro){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEndereco\Nro::NAME);
        $this->appendChild($paramNro, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XCpl 
     * @param int $index 
     */
    public function getXCpl(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XCpl');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEndereco\XCpl::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XCpl 
     */
    public function addXCpl(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XCpl(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEndereco\XCpl $paramXCpl 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXCpl(\Sped\Schemas\V200\TEndereco\XCpl $paramXCpl){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEndereco\XCpl::NAME);
        $this->appendChild($paramXCpl, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XBairro 
     */
    public function getXBairro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XBairro');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEndereco\XBairro::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XBairro 
     */
    public function addXBairro(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XBairro(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEndereco\XBairro $paramXBairro 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXBairro(\Sped\Schemas\V200\TEndereco\XBairro $paramXBairro){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEndereco\XBairro::NAME);
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
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setCMun(\Sped\Schemas\V200\TCodMunIBGE $paramCMun){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCodMunIBGE::NAME);
        $this->appendChild($paramCMun, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XMun 
     */
    public function getXMun(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XMun');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEndereco\XMun::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XMun 
     */
    public function addXMun(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XMun(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEndereco\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXMun(\Sped\Schemas\V200\TEndereco\XMun $paramXMun){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEndereco\XMun::NAME);
        $this->appendChild($paramXMun, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TUf::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TUf $paramUF 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TUf::NAME);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\CEP 
     * @param int $index 
     */
    public function getCEP(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\CEP');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEndereco\CEP::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\CEP 
     */
    public function addCEP(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\CEP(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEndereco\CEP $paramCEP 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setCEP(\Sped\Schemas\V200\TEndereco\CEP $paramCEP){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEndereco\CEP::NAME);
        $this->appendChild($paramCEP, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\Tpais 
     * @param int $index 
     */
    public function getCPais(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Tpais');
        return $this->getElementsByTagName(\Sped\Schemas\V200\Tpais::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\Tpais 
     */
    public function addCPais(){
        return $this->appendChild(new \Sped\Schemas\V200\Tpais(), true);
    }

    /**

     * @param \Sped\Schemas\V200\Tpais $paramCPais 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setCPais(\Sped\Schemas\V200\Tpais $paramCPais){
        $this->removeElementsByTagName(\Sped\Schemas\V200\Tpais::NAME);
        $this->appendChild($paramCPais, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XPais 
     * @param int $index 
     */
    public function getXPais(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XPais');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEndereco\XPais::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\XPais 
     */
    public function addXPais(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XPais(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEndereco\XPais $paramXPais 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXPais(\Sped\Schemas\V200\TEndereco\XPais $paramXPais){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEndereco\XPais::NAME);
        $this->appendChild($paramXPais, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\Fone 
     * @param int $index 
     */
    public function getFone(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\Fone');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TEndereco\Fone::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TEndereco\Fone 
     */
    public function addFone(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\Fone(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TEndereco\Fone $paramFone 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setFone(\Sped\Schemas\V200\TEndereco\Fone $paramFone){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TEndereco\Fone::NAME);
        $this->appendChild($paramFone, false);
        return $this;
    }

}