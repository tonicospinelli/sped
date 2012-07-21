<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Informações de compras  (Nota de Empenho, Pedido e Contrato)
 * @name Compra
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Compra extends \Sped\Components\Xml\Element  {

    const XNEMP = 'xNEmp';

    const XPED = 'xPed';

    const XCONT = 'xCont';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp 
     * @param type $index 
     */
    public function getXNEmp($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp');
        return $this->getElementsByTagName(self::XNEMP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp 
     * @param type $value 
     */
    public function addXNEmp($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp(self::XNEMP, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp $paramXNEmp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXNEmp(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XNEmp $paramXNEmp){
        $this->removeElementsByTagName(self::XNEMP);
        $this->appendChild($paramXNEmp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed 
     * @param type $index 
     */
    public function getXPed($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed');
        return $this->getElementsByTagName(self::XPED)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed 
     * @param type $value 
     */
    public function addXPed($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed(self::XPED, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed $paramXPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXPed(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XPed $paramXPed){
        $this->removeElementsByTagName(self::XPED);
        $this->appendChild($paramXPed, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont 
     * @param type $index 
     */
    public function getXCont($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont');
        return $this->getElementsByTagName(self::XCONT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont 
     * @param type $value 
     */
    public function addXCont($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont(self::XCONT, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont $paramXCont 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function setXCont(\Sped\Schemas\V200\TNFe\InfNFe\Compra\XCont $paramXCont){
        $this->removeElementsByTagName(self::XCONT);
        $this->appendChild($paramXCont, false);
        return $this;
    }

}