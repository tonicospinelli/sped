<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do COFINS
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name COFINS
 * @package Sped
 */
class COFINS extends \Sped\Components\Xml\Element 
{

    const COFINSALIQ = 'COFINSAliq';

    const COFINSQTDE = 'COFINSQtde';

    const COFINSNT = 'COFINSNT';

    const COFINSOUTR = 'COFINSOutr';

    /**
     * Retorna Código de Situação Tributária do COFINS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq 
     */
    public function getCOFINSAliq()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq');
        return $this->getElementsByTagName(self::COFINSALIQ)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do COFINS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq 
     */
    public function addCOFINSAliq()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq(self::COFINSALIQ, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do COFINS.<br />
     * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq $paramCOFINSAliq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function setCOFINSAliq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq $paramCOFINSAliq)
    {
        $this->removeElementsByTagName(self::COFINSALIQ);
        $this->appendChild($paramCOFINSAliq, false);
        return $this;
    }

    /**
     * Retorna Código de Situação Tributária do COFINS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde 
     */
    public function getCOFINSQtde()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde');
        return $this->getElementsByTagName(self::COFINSQTDE)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do COFINS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde 
     */
    public function addCOFINSQtde()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde(self::COFINSQTDE, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do COFINS.<br />
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde $paramCOFINSQtde 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function setCOFINSQtde(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde $paramCOFINSQtde)
    {
        $this->removeElementsByTagName(self::COFINSQTDE);
        $this->appendChild($paramCOFINSQtde, false);
        return $this;
    }

    /**
     * Retorna Código de Situação Tributária do COFINS:<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT 
     */
    public function getCOFINSNT()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT');
        return $this->getElementsByTagName(self::COFINSNT)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do COFINS:<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT 
     */
    public function addCOFINSNT()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT(self::COFINSNT, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do COFINS:<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT $paramCOFINSNT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function setCOFINSNT(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT $paramCOFINSNT)
    {
        $this->removeElementsByTagName(self::COFINSNT);
        $this->appendChild($paramCOFINSNT, false);
        return $this;
    }

    /**
     * Retorna Código de Situação Tributária do COFINS:<br />
     * 49 - Outras Operações de Saída<br />
     * 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
     * 51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno<br />
     * 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação<br />
     * 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
     * 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
     * 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
     * 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
     * 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
     * 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno<br />
     * 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação<br />
     * 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
     * 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
     * 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
     * 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
     * 67 - Crédito Presumido - Outras Operações<br />
     * 70 - Operação de Aquisição sem Direito a Crédito<br />
     * 71 - Operação de Aquisição com Isenção<br />
     * 72 - Operação de Aquisição com Suspensão<br />
     * 73 - Operação de Aquisição a Alíquota Zero<br />
     * 74 - Operação de Aquisição sem Incidência da Contribuição<br />
     * 75 - Operação de Aquisição por Substituição Tributária<br />
     * 98 - Outras Operações de Entrada<br />
     * 99 - Outras Operações.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function getCOFINSOutr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr');
        return $this->getElementsByTagName(self::COFINSOUTR)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do COFINS:<br />
     * 49 - Outras Operações de Saída<br />
     * 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
     * 51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno<br />
     * 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação<br />
     * 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
     * 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
     * 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
     * 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
     * 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
     * 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno<br />
     * 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação<br />
     * 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
     * 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
     * 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
     * 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
     * 67 - Crédito Presumido - Outras Operações<br />
     * 70 - Operação de Aquisição sem Direito a Crédito<br />
     * 71 - Operação de Aquisição com Isenção<br />
     * 72 - Operação de Aquisição com Suspensão<br />
     * 73 - Operação de Aquisição a Alíquota Zero<br />
     * 74 - Operação de Aquisição sem Incidência da Contribuição<br />
     * 75 - Operação de Aquisição por Substituição Tributária<br />
     * 98 - Outras Operações de Entrada<br />
     * 99 - Outras Operações.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function addCOFINSOutr()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr(self::COFINSOUTR, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do COFINS:<br />
     * 49 - Outras Operações de Saída<br />
     * 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
     * 51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno<br />
     * 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação<br />
     * 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
     * 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
     * 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
     * 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
     * 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
     * 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno<br />
     * 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação<br />
     * 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
     * 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
     * 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
     * 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
     * 67 - Crédito Presumido - Outras Operações<br />
     * 70 - Operação de Aquisição sem Direito a Crédito<br />
     * 71 - Operação de Aquisição com Isenção<br />
     * 72 - Operação de Aquisição com Suspensão<br />
     * 73 - Operação de Aquisição a Alíquota Zero<br />
     * 74 - Operação de Aquisição sem Incidência da Contribuição<br />
     * 75 - Operação de Aquisição por Substituição Tributária<br />
     * 98 - Outras Operações de Entrada<br />
     * 99 - Outras Operações.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr $paramCOFINSOutr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function setCOFINSOutr(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr $paramCOFINSOutr)
    {
        $this->removeElementsByTagName(self::COFINSOUTR);
        $this->appendChild($paramCOFINSOutr, false);
        return $this;
    }

}