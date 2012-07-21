<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Emissão de avulsa, informar os dados do Fisco emitente
 * @name Avulsa
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Avulsa extends \Sped\Components\Xml\Element  {

    const CNPJ = 'CNPJ';

    const XORGAO = 'xOrgao';

    const MATR = 'matr';

    const XAGENTE = 'xAgente';

    const FONE = 'fone';

    const UF = 'UF';

    const NDAR = 'nDAR';

    const DEMI = 'dEmi';

    const VDAR = 'vDAR';

    const REPEMI = 'repEmi';

    const DPAG = 'dPag';

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     * @param type $value 
     */
    public function addCNPJ($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ){
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao 
     */
    public function getXOrgao(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao');
        return $this->getElementsByTagName(self::XORGAO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao 
     * @param type $value 
     */
    public function addXOrgao($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao(self::XORGAO, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao $paramXOrgao 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setXOrgao(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao $paramXOrgao){
        $this->removeElementsByTagName(self::XORGAO);
        $this->appendChild($paramXOrgao, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr 
     */
    public function getMatr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr');
        return $this->getElementsByTagName(self::MATR)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr 
     * @param type $value 
     */
    public function addMatr($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr(self::MATR, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr $paramMatr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setMatr(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr $paramMatr){
        $this->removeElementsByTagName(self::MATR);
        $this->appendChild($paramMatr, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente 
     */
    public function getXAgente(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente');
        return $this->getElementsByTagName(self::XAGENTE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente 
     * @param type $value 
     */
    public function addXAgente($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente(self::XAGENTE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente $paramXAgente 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setXAgente(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente $paramXAgente){
        $this->removeElementsByTagName(self::XAGENTE);
        $this->appendChild($paramXAgente, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone 
     * @param type $index 
     */
    public function getFone($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone');
        return $this->getElementsByTagName(self::FONE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone 
     * @param type $value 
     */
    public function addFone($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone(self::FONE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone $paramFone 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setFone(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone $paramFone){
        $this->removeElementsByTagName(self::FONE);
        $this->appendChild($paramFone, false);
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
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(self::UF, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TUfEmi $paramUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setUF(\Sped\Schemas\V200\TUfEmi $paramUF){
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR 
     * @param type $index 
     */
    public function getNDAR($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR');
        return $this->getElementsByTagName(self::NDAR)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR 
     * @param type $value 
     */
    public function addNDAR($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR(self::NDAR, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR $paramNDAR 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setNDAR(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR $paramNDAR){
        $this->removeElementsByTagName(self::NDAR);
        $this->appendChild($paramNDAR, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $index 
     */
    public function getDEmi($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DEMI)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $value 
     */
    public function addDEmi($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DEMI, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setDEmi(\Sped\Schemas\V200\TData $paramDEmi){
        $this->removeElementsByTagName(self::DEMI);
        $this->appendChild($paramDEmi, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $index 
     */
    public function getVDAR($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VDAR)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVDAR($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VDAR, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVDAR 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setVDAR(\Sped\Schemas\V200\TDec_1302 $paramVDAR){
        $this->removeElementsByTagName(self::VDAR);
        $this->appendChild($paramVDAR, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi 
     */
    public function getRepEmi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi');
        return $this->getElementsByTagName(self::REPEMI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi 
     * @param type $value 
     */
    public function addRepEmi($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi(self::REPEMI, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi $paramRepEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setRepEmi(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi $paramRepEmi){
        $this->removeElementsByTagName(self::REPEMI);
        $this->appendChild($paramRepEmi, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $index 
     */
    public function getDPag($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DPAG)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $value 
     */
    public function addDPag($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DPAG, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDPag 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setDPag(\Sped\Schemas\V200\TData $paramDPag){
        $this->removeElementsByTagName(self::DPAG);
        $this->appendChild($paramDPag, false);
        return $this;
    }

}