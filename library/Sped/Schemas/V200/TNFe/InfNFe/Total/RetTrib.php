<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Total;

/**
 * Retenção de Tributos Federais
 * @name RetTrib
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class RetTrib extends \Sped\Components\Xml\Element  {

    const VRETPIS = 'vRetPIS';

    const VRETCOFINS = 'vRetCOFINS';

    const VRETCSLL = 'vRetCSLL';

    const VBCIRRF = 'vBCIRRF';

    const VIRRF = 'vIRRF';

    const VBCRETPREV = 'vBCRetPrev';

    const VRETPREV = 'vRetPrev';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVRetPIS(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETPIS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVRetPIS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVRetPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVRetPIS(\Sped\Schemas\V200\TDec_1302Opc $paramVRetPIS){
        $this->removeElementsByTagName(self::VRETPIS);
        $this->appendChild($paramVRetPIS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVRetCOFINS(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETCOFINS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVRetCOFINS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVRetCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVRetCOFINS(\Sped\Schemas\V200\TDec_1302Opc $paramVRetCOFINS){
        $this->removeElementsByTagName(self::VRETCOFINS);
        $this->appendChild($paramVRetCOFINS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVRetCSLL(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETCSLL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVRetCSLL(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVRetCSLL 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVRetCSLL(\Sped\Schemas\V200\TDec_1302Opc $paramVRetCSLL){
        $this->removeElementsByTagName(self::VRETCSLL);
        $this->appendChild($paramVRetCSLL, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVBCIRRF(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBCIRRF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBCIRRF(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBCIRRF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVBCIRRF(\Sped\Schemas\V200\TDec_1302Opc $paramVBCIRRF){
        $this->removeElementsByTagName(self::VBCIRRF);
        $this->appendChild($paramVBCIRRF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVIRRF(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VIRRF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVIRRF(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVIRRF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVIRRF(\Sped\Schemas\V200\TDec_1302Opc $paramVIRRF){
        $this->removeElementsByTagName(self::VIRRF);
        $this->appendChild($paramVIRRF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVBCRetPrev(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBCRETPREV)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBCRetPrev(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBCRetPrev 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVBCRetPrev(\Sped\Schemas\V200\TDec_1302Opc $paramVBCRetPrev){
        $this->removeElementsByTagName(self::VBCRETPREV);
        $this->appendChild($paramVBCRetPrev, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVRetPrev(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETPREV)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVRetPrev(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVRetPrev 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVRetPrev(\Sped\Schemas\V200\TDec_1302Opc $paramVRetPrev){
        $this->removeElementsByTagName(self::VRETPREV);
        $this->appendChild($paramVRetPrev, false);
        return $this;
    }

}