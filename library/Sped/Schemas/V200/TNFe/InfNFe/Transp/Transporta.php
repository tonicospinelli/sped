<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Transp;

/**
 * Dados do transportador
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Transporta
 * @package Sped
 */
class Transporta extends \Sped\Components\Xml\Element 
{

    const CNPJ = 'CNPJ';

    const CPF = 'CPF';

    const XNOME = 'xNome';

    const IE = 'IE';

    const XENDER = 'xEnder';

    const XMUN = 'xMun';

    const UF = 'UF';

    /**
     * Retorna CNPJ do transportador
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * Adiciona CNPJ do transportador
     * @param string $value 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CNPJ do transportador
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ)
    {
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * Retorna CPF do transportador
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(self::CPF)->item(0);
    }

    /**
     * Adiciona CPF do transportador
     * @param string $value 
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function addCPF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CPF do transportador
     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF)
    {
        $this->removeElementsByTagName(self::CPF);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**
     * Retorna Razão Social ou nome
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome 
     */
    public function getXNome()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome');
        return $this->getElementsByTagName(self::XNOME)->item(0);
    }

    /**
     * Adiciona Razão Social ou nome
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome 
     */
    public function addXNome($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome(self::XNOME, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Razão Social ou nome
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome $paramXNome 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setXNome(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome $paramXNome)
    {
        $this->removeElementsByTagName(self::XNOME);
        $this->appendChild($paramXNome, false);
        return $this;
    }

    /**
     * Retorna Inscrição Estadual (v2.0)
     * @return \Sped\Schemas\V200\TIeDest 
     */
    public function getIE()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIeDest');
        return $this->getElementsByTagName(self::IE)->item(0);
    }

    /**
     * Adiciona Inscrição Estadual (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TIeDest 
     */
    public function addIE($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TIeDest(self::IE, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Inscrição Estadual (v2.0)
     * @param \Sped\Schemas\V200\TIeDest $paramIE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setIE(\Sped\Schemas\V200\TIeDest $paramIE)
    {
        $this->removeElementsByTagName(self::IE);
        $this->appendChild($paramIE, false);
        return $this;
    }

    /**
     * Retorna Endereço completo
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder 
     */
    public function getXEnder()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder');
        return $this->getElementsByTagName(self::XENDER)->item(0);
    }

    /**
     * Adiciona Endereço completo
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder 
     */
    public function addXEnder($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder(self::XENDER, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Endereço completo
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder $paramXEnder 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setXEnder(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder $paramXEnder)
    {
        $this->removeElementsByTagName(self::XENDER);
        $this->appendChild($paramXEnder, false);
        return $this;
    }

    /**
     * Retorna Nome do munícipio
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun 
     */
    public function getXMun()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun');
        return $this->getElementsByTagName(self::XMUN)->item(0);
    }

    /**
     * Adiciona Nome do munícipio
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun 
     */
    public function addXMun($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun(self::XMUN, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Nome do munícipio
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setXMun(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun $paramXMun)
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
     * @param string $value 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UF, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Sigla da UF
     * @param \Sped\Schemas\V200\TUf $paramUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF)
    {
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

}