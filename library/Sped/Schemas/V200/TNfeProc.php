<?php
namespace Sped\Schemas\V200;

/**
 *  Tipo da NF-e processada

 * @name TNfeProc
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TNfeProc extends \Sped\Components\Xml\Element  {
    const NAME = 'NfeProc';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe 
     */
    public function getNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe 
     */
    public function addNFe(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe $paramNFe 
     * @return \Sped\Schemas\V200\TNfeProc 
     */
    public function setNFe(\Sped\Schemas\V200\TNFe $paramNFe){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe::NAME);
        $this->appendChild($paramNFe, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function getProtNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProtNFe');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TProtNFe::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function addProtNFe(){
        return $this->appendChild(new \Sped\Schemas\V200\TProtNFe(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TProtNFe $paramProtNFe 
     * @return \Sped\Schemas\V200\TNfeProc 
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
     * @return \Sped\Schemas\V200\TNfeProc 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}