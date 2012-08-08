<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Dados do Local de Retirada ou Entrega // 24/10/08 - tamanho mínimo // v2.0
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TLocal
 * @package Sped
 */
class TLocal extends \Sped\Components\Xml\Element 
{

    const CNPJ = 'CNPJ';

    const CPF = 'CPF';

    const XLGR = 'xLgr';

    const NRO = 'nro';

    const XCPL = 'xCpl';

    const XBAIRRO = 'xBairro';

    const CMUN = 'cMun';

    const XMUN = 'xMun';

    const UF = 'UF';

    /**
     * Retorna CNPJ
     * @return \Sped\Schemas\V200\TCnpjOpc 
     */
    public function getCNPJ()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpjOpc');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * Adiciona CNPJ
     * @param type $value 
     * @return \Sped\Schemas\V200\TCnpjOpc 
     */
    public function addCNPJ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCnpjOpc(self::CNPJ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CNPJ
     * @param \Sped\Schemas\V200\TCnpjOpc $paramCNPJ 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpjOpc $paramCNPJ)
    {
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * Retorna CPF (v2.0)
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(self::CPF)->item(0);
    }

    /**
     * Adiciona CPF (v2.0)
     * @param type $value 
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function addCPF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CPF (v2.0)
     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF)
    {
        $this->removeElementsByTagName(self::CPF);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**
     * Retorna Logradouro
     * @return \Sped\Schemas\V200\TLocal\XLgr 
     */
    public function getXLgr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XLgr');
        return $this->getElementsByTagName(self::XLGR)->item(0);
    }

    /**
     * Adiciona Logradouro
     * @param type $value 
     * @return \Sped\Schemas\V200\TLocal\XLgr 
     */
    public function addXLgr($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XLgr(self::XLGR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Logradouro
     * @param \Sped\Schemas\V200\TLocal\XLgr $paramXLgr 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXLgr(\Sped\Schemas\V200\TLocal\XLgr $paramXLgr)
    {
        $this->removeElementsByTagName(self::XLGR);
        $this->appendChild($paramXLgr, false);
        return $this;
    }

    /**
     * Retorna Número
     * @return \Sped\Schemas\V200\TLocal\Nro 
     */
    public function getNro()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\Nro');
        return $this->getElementsByTagName(self::NRO)->item(0);
    }

    /**
     * Adiciona Número
     * @param type $value 
     * @return \Sped\Schemas\V200\TLocal\Nro 
     */
    public function addNro($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\Nro(self::NRO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número
     * @param \Sped\Schemas\V200\TLocal\Nro $paramNro 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setNro(\Sped\Schemas\V200\TLocal\Nro $paramNro)
    {
        $this->removeElementsByTagName(self::NRO);
        $this->appendChild($paramNro, false);
        return $this;
    }

    /**
     * Retorna Complemento
     * @return \Sped\Schemas\V200\TLocal\XCpl 
     */
    public function getXCpl()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XCpl');
        return $this->getElementsByTagName(self::XCPL)->item(0);
    }

    /**
     * Adiciona Complemento
     * @param type $value 
     * @return \Sped\Schemas\V200\TLocal\XCpl 
     */
    public function addXCpl($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XCpl(self::XCPL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Complemento
     * @param \Sped\Schemas\V200\TLocal\XCpl $paramXCpl 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXCpl(\Sped\Schemas\V200\TLocal\XCpl $paramXCpl)
    {
        $this->removeElementsByTagName(self::XCPL);
        $this->appendChild($paramXCpl, false);
        return $this;
    }

    /**
     * Retorna Bairro
     * @return \Sped\Schemas\V200\TLocal\XBairro 
     */
    public function getXBairro()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XBairro');
        return $this->getElementsByTagName(self::XBAIRRO)->item(0);
    }

    /**
     * Adiciona Bairro
     * @param type $value 
     * @return \Sped\Schemas\V200\TLocal\XBairro 
     */
    public function addXBairro($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XBairro(self::XBAIRRO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Bairro
     * @param \Sped\Schemas\V200\TLocal\XBairro $paramXBairro 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXBairro(\Sped\Schemas\V200\TLocal\XBairro $paramXBairro)
    {
        $this->removeElementsByTagName(self::XBAIRRO);
        $this->appendChild($paramXBairro, false);
        return $this;
    }

    /**
     * Retorna Código do município (utilizar a tabela do IBGE)
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMun()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(self::CMUN)->item(0);
    }

    /**
     * Adiciona Código do município (utilizar a tabela do IBGE)
     * @param type $value 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMun($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(self::CMUN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do município (utilizar a tabela do IBGE)
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMun 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setCMun(\Sped\Schemas\V200\TCodMunIBGE $paramCMun)
    {
        $this->removeElementsByTagName(self::CMUN);
        $this->appendChild($paramCMun, false);
        return $this;
    }

    /**
     * Retorna Nome do município
     * @return \Sped\Schemas\V200\TLocal\XMun 
     */
    public function getXMun()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal\XMun');
        return $this->getElementsByTagName(self::XMUN)->item(0);
    }

    /**
     * Adiciona Nome do município
     * @param type $value 
     * @return \Sped\Schemas\V200\TLocal\XMun 
     */
    public function addXMun($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TLocal\XMun(self::XMUN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Nome do município
     * @param \Sped\Schemas\V200\TLocal\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setXMun(\Sped\Schemas\V200\TLocal\XMun $paramXMun)
    {
        $this->removeElementsByTagName(self::XMUN);
        $this->appendChild($paramXMun, false);
        return $this;
    }

    /**
     * Retorna Sigla da UF
     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UF)->item(0);
    }

    /**
     * Adiciona Sigla da UF
     * @param type $value 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Sigla da UF
     * @param \Sped\Schemas\V200\TUf $paramUF 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF)
    {
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

}