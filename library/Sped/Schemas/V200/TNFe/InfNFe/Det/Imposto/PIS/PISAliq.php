<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS;

/**
 * Código de Situação Tributária do PIS.<br />
 * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
 * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name PISAliq
 * @package Sped
 */
class PISAliq extends \Sped\Components\Xml\Element 
{

    const CST = 'CST';

    const VBC = 'vBC';

    const PPIS = 'pPIS';

    const VPIS = 'vPIS';

    /**
     * Retorna Código de Situação Tributária do PIS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do PIS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do PIS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * Retorna Valor da BC do PIS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * Adiciona Valor da BC do PIS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor da BC do PIS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * Retorna Alíquota do PIS (em percentual)
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPPIS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PPIS)->item(0);
    }

    /**
     * Adiciona Alíquota do PIS (em percentual)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPPIS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PPIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do PIS (em percentual)
     * @param \Sped\Schemas\V200\TDec_0302 $paramPPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function setPPIS(\Sped\Schemas\V200\TDec_0302 $paramPPIS)
    {
        $this->removeElementsByTagName(self::PPIS);
        $this->appendChild($paramPPIS, false);
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
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVPIS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do PIS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302 $paramVPIS)
    {
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

}