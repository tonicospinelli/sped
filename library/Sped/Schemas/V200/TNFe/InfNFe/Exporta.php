<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Informações de exportação
 * @name Exporta
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Exporta extends \Sped\Components\Xml\Element  {

    const UFEMBARQ = 'UFEmbarq';

    const XLOCEMBARQ = 'xLocEmbarq';

    /**
     * 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUFEmbarq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UFEMBARQ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUf 
     * @param type $value 
     */
    public function addUFEmbarq($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UFEMBARQ, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TUf $paramUFEmbarq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta 
     */
    public function setUFEmbarq(\Sped\Schemas\V200\TUf $paramUFEmbarq){
        $this->removeElementsByTagName(self::UFEMBARQ);
        $this->appendChild($paramUFEmbarq, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq 
     */
    public function getXLocEmbarq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq');
        return $this->getElementsByTagName(self::XLOCEMBARQ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq 
     * @param type $value 
     */
    public function addXLocEmbarq($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq(self::XLOCEMBARQ, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq $paramXLocEmbarq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta 
     */
    public function setXLocEmbarq(\Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq $paramXLocEmbarq){
        $this->removeElementsByTagName(self::XLOCEMBARQ);
        $this->appendChild($paramXLocEmbarq, false);
        return $this;
    }

}