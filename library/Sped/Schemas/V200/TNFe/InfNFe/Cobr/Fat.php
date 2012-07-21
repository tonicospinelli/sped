<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Cobr;

/**
 * Dados da fatura
 * @name Fat
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Fat extends \Sped\Components\Xml\Element  {

    const NFAT = 'nFat';

    const VORIG = 'vOrig';

    const VDESC = 'vDesc';

    const VLIQ = 'vLiq';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat 
     * @param type $index 
     */
    public function getNFat($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat');
        return $this->getElementsByTagName(self::NFAT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat 
     * @param type $value 
     */
    public function addNFat($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat(self::NFAT, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat $paramNFat 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setNFat(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat $paramNFat){
        $this->removeElementsByTagName(self::NFAT);
        $this->appendChild($paramNFat, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVOrig($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VORIG)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVOrig($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VORIG, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVOrig(\Sped\Schemas\V200\TDec_1302Opc $paramVOrig){
        $this->removeElementsByTagName(self::VORIG);
        $this->appendChild($paramVOrig, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVDesc($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDESC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVDesc($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VDESC, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDesc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVDesc(\Sped\Schemas\V200\TDec_1302Opc $paramVDesc){
        $this->removeElementsByTagName(self::VDESC);
        $this->appendChild($paramVDesc, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVLiq($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VLIQ)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVLiq($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VLIQ, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVLiq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVLiq(\Sped\Schemas\V200\TDec_1302Opc $paramVLiq){
        $this->removeElementsByTagName(self::VLIQ);
        $this->appendChild($paramVLiq, false);
        return $this;
    }

}