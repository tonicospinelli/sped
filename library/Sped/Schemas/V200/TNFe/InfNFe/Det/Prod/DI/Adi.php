<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI;

/**
 * Adições (NT 2011/004)
 * @name Adi
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Adi extends \Sped\Components\Xml\Element  {

    const NADICAO = 'nAdicao';

    const NSEQADIC = 'nSeqAdic';

    const CFABRICANTE = 'cFabricante';

    const VDESCDI = 'vDescDI';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao 
     */
    public function getNAdicao(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao');
        return $this->getElementsByTagName(self::NADICAO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao 
     * @param type $value 
     */
    public function addNAdicao($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao(self::NADICAO, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao $paramNAdicao 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function setNAdicao(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao $paramNAdicao){
        $this->removeElementsByTagName(self::NADICAO);
        $this->appendChild($paramNAdicao, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic 
     */
    public function getNSeqAdic(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic');
        return $this->getElementsByTagName(self::NSEQADIC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic 
     * @param type $value 
     */
    public function addNSeqAdic($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic(self::NSEQADIC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic $paramNSeqAdic 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function setNSeqAdic(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic $paramNSeqAdic){
        $this->removeElementsByTagName(self::NSEQADIC);
        $this->appendChild($paramNSeqAdic, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante 
     */
    public function getCFabricante(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante');
        return $this->getElementsByTagName(self::CFABRICANTE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante 
     * @param type $value 
     */
    public function addCFabricante($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante(self::CFABRICANTE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante $paramCFabricante 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function setCFabricante(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante $paramCFabricante){
        $this->removeElementsByTagName(self::CFABRICANTE);
        $this->appendChild($paramCFabricante, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVDescDI($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDESCDI)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVDescDI($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VDESCDI, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDescDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function setVDescDI(\Sped\Schemas\V200\TDec_1302Opc $paramVDescDI){
        $this->removeElementsByTagName(self::VDESCDI);
        $this->appendChild($paramVDescDI, false);
        return $this;
    }

}