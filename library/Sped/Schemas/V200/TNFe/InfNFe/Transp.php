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
     * @param type $value 
     */
    public function addModFrete($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\ModFrete(self::MODFRETE, $value), true);
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
     * @param type $index 
     */
    public function getTransporta($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta');
        return $this->getElementsByTagName(self::TRANSPORTA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function addTransporta(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta(self::TRANSPORTA), true);
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
     * @param type $index 
     */
    public function getRetTransp($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp');
        return $this->getElementsByTagName(self::RETTRANSP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function addRetTransp(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp(self::RETTRANSP), true);
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
     * @param type $index 
     */
    public function getVeicTransp($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVeiculo');
        return $this->getElementsByTagName(self::VEICTRANSP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVeiculo 
     * @param type $value 
     */
    public function addVeicTransp($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TVeiculo(self::VEICTRANSP, $value), true);
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
     * @param type $index 
     */
    public function getReboque($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVeiculo');
        return $this->getElementsByTagName(self::REBOQUE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVeiculo 
     * @param type $value 
     */
    public function addReboque($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TVeiculo(self::REBOQUE, $value), true);
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
     * @param type $index 
     */
    public function getVagao($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao');
        return $this->getElementsByTagName(self::VAGAO)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao 
     * @param type $value 
     */
    public function addVagao($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vagao(self::VAGAO, $value), true);
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
     * @param type $index 
     */
    public function getBalsa($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa');
        return $this->getElementsByTagName(self::BALSA)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa 
     * @param type $value 
     */
    public function addBalsa($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Balsa(self::BALSA, $value), true);
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
     * @param type $index 
     */
    public function getVol($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol');
        return $this->getElementsByTagName(self::VOL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function addVol(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol(self::VOL), true);
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