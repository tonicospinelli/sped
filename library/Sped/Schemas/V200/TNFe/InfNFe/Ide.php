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

    const CUF = 'cUF';

    const CNF = 'cNF';

    const NATOP = 'natOp';

    const INDPAG = 'indPag';

    const MOD = 'mod';

    const SERIE = 'serie';

    const NNF = 'nNF';

    const DEMI = 'dEmi';

    const DSAIENT = 'dSaiEnt';

    const HSAIENT = 'hSaiEnt';

    const TPNF = 'tpNF';

    const CMUNFG = 'cMunFG';

    const NFREF = 'NFref';

    const TPIMP = 'tpImp';

    const TPEMIS = 'tpEmis';

    const CDV = 'cDV';

    const TPAMB = 'tpAmb';

    const FINNFE = 'finNFe';

    const PROCEMI = 'procEmi';

    const VERPROC = 'verProc';

    const DHCONT = 'dhCont';

    const XJUST = 'xJust';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
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
     */
    public function addCUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF){
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF 
     */
    public function getCNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF');
        return $this->getElementsByTagName(self::CNF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF 
     */
    public function addCNF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF $paramCNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCNF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF $paramCNF){
        $this->removeElementsByTagName(self::CNF);
        $this->appendChild($paramCNF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp 
     */
    public function getNatOp(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp');
        return $this->getElementsByTagName(self::NATOP)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp 
     */
    public function addNatOp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp $paramNatOp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNatOp(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp $paramNatOp){
        $this->removeElementsByTagName(self::NATOP);
        $this->appendChild($paramNatOp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag 
     */
    public function getIndPag(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag');
        return $this->getElementsByTagName(self::INDPAG)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag 
     */
    public function addIndPag(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag $paramIndPag 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setIndPag(\Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag $paramIndPag){
        $this->removeElementsByTagName(self::INDPAG);
        $this->appendChild($paramIndPag, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TMod 
     */
    public function getMod(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMod');
        return $this->getElementsByTagName(self::MOD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TMod 
     */
    public function addMod(){
        return $this->appendChild(new \Sped\Schemas\V200\TMod(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TMod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setMod(\Sped\Schemas\V200\TMod $paramMod){
        $this->removeElementsByTagName(self::MOD);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function getSerie(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TSerie');
        return $this->getElementsByTagName(self::SERIE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function addSerie(){
        return $this->appendChild(new \Sped\Schemas\V200\TSerie(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TSerie $paramSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setSerie(\Sped\Schemas\V200\TSerie $paramSerie){
        $this->removeElementsByTagName(self::SERIE);
        $this->appendChild($paramSerie, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNF 
     */
    public function getNNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNF');
        return $this->getElementsByTagName(self::NNF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNF 
     */
    public function addNNF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNF(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNF $paramNNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNNF(\Sped\Schemas\V200\TNF $paramNNF){
        $this->removeElementsByTagName(self::NNF);
        $this->appendChild($paramNNF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDEmi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DEMI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDEmi(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDEmi(\Sped\Schemas\V200\TData $paramDEmi){
        $this->removeElementsByTagName(self::DEMI);
        $this->appendChild($paramDEmi, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDSaiEnt(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DSAIENT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDSaiEnt(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDSaiEnt 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDSaiEnt(\Sped\Schemas\V200\TData $paramDSaiEnt){
        $this->removeElementsByTagName(self::DSAIENT);
        $this->appendChild($paramDSaiEnt, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TTime 
     * @param int $index 
     */
    public function getHSaiEnt(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TTime');
        return $this->getElementsByTagName(self::HSAIENT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TTime 
     */
    public function addHSaiEnt(){
        return $this->appendChild(new \Sped\Schemas\V200\TTime(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TTime $paramHSaiEnt 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setHSaiEnt(\Sped\Schemas\V200\TTime $paramHSaiEnt){
        $this->removeElementsByTagName(self::HSAIENT);
        $this->appendChild($paramHSaiEnt, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF 
     */
    public function getTpNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF');
        return $this->getElementsByTagName(self::TPNF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF 
     */
    public function addTpNF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF $paramTpNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpNF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF $paramTpNF){
        $this->removeElementsByTagName(self::TPNF);
        $this->appendChild($paramTpNF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMunFG(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(self::CMUNFG)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMunFG(){
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMunFG 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCMunFG(\Sped\Schemas\V200\TCodMunIBGE $paramCMunFG){
        $this->removeElementsByTagName(self::CMUNFG);
        $this->appendChild($paramCMunFG, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     * @param int $index 
     */
    public function getNFref(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref');
        return $this->getElementsByTagName(self::NFREF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function addNFref(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref $paramNFref 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNFref(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref $paramNFref){
        $this->removeElementsByTagName(self::NFREF);
        $this->appendChild($paramNFref, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp 
     */
    public function getTpImp(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp');
        return $this->getElementsByTagName(self::TPIMP)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp 
     */
    public function addTpImp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp $paramTpImp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpImp(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp $paramTpImp){
        $this->removeElementsByTagName(self::TPIMP);
        $this->appendChild($paramTpImp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis 
     */
    public function getTpEmis(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis');
        return $this->getElementsByTagName(self::TPEMIS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis 
     */
    public function addTpEmis(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis $paramTpEmis 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpEmis(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis $paramTpEmis){
        $this->removeElementsByTagName(self::TPEMIS);
        $this->appendChild($paramTpEmis, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV 
     */
    public function getCDV(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV');
        return $this->getElementsByTagName(self::CDV)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV 
     */
    public function addCDV(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV $paramCDV 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCDV(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV $paramCDV){
        $this->removeElementsByTagName(self::CDV);
        $this->appendChild($paramCDV, false);
        return $this;
    }

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
     */
    public function addTpAmb(){
        return $this->appendChild(new \Sped\Schemas\V200\TAmb(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TAmb $paramTpAmb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb){
        $this->removeElementsByTagName(self::TPAMB);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TFinNFe 
     */
    public function getFinNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TFinNFe');
        return $this->getElementsByTagName(self::FINNFE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TFinNFe 
     */
    public function addFinNFe(){
        return $this->appendChild(new \Sped\Schemas\V200\TFinNFe(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TFinNFe $paramFinNFe 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setFinNFe(\Sped\Schemas\V200\TFinNFe $paramFinNFe){
        $this->removeElementsByTagName(self::FINNFE);
        $this->appendChild($paramFinNFe, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TProcEmi 
     */
    public function getProcEmi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProcEmi');
        return $this->getElementsByTagName(self::PROCEMI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TProcEmi 
     */
    public function addProcEmi(){
        return $this->appendChild(new \Sped\Schemas\V200\TProcEmi(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TProcEmi $paramProcEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setProcEmi(\Sped\Schemas\V200\TProcEmi $paramProcEmi){
        $this->removeElementsByTagName(self::PROCEMI);
        $this->appendChild($paramProcEmi, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc 
     */
    public function getVerProc(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc');
        return $this->getElementsByTagName(self::VERPROC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc 
     */
    public function addVerProc(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc $paramVerProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setVerProc(\Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc $paramVerProc){
        $this->removeElementsByTagName(self::VERPROC);
        $this->appendChild($paramVerProc, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont 
     */
    public function getDhCont(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont');
        return $this->getElementsByTagName(self::DHCONT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont 
     */
    public function addDhCont(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont $paramDhCont 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDhCont(\Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont $paramDhCont){
        $this->removeElementsByTagName(self::DHCONT);
        $this->appendChild($paramDhCont, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust 
     */
    public function getXJust(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust');
        return $this->getElementsByTagName(self::XJUST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust 
     */
    public function addXJust(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust $paramXJust 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setXJust(\Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust $paramXJust){
        $this->removeElementsByTagName(self::XJUST);
        $this->appendChild($paramXJust, false);
        return $this;
    }

}