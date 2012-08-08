<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Identificação do emitente
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Emit
 * @package Sped
 */
class Emit extends \Sped\Components\Xml\Element 
{

    const CNPJ = 'CNPJ';

    const CPF = 'CPF';

    const XNOME = 'xNome';

    const XFANT = 'xFant';

    const ENDEREMIT = 'enderEmit';

    const IE = 'IE';

    const IEST = 'IEST';

    const IM = 'IM';

    const CNAE = 'CNAE';

    const CRT = 'CRT';

    /**
     * Retorna Número do CNPJ do emitente
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * Adiciona Número do CNPJ do emitente
     * @param type $value 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número do CNPJ do emitente
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ)
    {
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * Retorna Número do CPF do emitente
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(self::CPF)->item(0);
    }

    /**
     * Adiciona Número do CPF do emitente
     * @param type $value 
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function addCPF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número do CPF do emitente
     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF)
    {
        $this->removeElementsByTagName(self::CPF);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**
     * Retorna Razão Social ou Nome do emitente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome 
     */
    public function getXNome()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome');
        return $this->getElementsByTagName(self::XNOME)->item(0);
    }

    /**
     * Adiciona Razão Social ou Nome do emitente
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome 
     */
    public function addXNome($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome(self::XNOME, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Razão Social ou Nome do emitente
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome $paramXNome 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setXNome(\Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome $paramXNome)
    {
        $this->removeElementsByTagName(self::XNOME);
        $this->appendChild($paramXNome, false);
        return $this;
    }

    /**
     * Retorna Nome fantasia
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant 
     */
    public function getXFant()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant');
        return $this->getElementsByTagName(self::XFANT)->item(0);
    }

    /**
     * Adiciona Nome fantasia
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant 
     */
    public function addXFant($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant(self::XFANT, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Nome fantasia
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant $paramXFant 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setXFant(\Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant $paramXFant)
    {
        $this->removeElementsByTagName(self::XFANT);
        $this->appendChild($paramXFant, false);
        return $this;
    }

    /**
     * Retorna Endereço do emitente
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function getEnderEmit()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi');
        return $this->getElementsByTagName(self::ENDEREMIT)->item(0);
    }

    /**
     * Adiciona Endereço do emitente
     * @param type $value 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function addEnderEmit($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi(self::ENDEREMIT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Endereço do emitente
     * @param \Sped\Schemas\V200\TEnderEmi $paramEnderEmit 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setEnderEmit(\Sped\Schemas\V200\TEnderEmi $paramEnderEmit)
    {
        $this->removeElementsByTagName(self::ENDEREMIT);
        $this->appendChild($paramEnderEmit, false);
        return $this;
    }

    /**
     * Retorna Inscrição Estadual
     * @return \Sped\Schemas\V200\TIe 
     */
    public function getIE()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIe');
        return $this->getElementsByTagName(self::IE)->item(0);
    }

    /**
     * Adiciona Inscrição Estadual
     * @param type $value 
     * @return \Sped\Schemas\V200\TIe 
     */
    public function addIE($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TIe(self::IE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Inscrição Estadual
     * @param \Sped\Schemas\V200\TIe $paramIE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setIE(\Sped\Schemas\V200\TIe $paramIE)
    {
        $this->removeElementsByTagName(self::IE);
        $this->appendChild($paramIE, false);
        return $this;
    }

    /**
     * Retorna Inscricao Estadual do Substituto Tributário
     * @return \Sped\Schemas\V200\TIeST 
     */
    public function getIEST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIeST');
        return $this->getElementsByTagName(self::IEST)->item(0);
    }

    /**
     * Adiciona Inscricao Estadual do Substituto Tributário
     * @param type $value 
     * @return \Sped\Schemas\V200\TIeST 
     */
    public function addIEST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TIeST(self::IEST, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Inscricao Estadual do Substituto Tributário
     * @param \Sped\Schemas\V200\TIeST $paramIEST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setIEST(\Sped\Schemas\V200\TIeST $paramIEST)
    {
        $this->removeElementsByTagName(self::IEST);
        $this->appendChild($paramIEST, false);
        return $this;
    }

    /**
     * Retorna Inscrição Municipal
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\IM 
     */
    public function getIM()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\IM');
        return $this->getElementsByTagName(self::IM)->item(0);
    }

    /**
     * Adiciona Inscrição Municipal
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\IM 
     */
    public function addIM($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\IM(self::IM, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Inscrição Municipal
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\IM $paramIM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setIM(\Sped\Schemas\V200\TNFe\InfNFe\Emit\IM $paramIM)
    {
        $this->removeElementsByTagName(self::IM);
        $this->appendChild($paramIM, false);
        return $this;
    }

    /**
     * Retorna CNAE Fiscal
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE 
     */
    public function getCNAE()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE');
        return $this->getElementsByTagName(self::CNAE)->item(0);
    }

    /**
     * Adiciona CNAE Fiscal
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE 
     */
    public function addCNAE($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE(self::CNAE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CNAE Fiscal
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE $paramCNAE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setCNAE(\Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE $paramCNAE)
    {
        $this->removeElementsByTagName(self::CNAE);
        $this->appendChild($paramCNAE, false);
        return $this;
    }

    /**
     * Retorna Código de Regime Tributário. <br />
     * Este campo será obrigatoriamente preenchido com:<br />
     * 1 – Simples Nacional;<br />
     * 2 – Simples Nacional – excesso de sublimite de receita bruta;<br />
     * 3 – Regime Normal. (v2.0).
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT 
     */
    public function getCRT()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT');
        return $this->getElementsByTagName(self::CRT)->item(0);
    }

    /**
     * Adiciona Código de Regime Tributário. <br />
     * Este campo será obrigatoriamente preenchido com:<br />
     * 1 – Simples Nacional;<br />
     * 2 – Simples Nacional – excesso de sublimite de receita bruta;<br />
     * 3 – Regime Normal. (v2.0).
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT 
     */
    public function addCRT($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT(self::CRT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Regime Tributário. <br />
     * Este campo será obrigatoriamente preenchido com:<br />
     * 1 – Simples Nacional;<br />
     * 2 – Simples Nacional – excesso de sublimite de receita bruta;<br />
     * 3 – Regime Normal. (v2.0).
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT $paramCRT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setCRT(\Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT $paramCRT)
    {
        $this->removeElementsByTagName(self::CRT);
        $this->appendChild($paramCRT, false);
        return $this;
    }

}