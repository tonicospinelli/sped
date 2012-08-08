<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Cana;

/**
 * Deduções - Taxas e Contribuições // v2.0
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Deduc
 * @package Sped
 */
class Deduc extends \Sped\Components\Xml\Element 
{

    const XDED = 'xDed';

    const VDED = 'vDed';

    /**
     * Retorna Descrição da Dedução // v2.0
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed 
     */
    public function getXDed()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed');
        return $this->getElementsByTagName(self::XDED)->item(0);
    }

    /**
     * Adiciona Descrição da Dedução // v2.0
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed 
     */
    public function addXDed($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed(self::XDED, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Descrição da Dedução // v2.0
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed $paramXDed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc 
     */
    public function setXDed(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed $paramXDed)
    {
        $this->removeElementsByTagName(self::XDED);
        $this->appendChild($paramXDed, false);
        return $this;
    }

    /**
     * Retorna valor da dedução // v2.0
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVDed()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VDED)->item(0);
    }

    /**
     * Adiciona valor da dedução // v2.0
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVDed($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VDED, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define valor da dedução // v2.0
     * @param \Sped\Schemas\V200\TDec_1302 $paramVDed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc 
     */
    public function setVDed(\Sped\Schemas\V200\TDec_1302 $paramVDed)
    {
        $this->removeElementsByTagName(self::VDED);
        $this->appendChild($paramVDed, false);
        return $this;
    }

}