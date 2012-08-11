<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Dados do Endereço do Emitente  // 24/10/08 - desmembrado / tamanho mínimo
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TEnderEmi
 * @package Sped
 */
class TEnderEmi extends \Sped\Components\Xml\Element 
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
     * @return \Sped\Schemas\V200\TEnderEmi\XLgr 
     */
    public function getXLgr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XLgr');
        return $this->getElementsByTagName(self::XLGR)->item(0);
    }

    /**
     * Adiciona Logradouro
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\XLgr 
     */
    public function addXLgr($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XLgr(self::XLGR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Logradouro
     * @param \Sped\Schemas\V200\TEnderEmi\XLgr $paramXLgr 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXLgr(\Sped\Schemas\V200\TEnderEmi\XLgr $paramXLgr)
    {
        $this->removeElementsByTagName(self::XLGR);
        $this->appendChild($paramXLgr, false);
        return $this;
    }

    /**
     * Retorna Número
     * @return \Sped\Schemas\V200\TEnderEmi\Nro 
     */
    public function getNro()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\Nro');
        return $this->getElementsByTagName(self::NRO)->item(0);
    }

    /**
     * Adiciona Número
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\Nro 
     */
    public function addNro($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\Nro(self::NRO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número
     * @param \Sped\Schemas\V200\TEnderEmi\Nro $paramNro 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setNro(\Sped\Schemas\V200\TEnderEmi\Nro $paramNro)
    {
        $this->removeElementsByTagName(self::NRO);
        $this->appendChild($paramNro, false);
        return $this;
    }

    /**
     * Retorna Complemento
     * @return \Sped\Schemas\V200\TEnderEmi\XCpl 
     */
    public function getXCpl()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XCpl');
        return $this->getElementsByTagName(self::XCPL)->item(0);
    }

    /**
     * Adiciona Complemento
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\XCpl 
     */
    public function addXCpl($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XCpl(self::XCPL, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Complemento
     * @param \Sped\Schemas\V200\TEnderEmi\XCpl $paramXCpl 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXCpl(\Sped\Schemas\V200\TEnderEmi\XCpl $paramXCpl)
    {
        $this->removeElementsByTagName(self::XCPL);
        $this->appendChild($paramXCpl, false);
        return $this;
    }

    /**
     * Retorna Bairro
     * @return \Sped\Schemas\V200\TEnderEmi\XBairro 
     */
    public function getXBairro()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XBairro');
        return $this->getElementsByTagName(self::XBAIRRO)->item(0);
    }

    /**
     * Adiciona Bairro
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\XBairro 
     */
    public function addXBairro($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XBairro(self::XBAIRRO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Bairro
     * @param \Sped\Schemas\V200\TEnderEmi\XBairro $paramXBairro 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXBairro(\Sped\Schemas\V200\TEnderEmi\XBairro $paramXBairro)
    {
        $this->removeElementsByTagName(self::XBAIRRO);
        $this->appendChild($paramXBairro, false);
        return $this;
    }

    /**
     * Retorna Código do município
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMun()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(self::CMUN)->item(0);
    }

    /**
     * Adiciona Código do município
     * @param string $value 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMun($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(self::CMUN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do município
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMun 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCMun(\Sped\Schemas\V200\TCodMunIBGE $paramCMun)
    {
        $this->removeElementsByTagName(self::CMUN);
        $this->appendChild($paramCMun, false);
        return $this;
    }

    /**
     * Retorna Nome do município
     * @return \Sped\Schemas\V200\TEnderEmi\XMun 
     */
    public function getXMun()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XMun');
        return $this->getElementsByTagName(self::XMUN)->item(0);
    }

    /**
     * Adiciona Nome do município
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\XMun 
     */
    public function addXMun($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XMun(self::XMUN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Nome do município
     * @param \Sped\Schemas\V200\TEnderEmi\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXMun(\Sped\Schemas\V200\TEnderEmi\XMun $paramXMun)
    {
        $this->removeElementsByTagName(self::XMUN);
        $this->appendChild($paramXMun, false);
        return $this;
    }

    /**
     * Retorna Sigla da UF
     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function getUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUfEmi');
        return $this->getElementsByTagName(self::UF)->item(0);
    }

    /**
     * Adiciona Sigla da UF
     * @param string $value 
     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function addUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(self::UF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Sigla da UF
     * @param \Sped\Schemas\V200\TUfEmi $paramUF 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setUF(\Sped\Schemas\V200\TUfEmi $paramUF)
    {
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**
     * Retorna CEP - NT 2011/004
     * @return \Sped\Schemas\V200\TEnderEmi\CEP 
     */
    public function getCEP()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\CEP');
        return $this->getElementsByTagName(self::CEP)->item(0);
    }

    /**
     * Adiciona CEP - NT 2011/004
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\CEP 
     */
    public function addCEP($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\CEP(self::CEP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CEP - NT 2011/004
     * @param \Sped\Schemas\V200\TEnderEmi\CEP $paramCEP 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCEP(\Sped\Schemas\V200\TEnderEmi\CEP $paramCEP)
    {
        $this->removeElementsByTagName(self::CEP);
        $this->appendChild($paramCEP, false);
        return $this;
    }

    /**
     * Retorna Código do país
     * @return \Sped\Schemas\V200\TEnderEmi\CPais 
     */
    public function getCPais()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\CPais');
        return $this->getElementsByTagName(self::CPAIS)->item(0);
    }

    /**
     * Adiciona Código do país
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\CPais 
     */
    public function addCPais($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\CPais(self::CPAIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do país
     * @param \Sped\Schemas\V200\TEnderEmi\CPais $paramCPais 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setCPais(\Sped\Schemas\V200\TEnderEmi\CPais $paramCPais)
    {
        $this->removeElementsByTagName(self::CPAIS);
        $this->appendChild($paramCPais, false);
        return $this;
    }

    /**
     * Retorna Nome do país
     * @return \Sped\Schemas\V200\TEnderEmi\XPais 
     */
    public function getXPais()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\XPais');
        return $this->getElementsByTagName(self::XPAIS)->item(0);
    }

    /**
     * Adiciona Nome do país
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\XPais 
     */
    public function addXPais($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\XPais(self::XPAIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Nome do país
     * @param \Sped\Schemas\V200\TEnderEmi\XPais $paramXPais 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setXPais(\Sped\Schemas\V200\TEnderEmi\XPais $paramXPais)
    {
        $this->removeElementsByTagName(self::XPAIS);
        $this->appendChild($paramXPais, false);
        return $this;
    }

    /**
     * Retorna Preencher com Código DDD + número do telefone (v.2.0)
     * @return \Sped\Schemas\V200\TEnderEmi\Fone 
     */
    public function getFone()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi\Fone');
        return $this->getElementsByTagName(self::FONE)->item(0);
    }

    /**
     * Adiciona Preencher com Código DDD + número do telefone (v.2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnderEmi\Fone 
     */
    public function addFone($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi\Fone(self::FONE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Preencher com Código DDD + número do telefone (v.2.0)
     * @param \Sped\Schemas\V200\TEnderEmi\Fone $paramFone 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function setFone(\Sped\Schemas\V200\TEnderEmi\Fone $paramFone)
    {
        $this->removeElementsByTagName(self::FONE);
        $this->appendChild($paramFone, false);
        return $this;
    }

}