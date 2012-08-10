<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do PIS Substituição Tributária
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name PISST
 * @package Sped
 */
class PISST extends \Sped\Components\Xml\Element 
{

    const VBC = 'vBC';

    const PPIS = 'pPIS';

    const QBCPROD = 'qBCProd';

    const VALIQPROD = 'vAliqProd';

    const VPIS = 'vPIS';

    /**
     * Retorna Valor da BC do PIS ST
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * Adiciona Valor da BC do PIS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor da BC do PIS ST
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302Opc $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * Retorna Alíquota do PIS ST (em percentual)
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPPIS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PPIS)->item(0);
    }

    /**
     * Adiciona Alíquota do PIS ST (em percentual)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPPIS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PPIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do PIS ST (em percentual)
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setPPIS(\Sped\Schemas\V200\TDec_0302Opc $paramPPIS)
    {
        $this->removeElementsByTagName(self::PPIS);
        $this->appendChild($paramPPIS, false);
        return $this;
    }

    /**
     * Retorna Quantidade Vendida 
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function getQBCProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204Opc');
        return $this->getElementsByTagName(self::QBCPROD)->item(0);
    }

    /**
     * Adiciona Quantidade Vendida 
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function addQBCProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204Opc(self::QBCPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Quantidade Vendida 
     * @param \Sped\Schemas\V200\TDec_1204Opc $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204Opc $paramQBCProd)
    {
        $this->removeElementsByTagName(self::QBCPROD);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**
     * Retorna Alíquota do PIS ST (em reais)
     * @return \Sped\Schemas\V200\TDec_1104Opc 
     */
    public function getVAliqProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104Opc');
        return $this->getElementsByTagName(self::VALIQPROD)->item(0);
    }

    /**
     * Adiciona Alíquota do PIS ST (em reais)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1104Opc 
     */
    public function addVAliqProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104Opc(self::VALIQPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do PIS ST (em reais)
     * @param \Sped\Schemas\V200\TDec_1104Opc $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104Opc $paramVAliqProd)
    {
        $this->removeElementsByTagName(self::VALIQPROD);
        $this->appendChild($paramVAliqProd, false);
        return $this;
    }

    /**
     * Retorna Valor do PIS ST
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVPIS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VPIS)->item(0);
    }

    /**
     * Adiciona Valor do PIS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVPIS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VPIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do PIS ST
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302Opc $paramVPIS)
    {
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

}