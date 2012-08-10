<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb;

/**
 * CIDE Combustíveis
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name CIDE
 * @package Sped
 */
class CIDE extends \Sped\Components\Xml\Element 
{

    const QBCPROD = 'qBCProd';

    const VALIQPROD = 'vAliqProd';

    const VCIDE = 'vCIDE';

    /**
     * Retorna BC do CIDE ( Quantidade comercializada) 
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function getQBCProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204');
        return $this->getElementsByTagName(self::QBCPROD)->item(0);
    }

    /**
     * Adiciona BC do CIDE ( Quantidade comercializada) 
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function addQBCProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204(self::QBCPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define BC do CIDE ( Quantidade comercializada) 
     * @param \Sped\Schemas\V200\TDec_1204 $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204 $paramQBCProd)
    {
        $this->removeElementsByTagName(self::QBCPROD);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**
     * Retorna Alíquota do CIDE  (em reais)
     * @return \Sped\Schemas\V200\TDec_1104 
     */
    public function getVAliqProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104');
        return $this->getElementsByTagName(self::VALIQPROD)->item(0);
    }

    /**
     * Adiciona Alíquota do CIDE  (em reais)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1104 
     */
    public function addVAliqProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104(self::VALIQPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do CIDE  (em reais)
     * @param \Sped\Schemas\V200\TDec_1104 $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104 $paramVAliqProd)
    {
        $this->removeElementsByTagName(self::VALIQPROD);
        $this->appendChild($paramVAliqProd, false);
        return $this;
    }

    /**
     * Retorna Valor do CIDE
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVCIDE()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VCIDE)->item(0);
    }

    /**
     * Adiciona Valor do CIDE
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVCIDE($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VCIDE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do CIDE
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCIDE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     */
    public function setVCIDE(\Sped\Schemas\V200\TDec_1302 $paramVCIDE)
    {
        $this->removeElementsByTagName(self::VCIDE);
        $this->appendChild($paramVCIDE, false);
        return $this;
    }

}