<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Transp;

/**
 * Dados dos volumes

 * @name Vol
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Vol extends \Sped\Components\Xml\Element  {
    const NAME = 'vol';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol 
     * @param int $index 
     */
    public function getQVol(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol 
     */
    public function addQVol(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol $paramQVol 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setQVol(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol $paramQVol){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol::NAME);
        $this->appendChild($paramQVol, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp 
     * @param int $index 
     */
    public function getEsp(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp 
     */
    public function addEsp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp $paramEsp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setEsp(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp $paramEsp){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp::NAME);
        $this->appendChild($paramEsp, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca 
     * @param int $index 
     */
    public function getMarca(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca 
     */
    public function addMarca(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca $paramMarca 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setMarca(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca $paramMarca){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca::NAME);
        $this->appendChild($paramMarca, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol 
     * @param int $index 
     */
    public function getNVol(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol 
     */
    public function addNVol(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol $paramNVol 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setNVol(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol $paramNVol){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol::NAME);
        $this->appendChild($paramNVol, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1203 
     * @param int $index 
     */
    public function getPesoL(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1203');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1203::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1203 
     */
    public function addPesoL(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1203(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1203 $paramPesoL 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setPesoL(\Sped\Schemas\V200\TDec_1203 $paramPesoL){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1203::NAME);
        $this->appendChild($paramPesoL, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1203 
     * @param int $index 
     */
    public function getPesoB(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1203');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1203::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1203 
     */
    public function addPesoB(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1203(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1203 $paramPesoB 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setPesoB(\Sped\Schemas\V200\TDec_1203 $paramPesoB){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1203::NAME);
        $this->appendChild($paramPesoB, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres 
     * @param int $index 
     */
    public function getLacres(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres 
     */
    public function addLacres(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres $paramLacres 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setLacres(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres $paramLacres){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres::NAME);
        $this->appendChild($paramLacres, false);
        return $this;
    }

}