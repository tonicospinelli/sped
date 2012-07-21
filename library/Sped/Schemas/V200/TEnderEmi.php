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

    const XLGR = 'xLgr';

    const NRO = 'nro';

    const XCPL = 'xCpl';

    const XBAIRRO = 'xBairro';

    const CMUN = 'cMun';

    const XMUN = 'xMun';

    const UF = 'UF';

    const CEP = 'CEP';

    const CPAIS = 'cPais';

    const XPAIS = 'xPais';

    const FONE = 'fone';

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XLgr 
     */
    public function getXLgr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XLgr');
        return $this->getElementsByTagName(self::XLGR)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XLgr 
     * @param type $value 
     */
    public function addXLgr($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XLgr(self::XLGR, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\XLgr $paramXLgr 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXLgr(\Sped\Schemas\V200\TEnderEmi\XLgr $paramXLgr){
        $this->removeElementsByTagName(self::XLGR);
        $this->appendChild($paramXLgr, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\Nro 
     */
    public function getNro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\Nro');
        return $this->getElementsByTagName(self::NRO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\Nro 
     * @param type $value 
     */
    public function addNro($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\Nro(self::NRO, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\Nro $paramNro 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setNro(\Sped\Schemas\V200\TEnderEmi\Nro $paramNro){
        $this->removeElementsByTagName(self::NRO);
        $this->appendChild($paramNro, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XCpl 
     * @param type $index 
     */
    public function getXCpl($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XCpl');
        return $this->getElementsByTagName(self::XCPL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XCpl 
     * @param type $value 
     */
    public function addXCpl($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XCpl(self::XCPL, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\XCpl $paramXCpl 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXCpl(\Sped\Schemas\V200\TEnderEmi\XCpl $paramXCpl){
        $this->removeElementsByTagName(self::XCPL);
        $this->appendChild($paramXCpl, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XBairro 
     */
    public function getXBairro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XBairro');
        return $this->getElementsByTagName(self::XBAIRRO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XBairro 
     * @param type $value 
     */
    public function addXBairro($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XBairro(self::XBAIRRO, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\XBairro $paramXBairro 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXBairro(\Sped\Schemas\V200\TEnderEmi\XBairro $paramXBairro){
        $this->removeElementsByTagName(self::XBAIRRO);
        $this->appendChild($paramXBairro, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMun(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(self::CMUN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     * @param type $value 
     */
    public function addCMun($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(self::CMUN, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMun 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCMun(\Sped\Schemas\V200\TCodMunIBGE $paramCMun){
        $this->removeElementsByTagName(self::CMUN);
        $this->appendChild($paramCMun, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XMun 
     */
    public function getXMun(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XMun');
        return $this->getElementsByTagName(self::XMUN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XMun 
     * @param type $value 
     */
    public function addXMun($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XMun(self::XMUN, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXMun(\Sped\Schemas\V200\TEnderEmi\XMun $paramXMun){
        $this->removeElementsByTagName(self::XMUN);
        $this->appendChild($paramXMun, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function getUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUfEmi');
        return $this->getElementsByTagName(self::UF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUfEmi 
     * @param type $value 
     */
    public function addUF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(self::UF, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TUfEmi $paramUF 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setUF(\Sped\Schemas\V200\TUfEmi $paramUF){
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\CEP 
     */
    public function getCEP(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\CEP');
        return $this->getElementsByTagName(self::CEP)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\CEP 
     * @param type $value 
     */
    public function addCEP($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\CEP(self::CEP, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\CEP $paramCEP 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCEP(\Sped\Schemas\V200\TEnderEmi\CEP $paramCEP){
        $this->removeElementsByTagName(self::CEP);
        $this->appendChild($paramCEP, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\CPais 
     * @param type $index 
     */
    public function getCPais($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\CPais');
        return $this->getElementsByTagName(self::CPAIS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\CPais 
     * @param type $value 
     */
    public function addCPais($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\CPais(self::CPAIS, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\CPais $paramCPais 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCPais(\Sped\Schemas\V200\TEnderEmi\CPais $paramCPais){
        $this->removeElementsByTagName(self::CPAIS);
        $this->appendChild($paramCPais, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XPais 
     * @param type $index 
     */
    public function getXPais($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XPais');
        return $this->getElementsByTagName(self::XPAIS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\XPais 
     * @param type $value 
     */
    public function addXPais($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XPais(self::XPAIS, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\XPais $paramXPais 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXPais(\Sped\Schemas\V200\TEnderEmi\XPais $paramXPais){
        $this->removeElementsByTagName(self::XPAIS);
        $this->appendChild($paramXPais, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\Fone 
     * @param type $index 
     */
    public function getFone($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\Fone');
        return $this->getElementsByTagName(self::FONE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi\Fone 
     * @param type $value 
     */
    public function addFone($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\Fone(self::FONE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi\Fone $paramFone 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setFone(\Sped\Schemas\V200\TEnderEmi\Fone $paramFone){
        $this->removeElementsByTagName(self::FONE);
        $this->appendChild($paramFone, false);
        return $this;
    }

}