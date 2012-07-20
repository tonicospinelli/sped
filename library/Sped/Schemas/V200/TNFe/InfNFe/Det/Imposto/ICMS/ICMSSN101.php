<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
 * @name ICMSSN101
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ICMSSN101 extends \Sped\Components\Xml\Element  {

    const ORIG = 'orig';

    const CSOSN = 'CSOSN';

    const PCREDSN = 'pCredSN';

    const VCREDICMSSN = 'vCredICMSSN';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function getOrig(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Torig');
        return $this->getElementsByTagName(self::ORIG)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig(){
        return $this->appendChild(new \Sped\Schemas\V200\Torig(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig){
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN 
     */
    public function getCSOSN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN');
        return $this->getElementsByTagName(self::CSOSN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN 
     */
    public function addCSOSN(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN $paramCSOSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 
     */
    public function setCSOSN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101\CSOSN $paramCSOSN){
        $this->removeElementsByTagName(self::CSOSN);
        $this->appendChild($paramCSOSN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPCredSN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PCREDSN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPCredSN(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPCredSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 
     */
    public function setPCredSN(\Sped\Schemas\V200\TDec_0302 $paramPCredSN){
        $this->removeElementsByTagName(self::PCREDSN);
        $this->appendChild($paramPCredSN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVCredICMSSN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VCREDICMSSN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVCredICMSSN(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCredICMSSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 
     */
    public function setVCredICMSSN(\Sped\Schemas\V200\TDec_1302 $paramVCredICMSSN){
        $this->removeElementsByTagName(self::VCREDICMSSN);
        $this->appendChild($paramVCredICMSSN, false);
        return $this;
    }

}