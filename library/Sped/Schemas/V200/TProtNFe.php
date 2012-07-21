<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Protocolo de status resultado do processamento da NF-e
 * @name TProtNFe
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TProtNFe extends \Sped\Components\Xml\Element  {

    const INFPROT = 'infProt';

    const SIGNATURE = 'Signature';

    /**
     * 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function getInfProt(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProtNFe\InfProt');
        return $this->getElementsByTagName(self::INFPROT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function addInfProt(){
        return $this->appendChild(new \Sped\Schemas\V200\TProtNFe\InfProt(self::INFPROT), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TProtNFe\InfProt $paramInfProt 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function setInfProt(\Sped\Schemas\V200\TProtNFe\InfProt $paramInfProt){
        $this->removeElementsByTagName(self::INFPROT);
        $this->appendChild($paramInfProt, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignatureType 
     * @param type $index 
     */
    public function getSignature($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignatureType');
        return $this->getElementsByTagName(self::SIGNATURE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignatureType 
     * @param type $value 
     */
    public function addSignature($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\SignatureType(self::SIGNATURE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignatureType $paramSignature 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function setSignature(\Sped\Schemas\V200\SignatureType $paramSignature){
        $this->removeElementsByTagName(self::SIGNATURE);
        $this->appendChild($paramSignature, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao(){
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}