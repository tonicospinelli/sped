<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Retorno do Pedido de  Consulta do Recido do Lote de Notas Fiscais Eletrônicas
 * @name TRetConsReciNFe
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TRetConsReciNFe extends \Sped\Components\Xml\Element  {

    const TPAMB = 'tpAmb';

    const VERAPLIC = 'verAplic';

    const NREC = 'nRec';

    const CSTAT = 'cStat';

    const XMOTIVO = 'xMotivo';

    const CUF = 'cUF';

    const CMSG = 'cMsg';

    const XMSG = 'xMsg';

    const PROTNFE = 'protNFe';

    /**
     * 
     * @return \Sped\Schemas\V200\TAmb 
     */
    public function getTpAmb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TAmb');
        return $this->getElementsByTagName(self::TPAMB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TAmb 
     * @param type $value 
     */
    public function addTpAmb($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TAmb(self::TPAMB, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TAmb $paramTpAmb 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb){
        $this->removeElementsByTagName(self::TPAMB);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVerAplic 
     */
    public function getVerAplic(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVerAplic');
        return $this->getElementsByTagName(self::VERAPLIC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVerAplic 
     * @param type $value 
     */
    public function addVerAplic($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TVerAplic(self::VERAPLIC, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TVerAplic $paramVerAplic 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setVerAplic(\Sped\Schemas\V200\TVerAplic $paramVerAplic){
        $this->removeElementsByTagName(self::VERAPLIC);
        $this->appendChild($paramVerAplic, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TRec 
     */
    public function getNRec(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRec');
        return $this->getElementsByTagName(self::NREC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TRec 
     * @param type $value 
     */
    public function addNRec($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TRec(self::NREC, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TRec $paramNRec 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setNRec(\Sped\Schemas\V200\TRec $paramNRec){
        $this->removeElementsByTagName(self::NREC);
        $this->appendChild($paramNRec, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TStat 
     */
    public function getCStat(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TStat');
        return $this->getElementsByTagName(self::CSTAT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TStat 
     * @param type $value 
     */
    public function addCStat($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TStat(self::CSTAT, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TStat $paramCStat 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setCStat(\Sped\Schemas\V200\TStat $paramCStat){
        $this->removeElementsByTagName(self::CSTAT);
        $this->appendChild($paramCStat, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TMotivo 
     */
    public function getXMotivo(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMotivo');
        return $this->getElementsByTagName(self::XMOTIVO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TMotivo 
     * @param type $value 
     */
    public function addXMotivo($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TMotivo(self::XMOTIVO, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TMotivo $paramXMotivo 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setXMotivo(\Sped\Schemas\V200\TMotivo $paramXMotivo){
        $this->removeElementsByTagName(self::XMOTIVO);
        $this->appendChild($paramXMotivo, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(self::CUF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     * @param type $value 
     */
    public function addCUF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(self::CUF, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF){
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TRetConsReciNFe\CMsg 
     */
    public function getCMsg(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRetConsReciNFe\CMsg');
        return $this->getElementsByTagName(self::CMSG)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TRetConsReciNFe\CMsg 
     * @param type $value 
     */
    public function addCMsg($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TRetConsReciNFe\CMsg(self::CMSG, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TRetConsReciNFe\CMsg $paramCMsg 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setCMsg(\Sped\Schemas\V200\TRetConsReciNFe\CMsg $paramCMsg){
        $this->removeElementsByTagName(self::CMSG);
        $this->appendChild($paramCMsg, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TRetConsReciNFe\XMsg 
     */
    public function getXMsg(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRetConsReciNFe\XMsg');
        return $this->getElementsByTagName(self::XMSG)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TRetConsReciNFe\XMsg 
     * @param type $value 
     */
    public function addXMsg($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TRetConsReciNFe\XMsg(self::XMSG, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TRetConsReciNFe\XMsg $paramXMsg 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setXMsg(\Sped\Schemas\V200\TRetConsReciNFe\XMsg $paramXMsg){
        $this->removeElementsByTagName(self::XMSG);
        $this->appendChild($paramXMsg, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TProtNFe 
     * @param type $index 
     */
    public function getProtNFe($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProtNFe');
        return $this->getElementsByTagName(self::PROTNFE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TProtNFe 
     * @param type $value 
     */
    public function addProtNFe($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TProtNFe(self::PROTNFE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TProtNFe $paramProtNFe 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setProtNFe(\Sped\Schemas\V200\TProtNFe $paramProtNFe){
        $this->removeElementsByTagName(self::PROTNFE);
        $this->appendChild($paramProtNFe, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao(){
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}