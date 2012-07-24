<?php

namespace Sped\Schemas\V200\TRetEnviNFe;

/**
 * Dados do Recibo do Lote
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name InfRec
 * @package Sped
 */
class InfRec extends \Sped\Components\Xml\Element  {

    const NREC = 'nRec';

    const TMED = 'tMed';

    /**
     * 
     * @return \Sped\Schemas\V200\TRec 
     */
    public function getNRec(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRec');
        return $this->getElementsByTagName(self::NREC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TRec 
     */
    public function addNRec($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TRec(self::NREC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TRec $paramNRec 
     * @return \Sped\Schemas\V200\TRetEnviNFe\InfRec 
     */
    public function setNRec(\Sped\Schemas\V200\TRec $paramNRec){
        $this->removeElementsByTagName(self::NREC);
        $this->appendChild($paramNRec, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TMed 
     */
    public function getTMed(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMed');
        return $this->getElementsByTagName(self::TMED)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TMed 
     */
    public function addTMed($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TMed(self::TMED, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TMed $paramTMed 
     * @return \Sped\Schemas\V200\TRetEnviNFe\InfRec 
     */
    public function setTMed(\Sped\Schemas\V200\TMed $paramTMed){
        $this->removeElementsByTagName(self::TMED);
        $this->appendChild($paramTMed, false);
        return $this;
    }

}