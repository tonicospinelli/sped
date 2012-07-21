<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Dados dos detalhes da NF-e
 * @name Det
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Det extends \Sped\Components\Xml\Element  {

    const PROD = 'prod';

    const IMPOSTO = 'imposto';

    const INFADPROD = 'infAdProd';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function getProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod');
        return $this->getElementsByTagName(self::PROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function addProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod(self::PROD), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod $paramProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function setProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod $paramProd){
        $this->removeElementsByTagName(self::PROD);
        $this->appendChild($paramProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function getImposto(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto');
        return $this->getElementsByTagName(self::IMPOSTO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function addImposto(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto(self::IMPOSTO), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto $paramImposto 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function setImposto(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto $paramImposto){
        $this->removeElementsByTagName(self::IMPOSTO);
        $this->appendChild($paramImposto, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd 
     * @param type $index 
     */
    public function getInfAdProd($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd');
        return $this->getElementsByTagName(self::INFADPROD)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd 
     * @param type $value 
     */
    public function addInfAdProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd(self::INFADPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd $paramInfAdProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function setInfAdProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd $paramInfAdProd){
        $this->removeElementsByTagName(self::INFADPROD);
        $this->appendChild($paramInfAdProd, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getNItem(){
        return $this->getAttribute('nItem');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function setNItem(string $value){
        $this->setAttribute('nItem', $value);
        return $this;
    }

}