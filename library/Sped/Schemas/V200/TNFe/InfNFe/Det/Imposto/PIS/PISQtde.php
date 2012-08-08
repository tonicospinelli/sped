<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS;

/**
 * Código de Situação Tributária do PIS.<br />
 * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name PISQtde
 * @package Sped
 */
class PISQtde extends \Sped\Components\Xml\Element 
{

    const CST = 'CST';

    const QBCPROD = 'qBCProd';

    const VALIQPROD = 'vAliqProd';

    const VPIS = 'vPIS';

    /**
     * Retorna Código de Situação Tributária do PIS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do PIS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do PIS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * Retorna Quantidade Vendida  (NT2011/004)
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function getQBCProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204');
        return $this->getElementsByTagName(self::QBCPROD)->item(0);
    }

    /**
     * Adiciona Quantidade Vendida  (NT2011/004)
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function addQBCProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204(self::QBCPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Quantidade Vendida  (NT2011/004)
     * @param \Sped\Schemas\V200\TDec_1204 $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204 $paramQBCProd)
    {
        $this->removeElementsByTagName(self::QBCPROD);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**
     * Retorna Alíquota do PIS (em reais) (NT2011/004)
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getVAliqProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(self::VALIQPROD)->item(0);
    }

    /**
     * Adiciona Alíquota do PIS (em reais) (NT2011/004)
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function addVAliqProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(self::VALIQPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do PIS (em reais) (NT2011/004)
     * @param \Sped\Schemas\V200\TDec_1104v $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104v $paramVAliqProd)
    {
        $this->removeElementsByTagName(self::VALIQPROD);
        $this->appendChild($paramVAliqProd, false);
        return $this;
    }

    /**
     * Retorna Valor do PIS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVPIS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPIS)->item(0);
    }

    /**
     * Adiciona Valor do PIS
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVPIS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do PIS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302 $paramVPIS)
    {
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

}