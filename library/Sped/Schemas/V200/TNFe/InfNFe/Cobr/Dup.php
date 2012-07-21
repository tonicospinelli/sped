<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Cobr;

/**
 * Dados das duplicatas NT 2011/004
 * @name Dup
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Dup extends \Sped\Components\Xml\Element  {

    const NDUP = 'nDup';

    const DVENC = 'dVenc';

    const VDUP = 'vDup';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup 
     * @param type $index 
     */
    public function getNDup($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup');
        return $this->getElementsByTagName(self::NDUP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup 
     * @param type $value 
     */
    public function addNDup($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup(self::NDUP, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup $paramNDup 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setNDup(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup $paramNDup){
        $this->removeElementsByTagName(self::NDUP);
        $this->appendChild($paramNDup, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $index 
     */
    public function getDVenc($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DVENC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $value 
     */
    public function addDVenc($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DVENC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDVenc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setDVenc(\Sped\Schemas\V200\TData $paramDVenc){
        $this->removeElementsByTagName(self::DVENC);
        $this->appendChild($paramDVenc, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $index 
     */
    public function getVDup($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDUP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param type $value 
     */
    public function addVDup($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VDUP, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDup 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setVDup(\Sped\Schemas\V200\TDec_1302Opc $paramVDup){
        $this->removeElementsByTagName(self::VDUP);
        $this->appendChild($paramVDup, false);
        return $this;
    }

}