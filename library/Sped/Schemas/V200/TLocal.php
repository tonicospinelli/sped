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
    const NAME = 'Local';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TCnpjOpc 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpjOpc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCnpjOpc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCnpjOpc 
     */
    public function addCNPJ(){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpjOpc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCnpjOpc $paramCNPJ 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpjOpc $paramCNPJ){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCnpjOpc::NAME);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCpf::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCpf 
     */
    public function addCPF(){
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCpf::NAME);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\XLgr 
     */
    public function getXLgr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XLgr');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TLocal\XLgr::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\XLgr 
     */
    public function addXLgr(){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XLgr(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TLocal\XLgr $paramXLgr 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXLgr(\Sped\Schemas\V200\TLocal\XLgr $paramXLgr){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TLocal\XLgr::NAME);
        $this->appendChild($paramXLgr, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\Nro 
     */
    public function getNro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\Nro');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TLocal\Nro::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\Nro 
     */
    public function addNro(){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\Nro(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TLocal\Nro $paramNro 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setNro(\Sped\Schemas\V200\TLocal\Nro $paramNro){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TLocal\Nro::NAME);
        $this->appendChild($paramNro, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\XCpl 
     * @param int $index 
     */
    public function getXCpl(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XCpl');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TLocal\XCpl::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\XCpl 
     */
    public function addXCpl(){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XCpl(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TLocal\XCpl $paramXCpl 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXCpl(\Sped\Schemas\V200\TLocal\XCpl $paramXCpl){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TLocal\XCpl::NAME);
        $this->appendChild($paramXCpl, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\XBairro 
     */
    public function getXBairro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XBairro');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TLocal\XBairro::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\XBairro 
     */
    public function addXBairro(){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XBairro(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TLocal\XBairro $paramXBairro 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXBairro(\Sped\Schemas\V200\TLocal\XBairro $paramXBairro){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TLocal\XBairro::NAME);
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
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCMun(\Sped\Schemas\V200\TCodMunIBGE $paramCMun){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCodMunIBGE::NAME);
        $this->appendChild($paramCMun, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\XMun 
     */
    public function getXMun(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XMun');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TLocal\XMun::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TLocal\XMun 
     */
    public function addXMun(){
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XMun(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TLocal\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXMun(\Sped\Schemas\V200\TLocal\XMun $paramXMun){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TLocal\XMun::NAME);
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
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TUf::NAME);
        $this->appendChild($paramUF, false);
        return $this;
    }

}