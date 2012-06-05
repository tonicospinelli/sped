<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * //TODO: adicionar descrição da classe Ide
 * @name Ide
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 04/06/2012
 */
class Ide extends \DOMElement {

    protected $defaultNamespace = 'Sped\\Schemas\\V200\\TNFe\\InfNFe\\';

    public function __construct() {
        parent::__construct('ide', null, 'http://www.portalfiscal.inf.br/nfe');
    }

    public function getCUF() {
        return $this->getElementsByTagName('cUF')->item(0);
    }

    public function setCUF($paramcUF) {
        $this->cUF = $cUF;
        $cUF = $this->getCUF();
        if ($cUF == null)
            $this->appendChild($paramcUF);
        else
            $this->replaceChild($paramcUF, $cUF);

        return $this;
    }

    public function getCNF() {
        return $this->getElementsByTagName('cNF')->item(0);
    }

    public function setCNF($cNF) {
        $this->cNF = $cNF;
    }

    public function getNatOp() {
        return $this->getElementsByTagName('natOp')->item(0);
    }

    public function setNatOp($natOp) {
        $this->natOp = $natOp;
    }

    public function getIndPag() {
        return $this->getElementsByTagName('indPag')->item(0);
    }

    public function setIndPag($indPag) {
        $this->indPag = $indPag;
    }

    public function getMod() {
        return $this->getElementsByTagName('mod')->item(0);
    }

    public function setMod($mod) {
        $this->mod = $mod;
    }

    public function getSerie() {
        return $this->getElementsByTagName('serie')->item(0);
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function getNNF() {
        return $this->getElementsByTagName('nNF')->item(0);
    }

    public function setNNF($nNF) {
        $this->nNF = $nNF;
    }

    public function getDEmi() {
        return $this->getElementsByTagName('dEmi')->item(0);
    }

    public function setDEmi($dEmi) {
        $this->dEmi = $dEmi;
    }

    public function getDSaiEnt() {
        return $this->getElementsByTagName('dSaiEnt')->item(0);
    }

    public function setDSaiEnt($dSaiEnt) {
        $this->dSaiEnt = $dSaiEnt;
    }

    public function getHSaiEnt() {
        return $this->getElementsByTagName('hSaiEnt')->item(0);
    }

    public function setHSaiEnt($hSaiEnt) {
        $this->hSaiEnt = $hSaiEnt;
    }

    public function getTpNF() {
        return $this->getElementsByTagName('tpNF')->item(0);
    }

    public function setTpNF($tpNF) {
        $this->tpNF = $tpNF;
    }

    public function getCMunFG() {
        return $this->getElementsByTagName('cMunFG')->item(0);
    }

    public function setCMunFG($cMunFG) {
        $this->cMunFG = $cMunFG;
    }

    public function getNFref() {
        return $this->getElementsByTagName('NFref')->item(0);
    }

    public function setNFref($NFref) {
        $this->NFref = $NFref;
    }

    public function getTpImp() {
        return $this->getElementsByTagName('tpImp')->item(0);
    }

    public function setTpImp($tpImp) {
        $this->tpImp = $tpImp;
    }

    public function getTpEmis() {
        return $this->getElementsByTagName('tpEmis')->item(0);
    }

    public function setTpEmis($tpEmis) {
        $this->tpEmis = $tpEmis;
    }

    public function getCDV() {
        return $this->getElementsByTagName('cDV')->item(0);
    }

    public function setCDV($cDV) {
        $this->cDV = $cDV;
    }

    public function getTpAmb() {
        return $this->getElementsByTagName('tpAmb')->item(0);
    }

    public function setTpAmb($tpAmb) {
        $this->tpAmb = $tpAmb;
    }

    public function getFinNFe() {
        return $this->getElementsByTagName('finNFe')->item(0);
    }

    public function setFinNFe($finNFe) {
        $this->finNFe = $finNFe;
    }

    public function getProcEmi() {
        return $this->getElementsByTagName('procEmi')->item(0);
    }

    public function setProcEmi($procEmi) {
        $this->procEmi = $procEmi;
    }

    public function getVerProc() {
        return $this->getElementsByTagName('verProc')->item(0);
    }

    public function setVerProc($verProc) {
        $this->verProc = $verProc;
    }

    public function getDhCont() {
        return $this->getElementsByTagName('dhCont')->item(0);
    }

    public function setDhCont($dhCont) {
        $this->dhCont = $dhCont;
    }

    public function getXJust() {
        return $this->getElementsByTagName('xJust')->item(0);
    }

    public function setXJust($xJust) {
        $this->xJust = $xJust;
    }

}