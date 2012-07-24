<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Veículos novos
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name VeicProd
 * @package Sped
 */
class VeicProd extends \Sped\Components\Xml\Element  {

    const TPOP = 'tpOp';

    const CHASSI = 'chassi';

    const CCOR = 'cCor';

    const XCOR = 'xCor';

    const POT = 'pot';

    const CILIN = 'cilin';

    const PESOL = 'pesoL';

    const PESOB = 'pesoB';

    const NSERIE = 'nSerie';

    const TPCOMB = 'tpComb';

    const NMOTOR = 'nMotor';

    const CMT = 'CMT';

    const DIST = 'dist';

    const ANOMOD = 'anoMod';

    const ANOFAB = 'anoFab';

    const TPPINT = 'tpPint';

    const TPVEIC = 'tpVeic';

    const ESPVEIC = 'espVeic';

    const VIN = 'VIN';

    const CONDVEIC = 'condVeic';

    const CMOD = 'cMod';

    const CCORDENATRAN = 'cCorDENATRAN';

    const LOTA = 'lota';

    const TPREST = 'tpRest';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpOp 
     */
    public function getTpOp(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpOp');
        return $this->getElementsByTagName(self::TPOP)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpOp 
     */
    public function addTpOp($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpOp(self::TPOP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpOp $paramTpOp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setTpOp(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpOp $paramTpOp){
        $this->removeElementsByTagName(self::TPOP);
        $this->appendChild($paramTpOp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Chassi 
     */
    public function getChassi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Chassi');
        return $this->getElementsByTagName(self::CHASSI)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Chassi 
     */
    public function addChassi($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Chassi(self::CHASSI, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Chassi $paramChassi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setChassi(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Chassi $paramChassi){
        $this->removeElementsByTagName(self::CHASSI);
        $this->appendChild($paramChassi, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCor 
     */
    public function getCCor(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCor');
        return $this->getElementsByTagName(self::CCOR)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCor 
     */
    public function addCCor($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCor(self::CCOR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCor $paramCCor 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setCCor(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCor $paramCCor){
        $this->removeElementsByTagName(self::CCOR);
        $this->appendChild($paramCCor, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\XCor 
     */
    public function getXCor(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\XCor');
        return $this->getElementsByTagName(self::XCOR)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\XCor 
     */
    public function addXCor($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\XCor(self::XCOR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\XCor $paramXCor 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setXCor(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\XCor $paramXCor){
        $this->removeElementsByTagName(self::XCOR);
        $this->appendChild($paramXCor, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Pot 
     */
    public function getPot(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Pot');
        return $this->getElementsByTagName(self::POT)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Pot 
     */
    public function addPot($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Pot(self::POT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Pot $paramPot 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setPot(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Pot $paramPot){
        $this->removeElementsByTagName(self::POT);
        $this->appendChild($paramPot, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Cilin 
     */
    public function getCilin(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Cilin');
        return $this->getElementsByTagName(self::CILIN)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Cilin 
     */
    public function addCilin($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Cilin(self::CILIN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Cilin $paramCilin 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setCilin(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Cilin $paramCilin){
        $this->removeElementsByTagName(self::CILIN);
        $this->appendChild($paramCilin, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoL 
     */
    public function getPesoL(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoL');
        return $this->getElementsByTagName(self::PESOL)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoL 
     */
    public function addPesoL($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoL(self::PESOL, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoL $paramPesoL 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setPesoL(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoL $paramPesoL){
        $this->removeElementsByTagName(self::PESOL);
        $this->appendChild($paramPesoL, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoB 
     */
    public function getPesoB(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoB');
        return $this->getElementsByTagName(self::PESOB)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoB 
     */
    public function addPesoB($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoB(self::PESOB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoB $paramPesoB 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setPesoB(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\PesoB $paramPesoB){
        $this->removeElementsByTagName(self::PESOB);
        $this->appendChild($paramPesoB, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NSerie 
     */
    public function getNSerie(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NSerie');
        return $this->getElementsByTagName(self::NSERIE)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NSerie 
     */
    public function addNSerie($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NSerie(self::NSERIE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NSerie $paramNSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setNSerie(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NSerie $paramNSerie){
        $this->removeElementsByTagName(self::NSERIE);
        $this->appendChild($paramNSerie, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpComb 
     */
    public function getTpComb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpComb');
        return $this->getElementsByTagName(self::TPCOMB)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpComb 
     */
    public function addTpComb($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpComb(self::TPCOMB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpComb $paramTpComb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setTpComb(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpComb $paramTpComb){
        $this->removeElementsByTagName(self::TPCOMB);
        $this->appendChild($paramTpComb, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NMotor 
     */
    public function getNMotor(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NMotor');
        return $this->getElementsByTagName(self::NMOTOR)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NMotor 
     */
    public function addNMotor($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NMotor(self::NMOTOR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NMotor $paramNMotor 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setNMotor(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\NMotor $paramNMotor){
        $this->removeElementsByTagName(self::NMOTOR);
        $this->appendChild($paramNMotor, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMT 
     */
    public function getCMT(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMT');
        return $this->getElementsByTagName(self::CMT)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMT 
     */
    public function addCMT($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMT(self::CMT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMT $paramCMT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setCMT(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMT $paramCMT){
        $this->removeElementsByTagName(self::CMT);
        $this->appendChild($paramCMT, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Dist 
     */
    public function getDist(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Dist');
        return $this->getElementsByTagName(self::DIST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Dist 
     */
    public function addDist($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Dist(self::DIST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Dist $paramDist 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setDist(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Dist $paramDist){
        $this->removeElementsByTagName(self::DIST);
        $this->appendChild($paramDist, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod 
     */
    public function getAnoMod(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod');
        return $this->getElementsByTagName(self::ANOMOD)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod 
     */
    public function addAnoMod($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod(self::ANOMOD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod $paramAnoMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setAnoMod(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoMod $paramAnoMod){
        $this->removeElementsByTagName(self::ANOMOD);
        $this->appendChild($paramAnoMod, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab 
     */
    public function getAnoFab(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab');
        return $this->getElementsByTagName(self::ANOFAB)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab 
     */
    public function addAnoFab($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab(self::ANOFAB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab $paramAnoFab 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setAnoFab(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\AnoFab $paramAnoFab){
        $this->removeElementsByTagName(self::ANOFAB);
        $this->appendChild($paramAnoFab, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpPint 
     */
    public function getTpPint(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpPint');
        return $this->getElementsByTagName(self::TPPINT)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpPint 
     */
    public function addTpPint($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpPint(self::TPPINT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpPint $paramTpPint 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setTpPint(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpPint $paramTpPint){
        $this->removeElementsByTagName(self::TPPINT);
        $this->appendChild($paramTpPint, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic 
     */
    public function getTpVeic(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic');
        return $this->getElementsByTagName(self::TPVEIC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic 
     */
    public function addTpVeic($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic(self::TPVEIC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic $paramTpVeic 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setTpVeic(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpVeic $paramTpVeic){
        $this->removeElementsByTagName(self::TPVEIC);
        $this->appendChild($paramTpVeic, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic 
     */
    public function getEspVeic(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic');
        return $this->getElementsByTagName(self::ESPVEIC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic 
     */
    public function addEspVeic($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic(self::ESPVEIC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic $paramEspVeic 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setEspVeic(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\EspVeic $paramEspVeic){
        $this->removeElementsByTagName(self::ESPVEIC);
        $this->appendChild($paramEspVeic, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\VIN 
     */
    public function getVIN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\VIN');
        return $this->getElementsByTagName(self::VIN)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\VIN 
     */
    public function addVIN($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\VIN(self::VIN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\VIN $paramVIN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setVIN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\VIN $paramVIN){
        $this->removeElementsByTagName(self::VIN);
        $this->appendChild($paramVIN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic 
     */
    public function getCondVeic(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic');
        return $this->getElementsByTagName(self::CONDVEIC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic 
     */
    public function addCondVeic($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic(self::CONDVEIC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic $paramCondVeic 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setCondVeic(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CondVeic $paramCondVeic){
        $this->removeElementsByTagName(self::CONDVEIC);
        $this->appendChild($paramCondVeic, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMod 
     */
    public function getCMod(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMod');
        return $this->getElementsByTagName(self::CMOD)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMod 
     */
    public function addCMod($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMod(self::CMOD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMod $paramCMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setCMod(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CMod $paramCMod){
        $this->removeElementsByTagName(self::CMOD);
        $this->appendChild($paramCMod, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN 
     */
    public function getCCorDENATRAN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN');
        return $this->getElementsByTagName(self::CCORDENATRAN)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN 
     */
    public function addCCorDENATRAN($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN(self::CCORDENATRAN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN $paramCCorDENATRAN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setCCorDENATRAN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\CCorDENATRAN $paramCCorDENATRAN){
        $this->removeElementsByTagName(self::CCORDENATRAN);
        $this->appendChild($paramCCorDENATRAN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Lota 
     */
    public function getLota(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Lota');
        return $this->getElementsByTagName(self::LOTA)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Lota 
     */
    public function addLota($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Lota(self::LOTA, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Lota $paramLota 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setLota(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\Lota $paramLota){
        $this->removeElementsByTagName(self::LOTA);
        $this->appendChild($paramLota, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpRest 
     */
    public function getTpRest(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpRest');
        return $this->getElementsByTagName(self::TPREST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpRest 
     */
    public function addTpRest($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpRest(self::TPREST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpRest $paramTpRest 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function setTpRest(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd\TpRest $paramTpRest){
        $this->removeElementsByTagName(self::TPREST);
        $this->appendChild($paramTpRest, false);
        return $this;
    }

}