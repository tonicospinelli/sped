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
    const NAME = 'RetConsReciNFe';
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
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
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
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setVerAplic(\Sped\Schemas\V200\TVerAplic $paramVerAplic){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TVerAplic::NAME);
        $this->appendChild($paramVerAplic, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TRec 
     */
    public function getNRec(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRec');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TRec::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TRec 
     */
    public function addNRec(){
        return $this->appendChild(new \Sped\Schemas\V200\TRec(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TRec $paramNRec 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setNRec(\Sped\Schemas\V200\TRec $paramNRec){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TRec::NAME);
        $this->appendChild($paramNRec, false);
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
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
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
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setXMotivo(\Sped\Schemas\V200\TMotivo $paramXMotivo){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TMotivo::NAME);
        $this->appendChild($paramXMotivo, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCodUfIBGE::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function addCUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCodUfIBGE::NAME);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TRetConsReciNFe\CMsg 
     */
    public function getCMsg(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRetConsReciNFe\CMsg');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TRetConsReciNFe\CMsg::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TRetConsReciNFe\CMsg 
     */
    public function addCMsg(){
        return $this->appendChild(new \Sped\Schemas\V200\TRetConsReciNFe\CMsg(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TRetConsReciNFe\CMsg $paramCMsg 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setCMsg(\Sped\Schemas\V200\TRetConsReciNFe\CMsg $paramCMsg){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TRetConsReciNFe\CMsg::NAME);
        $this->appendChild($paramCMsg, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TRetConsReciNFe\XMsg 
     */
    public function getXMsg(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRetConsReciNFe\XMsg');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TRetConsReciNFe\XMsg::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TRetConsReciNFe\XMsg 
     */
    public function addXMsg(){
        return $this->appendChild(new \Sped\Schemas\V200\TRetConsReciNFe\XMsg(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TRetConsReciNFe\XMsg $paramXMsg 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setXMsg(\Sped\Schemas\V200\TRetConsReciNFe\XMsg $paramXMsg){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TRetConsReciNFe\XMsg::NAME);
        $this->appendChild($paramXMsg, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TProtNFe 
     * @param int $index 
     */
    public function getProtNFe(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProtNFe');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TProtNFe::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function addProtNFe(){
        return $this->appendChild(new \Sped\Schemas\V200\TProtNFe(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TProtNFe $paramProtNFe 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setProtNFe(\Sped\Schemas\V200\TProtNFe $paramProtNFe){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TProtNFe::NAME);
        $this->appendChild($paramProtNFe, false);
        return $this;
    }

    /**

     * @return string 
     */
    public function getVersao(){
        return $this->getAttribute('versao');
    }

    /**

     * @param string $value 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}