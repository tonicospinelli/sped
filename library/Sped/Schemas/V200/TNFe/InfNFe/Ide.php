<?php
namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * identificação da NF-e

 * @name Ide
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Ide extends \Sped\Components\Xml\Element  {
    const NAME = 'ide';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCodUfIBGE::NAME);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF 
     */
    public function getCNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF 
     */
    public function addCNF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF $paramCNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCNF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF $paramCNF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF::NAME);
        $this->appendChild($paramCNF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp 
     */
    public function getNatOp(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp 
     */
    public function addNatOp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp $paramNatOp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNatOp(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp $paramNatOp){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp::NAME);
        $this->appendChild($paramNatOp, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag 
     */
    public function getIndPag(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag 
     */
    public function addIndPag(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag $paramIndPag 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setIndPag(\Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag $paramIndPag){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag::NAME);
        $this->appendChild($paramIndPag, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TMod 
     */
    public function getMod(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMod');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TMod::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TMod 
     */
    public function addMod(){
        return $this->appendChild(new \Sped\Schemas\V200\TMod(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TMod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setMod(\Sped\Schemas\V200\TMod $paramMod){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TMod::NAME);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TSerie 
     */
    public function getSerie(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TSerie');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TSerie::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TSerie 
     */
    public function addSerie(){
        return $this->appendChild(new \Sped\Schemas\V200\TSerie(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TSerie $paramSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setSerie(\Sped\Schemas\V200\TSerie $paramSerie){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TSerie::NAME);
        $this->appendChild($paramSerie, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNF 
     */
    public function getNNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNF');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNF::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNF 
     */
    public function addNNF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNF(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNF $paramNNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNNF(\Sped\Schemas\V200\TNF $paramNNF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNF::NAME);
        $this->appendChild($paramNNF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function getDEmi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDEmi(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDEmi(\Sped\Schemas\V200\TData $paramDEmi){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDEmi, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function getDSaiEnt(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDSaiEnt(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDSaiEnt 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDSaiEnt(\Sped\Schemas\V200\TData $paramDSaiEnt){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDSaiEnt, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TTime 
     * @param int $index 
     */
    public function getHSaiEnt(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TTime');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TTime::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TTime 
     */
    public function addHSaiEnt(){
        return $this->appendChild(new \Sped\Schemas\V200\TTime(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TTime $paramHSaiEnt 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setHSaiEnt(\Sped\Schemas\V200\TTime $paramHSaiEnt){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TTime::NAME);
        $this->appendChild($paramHSaiEnt, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF 
     */
    public function getTpNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF 
     */
    public function addTpNF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF $paramTpNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpNF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF $paramTpNF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF::NAME);
        $this->appendChild($paramTpNF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMunFG(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCodMunIBGE::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMunFG(){
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMunFG 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCMunFG(\Sped\Schemas\V200\TCodMunIBGE $paramCMunFG){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCodMunIBGE::NAME);
        $this->appendChild($paramCMunFG, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     * @param int $index 
     */
    public function getNFref(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function addNFref(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref $paramNFref 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNFref(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref $paramNFref){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref::NAME);
        $this->appendChild($paramNFref, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp 
     */
    public function getTpImp(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp 
     */
    public function addTpImp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp $paramTpImp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpImp(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp $paramTpImp){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp::NAME);
        $this->appendChild($paramTpImp, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis 
     */
    public function getTpEmis(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis 
     */
    public function addTpEmis(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis $paramTpEmis 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpEmis(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis $paramTpEmis){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis::NAME);
        $this->appendChild($paramTpEmis, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV 
     */
    public function getCDV(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV 
     */
    public function addCDV(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV $paramCDV 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCDV(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV $paramCDV){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV::NAME);
        $this->appendChild($paramCDV, false);
        return $this;
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TAmb::NAME);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TFinNFe 
     */
    public function getFinNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TFinNFe');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TFinNFe::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TFinNFe 
     */
    public function addFinNFe(){
        return $this->appendChild(new \Sped\Schemas\V200\TFinNFe(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TFinNFe $paramFinNFe 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setFinNFe(\Sped\Schemas\V200\TFinNFe $paramFinNFe){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TFinNFe::NAME);
        $this->appendChild($paramFinNFe, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TProcEmi 
     */
    public function getProcEmi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProcEmi');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TProcEmi::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TProcEmi 
     */
    public function addProcEmi(){
        return $this->appendChild(new \Sped\Schemas\V200\TProcEmi(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TProcEmi $paramProcEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setProcEmi(\Sped\Schemas\V200\TProcEmi $paramProcEmi){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TProcEmi::NAME);
        $this->appendChild($paramProcEmi, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc 
     */
    public function getVerProc(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc 
     */
    public function addVerProc(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc $paramVerProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setVerProc(\Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc $paramVerProc){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc::NAME);
        $this->appendChild($paramVerProc, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont 
     */
    public function getDhCont(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont 
     */
    public function addDhCont(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont $paramDhCont 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDhCont(\Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont $paramDhCont){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont::NAME);
        $this->appendChild($paramDhCont, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust 
     */
    public function getXJust(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust 
     */
    public function addXJust(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust $paramXJust 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setXJust(\Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust $paramXJust){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust::NAME);
        $this->appendChild($paramXJust, false);
        return $this;
    }

}