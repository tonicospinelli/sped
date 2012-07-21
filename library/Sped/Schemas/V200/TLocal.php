<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Dados do Local de Retirada ou Entrega // 24/10/08 - tamanho mínimo // v2.0
 * @name TLocal
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TLocal extends \Sped\Components\Xml\Element  {

    const CNPJ = 'CNPJ';

    const CPF = 'CPF';

    const XLGR = 'xLgr';

    const NRO = 'nro';

    const XCPL = 'xCpl';

    const XBAIRRO = 'xBairro';

    const CMUN = 'cMun';

    const XMUN = 'xMun';

    const UF = 'UF';

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpjOpc 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpjOpc');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpjOpc 
     * @param type $value 
     */
    public function addCNPJ($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpjOpc(self::CNPJ, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCnpjOpc $paramCNPJ 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpjOpc $paramCNPJ){
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(self::CPF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCpf 
     * @param type $value 
     */
    public function addCPF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF){
        $this->removeElementsByTagName(self::CPF);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\XLgr 
     */
    public function getXLgr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XLgr');
        return $this->getElementsByTagName(self::XLGR)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\XLgr 
     * @param type $value 
     */
    public function addXLgr($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XLgr(self::XLGR, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TLocal\XLgr $paramXLgr 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXLgr(\Sped\Schemas\V200\TLocal\XLgr $paramXLgr){
        $this->removeElementsByTagName(self::XLGR);
        $this->appendChild($paramXLgr, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\Nro 
     */
    public function getNro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\Nro');
        return $this->getElementsByTagName(self::NRO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\Nro 
     * @param type $value 
     */
    public function addNro($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\Nro(self::NRO, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TLocal\Nro $paramNro 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setNro(\Sped\Schemas\V200\TLocal\Nro $paramNro){
        $this->removeElementsByTagName(self::NRO);
        $this->appendChild($paramNro, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\XCpl 
     * @param type $index 
     */
    public function getXCpl($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XCpl');
        return $this->getElementsByTagName(self::XCPL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\XCpl 
     * @param type $value 
     */
    public function addXCpl($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XCpl(self::XCPL, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TLocal\XCpl $paramXCpl 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXCpl(\Sped\Schemas\V200\TLocal\XCpl $paramXCpl){
        $this->removeElementsByTagName(self::XCPL);
        $this->appendChild($paramXCpl, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\XBairro 
     */
    public function getXBairro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XBairro');
        return $this->getElementsByTagName(self::XBAIRRO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\XBairro 
     * @param type $value 
     */
    public function addXBairro($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XBairro(self::XBAIRRO, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TLocal\XBairro $paramXBairro 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXBairro(\Sped\Schemas\V200\TLocal\XBairro $paramXBairro){
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
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(self::CMUN, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMun 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCMun(\Sped\Schemas\V200\TCodMunIBGE $paramCMun){
        $this->removeElementsByTagName(self::CMUN);
        $this->appendChild($paramCMun, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\XMun 
     */
    public function getXMun(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XMun');
        return $this->getElementsByTagName(self::XMUN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TLocal\XMun 
     * @param type $value 
     */
    public function addXMun($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XMun(self::XMUN, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TLocal\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXMun(\Sped\Schemas\V200\TLocal\XMun $paramXMun){
        $this->removeElementsByTagName(self::XMUN);
        $this->appendChild($paramXMun, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUf 
     * @param type $value 
     */
    public function addUF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UF, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TUf $paramUF 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF){
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

}