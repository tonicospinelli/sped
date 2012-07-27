<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Total;

/**
 * Retenção de Tributos Federais
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name RetTrib
 * @package Sped
 */
class RetTrib extends \Sped\Components\Xml\Element 
{

    const VRETPIS = 'vRetPIS';

    const VRETCOFINS = 'vRetCOFINS';

    const VRETCSLL = 'vRetCSLL';

    const VBCIRRF = 'vBCIRRF';

    const VIRRF = 'vIRRF';

    const VBCRETPREV = 'vBCRetPrev';

    const VRETPREV = 'vRetPrev';

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVRetPIS($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETPIS)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVRetPIS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VRETPIS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVRetPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVRetPIS(\Sped\Schemas\V200\TDec_1302Opc $paramVRetPIS)
    {
        $this->removeElementsByTagName(self::VRETPIS);
        $this->appendChild($paramVRetPIS, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVRetCOFINS($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETCOFINS)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVRetCOFINS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VRETCOFINS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVRetCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVRetCOFINS(\Sped\Schemas\V200\TDec_1302Opc $paramVRetCOFINS)
    {
        $this->removeElementsByTagName(self::VRETCOFINS);
        $this->appendChild($paramVRetCOFINS, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVRetCSLL($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETCSLL)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVRetCSLL($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VRETCSLL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVRetCSLL 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVRetCSLL(\Sped\Schemas\V200\TDec_1302Opc $paramVRetCSLL)
    {
        $this->removeElementsByTagName(self::VRETCSLL);
        $this->appendChild($paramVRetCSLL, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVBCIRRF($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBCIRRF)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBCIRRF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VBCIRRF, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBCIRRF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVBCIRRF(\Sped\Schemas\V200\TDec_1302Opc $paramVBCIRRF)
    {
        $this->removeElementsByTagName(self::VBCIRRF);
        $this->appendChild($paramVBCIRRF, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVIRRF($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VIRRF)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVIRRF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VIRRF, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVIRRF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVIRRF(\Sped\Schemas\V200\TDec_1302Opc $paramVIRRF)
    {
        $this->removeElementsByTagName(self::VIRRF);
        $this->appendChild($paramVIRRF, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVBCRetPrev($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBCRETPREV)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBCRetPrev($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VBCRETPREV, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBCRetPrev 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVBCRetPrev(\Sped\Schemas\V200\TDec_1302Opc $paramVBCRetPrev)
    {
        $this->removeElementsByTagName(self::VBCRETPREV);
        $this->appendChild($paramVBCRetPrev, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVRetPrev($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VRETPREV)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVRetPrev($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VRETPREV, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVRetPrev 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function setVRetPrev(\Sped\Schemas\V200\TDec_1302Opc $paramVRetPrev)
    {
        $this->removeElementsByTagName(self::VRETPREV);
        $this->appendChild($paramVRetPrev, false);
        return $this;
    }

}