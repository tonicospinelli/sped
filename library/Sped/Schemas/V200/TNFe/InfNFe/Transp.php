<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Dados dos transportes da NF-e
 * @name Transp
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Transp extends \Sped\Components\Xml\Element  {

    const MODFRETE = 'modFrete';

    const TRANSPORTA = 'transporta';

    const RETTRANSP = 'retTransp';

    const VEICTRANSP = 'veicTransp';

    const REBOQUE = 'reboque';

    const VAGAO = 'vagao';

    const BALSA = 'balsa';

    const VOL = 'vol';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\ModFrete 
     */
    public function getModFrete(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\ModFrete');
        return $this->getElementsByTagName(self::MODFRETE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\ModFrete 
     */
    public function addModFrete(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\ModFrete(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\ModFrete $paramModFrete 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function setModFrete(\Sped\Schemas\V200\TNFe\InfNFe\Transp\ModFrete $paramModFrete){
        $this->removeElementsByTagName(self::MODFRETE);
        $this->appendChild($paramModFrete, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     * @param int $index 
     */
    public function getTransporta(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta');
        return $this->getElementsByTagName(self::TRANSPORTA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function addTransporta(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta $paramTransporta 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function setTransporta(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta $paramTransporta){
        $this->removeElementsByTagName(self::TRANSPORTA);
        $this->appendChild($paramTransporta, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     * @param int $index 
     */
    public function getRetTransp(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp');
        return $this->getElementsByTagName(self::RETTRANSP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function addRetTransp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp $paramRetTransp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function setRetTransp(\Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp $paramRetTransp){
        $this->removeElementsByTagName(self::RETTRANSP);
        $this->appendChild($paramRetTransp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVeiculo 
     * @param int $index 
     */
    public function getVeicTransp(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVeiculo');
        return $this->getElementsByTagName(self::VEICTRANSP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVeiculo 
     */
    public function addVeicTransp(){
        return $this->appendChild(new \Sped\Schemas\V200\TVeiculo(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TVeiculo $paramVeicTransp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function setVeicTransp(\Sped\Schemas\V200\TVeiculo $paramVeicTransp){
        $this->removeElementsByTagName(self::VEICTRANSP);
        $this->appendChild($paramVeicTransp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVeiculo 
     * @param int $index 
     */
    public function getReboque(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVeiculo');
        return $this->getElementsByTagName(self::REBOQUE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVeiculo 
     */
    public function addReboque(){
        return $this->appendChild(new \Sped\Schemas\V200\TVeiculo(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TVeiculo $paramReboque 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function setReboque(\Sped\Schemas\V200\TVeiculo $paramReboque){
        $this->removeElementsByTagName(self::REBOQUE);
        $this->appendChild($paramReboque, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao 
     * @param int $index 
     */
    public function getVagao(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao');
        return $this->getElementsByTagName(self::VAGAO)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao 
     */
    public function addVagao(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao $paramVagao 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function setVagao(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao $paramVagao){
        $this->removeElementsByTagName(self::VAGAO);
        $this->appendChild($paramVagao, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa 
     * @param int $index 
     */
    public function getBalsa(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa');
        return $this->getElementsByTagName(self::BALSA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa 
     */
    public function addBalsa(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa $paramBalsa 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function setBalsa(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa $paramBalsa){
        $this->removeElementsByTagName(self::BALSA);
        $this->appendChild($paramBalsa, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     * @param int $index 
     */
    public function getVol(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol');
        return $this->getElementsByTagName(self::VOL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function addVol(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol $paramVol 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function setVol(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol $paramVol){
        $this->removeElementsByTagName(self::VOL);
        $this->appendChild($paramVol, false);
        return $this;
    }

}