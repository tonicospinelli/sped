<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Informar apenas para operações<br />
 * com combustíveis líquidos
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Comb
 * @package Sped
 */
class Comb extends \Sped\Components\Xml\Element 
{

    const CPRODANP = 'cProdANP';

    const CODIF = 'CODIF';

    const QTEMP = 'qTemp';

    const UFCONS = 'UFCons';

    const CIDE = 'CIDE';

    /**
     * Retorna Código de produto da ANP. Utilizar a codificação de produtos do Sistema de Informações de Movimentação de produtos - SIMP(http://www.anp.gov.br/simp/index.h<br />
     * tm), somente informar 999999999 quando não se tratar  de produtos não regulados pela ANP -<br />
     * Agência Nacional do Petróleo.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP 
     */
    public function getCProdANP()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP');
        return $this->getElementsByTagName(self::CPRODANP)->item(0);
    }

    /**
     * Adiciona Código de produto da ANP. Utilizar a codificação de produtos do Sistema de Informações de Movimentação de produtos - SIMP(http://www.anp.gov.br/simp/index.h<br />
     * tm), somente informar 999999999 quando não se tratar  de produtos não regulados pela ANP -<br />
     * Agência Nacional do Petróleo.
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP 
     */
    public function addCProdANP($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP(self::CPRODANP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de produto da ANP. Utilizar a codificação de produtos do Sistema de Informações de Movimentação de produtos - SIMP(http://www.anp.gov.br/simp/index.h<br />
     * tm), somente informar 999999999 quando não se tratar  de produtos não regulados pela ANP -<br />
     * Agência Nacional do Petróleo.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP $paramCProdANP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setCProdANP(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP $paramCProdANP)
    {
        $this->removeElementsByTagName(self::CPRODANP);
        $this->appendChild($paramCProdANP, false);
        return $this;
    }

    /**
     * Retorna Código de autorização / registro<br />
     * do CODIF.<br />
     * Informar apenas quando a UF<br />
     * utilizar o CODIF (Sistema de<br />
     * Controle do Diferimento do Imposto<br />
     * nas Operações com AEAC - Álcool<br />
     * Etílico Anidro Combustível).
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF 
     */
    public function getCODIF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF');
        return $this->getElementsByTagName(self::CODIF)->item(0);
    }

    /**
     * Adiciona Código de autorização / registro<br />
     * do CODIF.<br />
     * Informar apenas quando a UF<br />
     * utilizar o CODIF (Sistema de<br />
     * Controle do Diferimento do Imposto<br />
     * nas Operações com AEAC - Álcool<br />
     * Etílico Anidro Combustível).
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF 
     */
    public function addCODIF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF(self::CODIF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de autorização / registro<br />
     * do CODIF.<br />
     * Informar apenas quando a UF<br />
     * utilizar o CODIF (Sistema de<br />
     * Controle do Diferimento do Imposto<br />
     * nas Operações com AEAC - Álcool<br />
     * Etílico Anidro Combustível).
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF $paramCODIF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setCODIF(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF $paramCODIF)
    {
        $this->removeElementsByTagName(self::CODIF);
        $this->appendChild($paramCODIF, false);
        return $this;
    }

    /**
     * Retorna Quantidade de combustível<br />
     * faturada à temperatura ambiente.<br />
     * Informar quando a quantidade<br />
     * faturada informada no campo<br />
     * qCom (I10) tiver sido ajustada para<br />
     * uma temperatura diferente da<br />
     * ambiente.
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function getQTemp()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204Opc');
        return $this->getElementsByTagName(self::QTEMP)->item(0);
    }

    /**
     * Adiciona Quantidade de combustível<br />
     * faturada à temperatura ambiente.<br />
     * Informar quando a quantidade<br />
     * faturada informada no campo<br />
     * qCom (I10) tiver sido ajustada para<br />
     * uma temperatura diferente da<br />
     * ambiente.
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function addQTemp($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204Opc(self::QTEMP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Quantidade de combustível<br />
     * faturada à temperatura ambiente.<br />
     * Informar quando a quantidade<br />
     * faturada informada no campo<br />
     * qCom (I10) tiver sido ajustada para<br />
     * uma temperatura diferente da<br />
     * ambiente.
     * @param \Sped\Schemas\V200\TDec_1204Opc $paramQTemp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setQTemp(\Sped\Schemas\V200\TDec_1204Opc $paramQTemp)
    {
        $this->removeElementsByTagName(self::QTEMP);
        $this->appendChild($paramQTemp, false);
        return $this;
    }

    /**
     * Retorna Sigla da UF de Consumo
     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUFCons()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UFCONS)->item(0);
    }

    /**
     * Adiciona Sigla da UF de Consumo
     * @param string $value 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUFCons($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UFCONS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Sigla da UF de Consumo
     * @param \Sped\Schemas\V200\TUf $paramUFCons 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setUFCons(\Sped\Schemas\V200\TUf $paramUFCons)
    {
        $this->removeElementsByTagName(self::UFCONS);
        $this->appendChild($paramUFCons, false);
        return $this;
    }

    /**
     * Retorna CIDE Combustíveis
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     */
    public function getCIDE()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE');
        return $this->getElementsByTagName(self::CIDE)->item(0);
    }

    /**
     * Adiciona CIDE Combustíveis
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     */
    public function addCIDE()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE(self::CIDE, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CIDE Combustíveis
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE $paramCIDE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setCIDE(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE $paramCIDE)
    {
        $this->removeElementsByTagName(self::CIDE);
        $this->appendChild($paramCIDE, false);
        return $this;
    }

}