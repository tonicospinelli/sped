<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
 * @name ICMSSN201
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ICMSSN201 extends \Sped\Components\Xml\Element  {

    const ORIG = 'orig';

    const CSOSN = 'CSOSN';

    const MODBCST = 'modBCST';

    const PMVAST = 'pMVAST';

    const PREDBCST = 'pRedBCST';

    const VBCST = 'vBCST';

    const PICMSST = 'pICMSST';

    const VICMSST = 'vICMSST';

    const PCREDSN = 'pCredSN';

    const VCREDICMSSN = 'vCredICMSSN';

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
     * @param type $value 
     */
    public function addOrig($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\Torig(self::ORIG, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig){
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN 
     */
    public function getCSOSN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN');
        return $this->getElementsByTagName(self::CSOSN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN 
     * @param type $value 
     */
    public function addCSOSN($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN(self::CSOSN, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN $paramCSOSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setCSOSN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN $paramCSOSN){
        $this->removeElementsByTagName(self::CSOSN);
        $this->appendChild($paramCSOSN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST 
     */
    public function getModBCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST');
        return $this->getElementsByTagName(self::MODBCST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST 
     * @param type $value 
     */
    public function addModBCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST(self::MODBCST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST $paramModBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setModBCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST $paramModBCST){
        $this->removeElementsByTagName(self::MODBCST);
        $this->appendChild($paramModBCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     * @param type $index 
     */
    public function getPMVAST($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PMVAST)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     * @param type $value 
     */
    public function addPMVAST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PMVAST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPMVAST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setPMVAST(\Sped\Schemas\V200\TDec_0302Opc $paramPMVAST){
        $this->removeElementsByTagName(self::PMVAST);
        $this->appendChild($paramPMVAST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     * @param type $index 
     */
    public function getPRedBCST($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PREDBCST)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     * @param type $value 
     */
    public function addPRedBCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PREDBCST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setPRedBCST(\Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST){
        $this->removeElementsByTagName(self::PREDBCST);
        $this->appendChild($paramPRedBCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVBCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setVBCST(\Sped\Schemas\V200\TDec_1302 $paramVBCST){
        $this->removeElementsByTagName(self::VBCST);
        $this->appendChild($paramVBCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMSST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMSST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     * @param type $value 
     */
    public function addPICMSST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMSST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setPICMSST(\Sped\Schemas\V200\TDec_0302 $paramPICMSST){
        $this->removeElementsByTagName(self::PICMSST);
        $this->appendChild($paramPICMSST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMSST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVICMSST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMSST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setVICMSST(\Sped\Schemas\V200\TDec_1302 $paramVICMSST){
        $this->removeElementsByTagName(self::VICMSST);
        $this->appendChild($paramVICMSST, false);
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
     * @param type $value 
     */
    public function addPCredSN($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PCREDSN, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPCredSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
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
     * @param type $value 
     */
    public function addVCredICMSSN($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VCREDICMSSN, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCredICMSSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setVCredICMSSN(\Sped\Schemas\V200\TDec_1302 $paramVCredICMSSN){
        $this->removeElementsByTagName(self::VCREDICMSSN);
        $this->appendChild($paramVCredICMSSN, false);
        return $this;
    }

}