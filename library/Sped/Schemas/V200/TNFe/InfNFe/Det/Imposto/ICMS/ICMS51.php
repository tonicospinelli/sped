<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributção pelo ICMS<br />
 * 51 - Diferimento<br />
 * A exigência do preenchimento das informações do ICMS diferido fica à critério de cada UF.
 * @name ICMS51
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ICMS51 extends \Sped\Components\Xml\Element  {

    const ORIG = 'orig';

    const CST = 'CST';

    const MODBC = 'modBC';

    const PREDBC = 'pRedBC';

    const VBC = 'vBC';

    const PICMS = 'pICMS';

    const VICMS = 'vICMS';

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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig){
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST 
     * @param type $value 
     */
    public function addCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST(self::CST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST $paramCST){
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC 
     * @param type $index 
     */
    public function getModBC($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC');
        return $this->getElementsByTagName(self::MODBC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC 
     * @param type $value 
     */
    public function addModBC($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC(self::MODBC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC $paramModBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setModBC(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC $paramModBC){
        $this->removeElementsByTagName(self::MODBC);
        $this->appendChild($paramModBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     * @param type $index 
     */
    public function getPRedBC($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PREDBC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     * @param type $value 
     */
    public function addPRedBC($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PREDBC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPRedBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setPRedBC(\Sped\Schemas\V200\TDec_0302 $paramPRedBC){
        $this->removeElementsByTagName(self::PREDBC);
        $this->appendChild($paramPRedBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $index 
     */
    public function getVBC($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVBC($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC){
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     * @param type $index 
     */
    public function getPICMS($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     * @param type $value 
     */
    public function addPICMS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMS, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setPICMS(\Sped\Schemas\V200\TDec_0302 $paramPICMS){
        $this->removeElementsByTagName(self::PICMS);
        $this->appendChild($paramPICMS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $index 
     */
    public function getVICMS($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVICMS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMS, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS){
        $this->removeElementsByTagName(self::VICMS);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

}