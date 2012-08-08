<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Dados do Endereço  // 24/10/08 - tamanho mínimo
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TEndereco
 * @package Sped
 */
class TEndereco extends \Sped\Components\Xml\Element 
{

    const XLGR = 'xLgr';

    const NRO = 'nro';

    const XCPL = 'xCpl';

    const XBAIRRO = 'xBairro';

    const CMUN = 'cMun';

    const XMUN = 'xMun';

    const UF = 'UF';

    const CEP = 'CEP';

    const CPAIS = 'cPais';

    const XPAIS = 'xPais';

    const FONE = 'fone';

    /**
     * Retorna Logradouro
     * @return \Sped\Schemas\V200\TEndereco\XLgr 
     */
    public function getXLgr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XLgr');
        return $this->getElementsByTagName(self::XLGR)->item(0);
    }

    /**
     * Adiciona Logradouro
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco\XLgr 
     */
    public function addXLgr($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XLgr(self::XLGR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Logradouro
     * @param \Sped\Schemas\V200\TEndereco\XLgr $paramXLgr 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXLgr(\Sped\Schemas\V200\TEndereco\XLgr $paramXLgr)
    {
        $this->removeElementsByTagName(self::XLGR);
        $this->appendChild($paramXLgr, false);
        return $this;
    }

    /**
     * Retorna Número
     * @return \Sped\Schemas\V200\TEndereco\Nro 
     */
    public function getNro()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\Nro');
        return $this->getElementsByTagName(self::NRO)->item(0);
    }

    /**
     * Adiciona Número
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco\Nro 
     */
    public function addNro($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\Nro(self::NRO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número
     * @param \Sped\Schemas\V200\TEndereco\Nro $paramNro 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setNro(\Sped\Schemas\V200\TEndereco\Nro $paramNro)
    {
        $this->removeElementsByTagName(self::NRO);
        $this->appendChild($paramNro, false);
        return $this;
    }

    /**
     * Retorna Complemento
     * @return \Sped\Schemas\V200\TEndereco\XCpl 
     */
    public function getXCpl()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XCpl');
        return $this->getElementsByTagName(self::XCPL)->item(0);
    }

    /**
     * Adiciona Complemento
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco\XCpl 
     */
    public function addXCpl($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XCpl(self::XCPL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Complemento
     * @param \Sped\Schemas\V200\TEndereco\XCpl $paramXCpl 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXCpl(\Sped\Schemas\V200\TEndereco\XCpl $paramXCpl)
    {
        $this->removeElementsByTagName(self::XCPL);
        $this->appendChild($paramXCpl, false);
        return $this;
    }

    /**
     * Retorna Bairro
     * @return \Sped\Schemas\V200\TEndereco\XBairro 
     */
    public function getXBairro()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XBairro');
        return $this->getElementsByTagName(self::XBAIRRO)->item(0);
    }

    /**
     * Adiciona Bairro
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco\XBairro 
     */
    public function addXBairro($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XBairro(self::XBAIRRO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Bairro
     * @param \Sped\Schemas\V200\TEndereco\XBairro $paramXBairro 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXBairro(\Sped\Schemas\V200\TEndereco\XBairro $paramXBairro)
    {
        $this->removeElementsByTagName(self::XBAIRRO);
        $this->appendChild($paramXBairro, false);
        return $this;
    }

    /**
     * Retorna Código do município (utilizar a tabela do IBGE), informar 9999999 para operações com o exterior.
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMun()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(self::CMUN)->item(0);
    }

    /**
     * Adiciona Código do município (utilizar a tabela do IBGE), informar 9999999 para operações com o exterior.
     * @param type $value 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMun($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(self::CMUN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do município (utilizar a tabela do IBGE), informar 9999999 para operações com o exterior.
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMun 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setCMun(\Sped\Schemas\V200\TCodMunIBGE $paramCMun)
    {
        $this->removeElementsByTagName(self::CMUN);
        $this->appendChild($paramCMun, false);
        return $this;
    }

    /**
     * Retorna Nome do município, informar EXTERIOR para operações com o exterior.
     * @return \Sped\Schemas\V200\TEndereco\XMun 
     */
    public function getXMun()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XMun');
        return $this->getElementsByTagName(self::XMUN)->item(0);
    }

    /**
     * Adiciona Nome do município, informar EXTERIOR para operações com o exterior.
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco\XMun 
     */
    public function addXMun($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XMun(self::XMUN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Nome do município, informar EXTERIOR para operações com o exterior.
     * @param \Sped\Schemas\V200\TEndereco\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXMun(\Sped\Schemas\V200\TEndereco\XMun $paramXMun)
    {
        $this->removeElementsByTagName(self::XMUN);
        $this->appendChild($paramXMun, false);
        return $this;
    }

    /**
     * Retorna Sigla da UF, informar EX para operações com o exterior.
     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UF)->item(0);
    }

    /**
     * Adiciona Sigla da UF, informar EX para operações com o exterior.
     * @param type $value 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Sigla da UF, informar EX para operações com o exterior.
     * @param \Sped\Schemas\V200\TUf $paramUF 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF)
    {
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**
     * Retorna CEP
     * @return \Sped\Schemas\V200\TEndereco\CEP 
     */
    public function getCEP()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\CEP');
        return $this->getElementsByTagName(self::CEP)->item(0);
    }

    /**
     * Adiciona CEP
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco\CEP 
     */
    public function addCEP($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\CEP(self::CEP, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define CEP
     * @param \Sped\Schemas\V200\TEndereco\CEP $paramCEP 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setCEP(\Sped\Schemas\V200\TEndereco\CEP $paramCEP)
    {
        $this->removeElementsByTagName(self::CEP);
        $this->appendChild($paramCEP, false);
        return $this;
    }

    /**
     * Retorna Código do país
     * @return \Sped\Schemas\V200\Tpais 
     */
    public function getCPais()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Tpais');
        return $this->getElementsByTagName(self::CPAIS)->item(0);
    }

    /**
     * Adiciona Código do país
     * @param type $value 
     * @return \Sped\Schemas\V200\Tpais 
     */
    public function addCPais($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\Tpais(self::CPAIS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Código do país
     * @param \Sped\Schemas\V200\Tpais $paramCPais 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setCPais(\Sped\Schemas\V200\Tpais $paramCPais)
    {
        $this->removeElementsByTagName(self::CPAIS);
        $this->appendChild($paramCPais, false);
        return $this;
    }

    /**
     * Retorna Nome do país
     * @return \Sped\Schemas\V200\TEndereco\XPais 
     */
    public function getXPais()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\XPais');
        return $this->getElementsByTagName(self::XPAIS)->item(0);
    }

    /**
     * Adiciona Nome do país
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco\XPais 
     */
    public function addXPais($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\XPais(self::XPAIS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Nome do país
     * @param \Sped\Schemas\V200\TEndereco\XPais $paramXPais 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setXPais(\Sped\Schemas\V200\TEndereco\XPais $paramXPais)
    {
        $this->removeElementsByTagName(self::XPAIS);
        $this->appendChild($paramXPais, false);
        return $this;
    }

    /**
     * Retorna Telefone, preencher com Código DDD + número do telefone , nas operações com exterior é permtido informar o código do país + código da localidade + número do telefone
     * @return \Sped\Schemas\V200\TEndereco\Fone 
     */
    public function getFone()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco\Fone');
        return $this->getElementsByTagName(self::FONE)->item(0);
    }

    /**
     * Adiciona Telefone, preencher com Código DDD + número do telefone , nas operações com exterior é permtido informar o código do país + código da localidade + número do telefone
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco\Fone 
     */
    public function addFone($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco\Fone(self::FONE, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Telefone, preencher com Código DDD + número do telefone , nas operações com exterior é permtido informar o código do país + código da localidade + número do telefone
     * @param \Sped\Schemas\V200\TEndereco\Fone $paramFone 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function setFone(\Sped\Schemas\V200\TEndereco\Fone $paramFone)
    {
        $this->removeElementsByTagName(self::FONE);
        $this->appendChild($paramFone, false);
        return $this;
    }

}