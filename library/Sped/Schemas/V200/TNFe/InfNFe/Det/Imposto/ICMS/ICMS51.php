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
     */
    public function addCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST(), true);
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
     * @param int $index 
     */
    public function getModBC(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC');
        return $this->getElementsByTagName(self::MODBC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC 
     */
    public function addModBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC(), true);
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
     * @param int $index 
     */
    public function getPRedBC(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PREDBC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPRedBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
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
     * @param int $index 
     */
    public function getVBC(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
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
     * @param int $index 
     */
    public function getPICMS(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
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
     * @param int $index 
     */
    public function getVICMS(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
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