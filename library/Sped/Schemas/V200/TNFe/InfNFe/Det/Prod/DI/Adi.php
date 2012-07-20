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

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

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
     */
    public function addNAdicao(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao(), true);
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
     */
    public function addNSeqAdic(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic(), true);
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
     */
    public function addCFabricante(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante(), true);
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
     * @param int $index 
     */
    public function getVDescDI(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDESCDI)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVDescDI(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
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