<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do PIS
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name PIS
 * @package Sped
 */
class PIS extends \Sped\Components\Xml\Element 
{

    const PISALIQ = 'PISAliq';

    const PISQTDE = 'PISQtde';

    const PISNT = 'PISNT';

    const PISOUTR = 'PISOutr';

    /**
     * Retorna Código de Situação Tributária do PIS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function getPISAliq()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq');
        return $this->getElementsByTagName(self::PISALIQ)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do PIS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function addPISAliq()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq(self::PISALIQ, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do PIS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq $paramPISAliq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function setPISAliq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq $paramPISAliq)
    {
        $this->removeElementsByTagName(self::PISALIQ);
        $this->appendChild($paramPISAliq, false);
        return $this;
    }

    /**
     * Retorna Código de Situação Tributária do PIS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function getPISQtde()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde');
        return $this->getElementsByTagName(self::PISQTDE)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do PIS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function addPISQtde()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde(self::PISQTDE, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do PIS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde $paramPISQtde 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function setPISQtde(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde $paramPISQtde)
    {
        $this->removeElementsByTagName(self::PISQTDE);
        $this->appendChild($paramPISQtde, false);
        return $this;
    }

    /**
     * Retorna Código de Situação Tributária do PIS.<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT 
     */
    public function getPISNT()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT');
        return $this->getElementsByTagName(self::PISNT)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do PIS.<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT 
     */
    public function addPISNT()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT(self::PISNT, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do PIS.<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT $paramPISNT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function setPISNT(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT $paramPISNT)
    {
        $this->removeElementsByTagName(self::PISNT);
        $this->appendChild($paramPISNT, false);
        return $this;
    }

    /**
     * Retorna Código de Situação Tributária do PIS.<br />
     * 99 - Outras Operações.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr 
     */
    public function getPISOutr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr');
        return $this->getElementsByTagName(self::PISOUTR)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do PIS.<br />
     * 99 - Outras Operações.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr 
     */
    public function addPISOutr()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr(self::PISOUTR, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do PIS.<br />
     * 99 - Outras Operações.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr $paramPISOutr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function setPISOutr(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr $paramPISOutr)
    {
        $this->removeElementsByTagName(self::PISOUTR);
        $this->appendChild($paramPISOutr, false);
        return $this;
    }

}