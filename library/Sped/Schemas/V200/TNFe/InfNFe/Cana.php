<?php
namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Informações de registro aquisições de cana // v2.0

 * @name Cana
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Cana extends \Sped\Components\Xml\Element  {
    const NAME = 'cana';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Safra 
     */
    public function getSafra(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana\Safra');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Safra::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Safra 
     */
    public function addSafra(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cana\Safra(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cana\Safra $paramSafra 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setSafra(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Safra $paramSafra){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Safra::NAME);
        $this->appendChild($paramSafra, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Ref 
     */
    public function getRef(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana\Ref');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Ref::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Ref 
     */
    public function addRef(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cana\Ref(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cana\Ref $paramRef 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setRef(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Ref $paramRef){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Ref::NAME);
        $this->appendChild($paramRef, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia 
     */
    public function getForDia(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia 
     */
    public function addForDia(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia $paramForDia 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setForDia(\Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia $paramForDia){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia::NAME);
        $this->appendChild($paramForDia, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getQTotMes(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addQTotMes(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1110 $paramQTotMes 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setQTotMes(\Sped\Schemas\V200\TDec_1110 $paramQTotMes){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME);
        $this->appendChild($paramQTotMes, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getQTotAnt(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addQTotAnt(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1110 $paramQTotAnt 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setQTotAnt(\Sped\Schemas\V200\TDec_1110 $paramQTotAnt){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME);
        $this->appendChild($paramQTotAnt, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getQTotGer(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addQTotGer(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1110 $paramQTotGer 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setQTotGer(\Sped\Schemas\V200\TDec_1110 $paramQTotGer){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME);
        $this->appendChild($paramQTotGer, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc 
     * @param int $index 
     */
    public function getDeduc(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc 
     */
    public function addDeduc(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc $paramDeduc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setDeduc(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc $paramDeduc){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc::NAME);
        $this->appendChild($paramDeduc, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVFor(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVFor(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVFor 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setVFor(\Sped\Schemas\V200\TDec_1302 $paramVFor){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVFor, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVTotDed(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVTotDed(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVTotDed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setVTotDed(\Sped\Schemas\V200\TDec_1302 $paramVTotDed){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVTotDed, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVLiqFor(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVLiqFor(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVLiqFor 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function setVLiqFor(\Sped\Schemas\V200\TDec_1302 $paramVLiqFor){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVLiqFor, false);
        return $this;
    }

}