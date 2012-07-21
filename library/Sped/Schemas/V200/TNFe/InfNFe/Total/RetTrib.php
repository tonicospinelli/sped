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

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVRetPIS($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETPIS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVRetPIS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VRETPIS, $value), false);
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
     * @param type $index 
     */
    public function getVRetCOFINS($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETCOFINS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVRetCOFINS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VRETCOFINS, $value), false);
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
     * @param type $index 
     */
    public function getVRetCSLL($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETCSLL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVRetCSLL($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VRETCSLL, $value), false);
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
     * @param type $index 
     */
    public function getVBCIRRF($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBCIRRF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVBCIRRF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VBCIRRF, $value), false);
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
     * @param type $index 
     */
    public function getVIRRF($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VIRRF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVIRRF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VIRRF, $value), false);
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
     * @param type $index 
     */
    public function getVBCRetPrev($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBCRETPREV)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVBCRetPrev($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VBCRETPREV, $value), false);
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
     * @param type $index 
     */
    public function getVRetPrev($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETPREV)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVRetPrev($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VRETPREV, $value), false);
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