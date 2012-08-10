<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref;

/**
 * Grupo com as informações NF de produtor referenciada (v2.0)
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name RefNFP
 * @package Sped
 */
class RefNFP extends \Sped\Components\Xml\Element 
{

    const CUF = 'cUF';

    const AAMM = 'AAMM';

    const CNPJ = 'CNPJ';

    const CPF = 'CPF';

    const IE = 'IE';

    const MOD = 'mod';

    const SERIE = 'serie';

    const NNF = 'nNF';

    /**
     * Retorna Código da UF do emitente do Documento FiscalUtilizar a Tabela do IBGE (Anexo IV - Tabela de UF, Município e País) (v2.0)
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(self::CUF)->item(0);
    }

    /**
     * Adiciona Código da UF do emitente do Documento FiscalUtilizar a Tabela do IBGE (Anexo IV - Tabela de UF, Município e País) (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function addCUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(self::CUF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código da UF do emitente do Documento FiscalUtilizar a Tabela do IBGE (Anexo IV - Tabela de UF, Município e País) (v2.0)
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF)
    {
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * Retorna AAMM da emissão da NF de produtor (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM 
     */
    public function getAAMM()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM');
        return $this->getElementsByTagName(self::AAMM)->item(0);
    }

    /**
     * Adiciona AAMM da emissão da NF de produtor (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM 
     */
    public function addAAMM($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM(self::AAMM, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define AAMM da emissão da NF de produtor (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM $paramAAMM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setAAMM(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM $paramAAMM)
    {
        $this->removeElementsByTagName(self::AAMM);
        $this->appendChild($paramAAMM, false);
        return $this;
    }

    /**
     * Retorna CNPJ do emitente da NF de produtor (v2.0)
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * Adiciona CNPJ do emitente da NF de produtor (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CNPJ do emitente da NF de produtor (v2.0)
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ)
    {
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * Retorna CPF do emitente da NF de produtor (v2.0)
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(self::CPF)->item(0);
    }

    /**
     * Adiciona CPF do emitente da NF de produtor (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function addCPF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CPF do emitente da NF de produtor (v2.0)
     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF)
    {
        $this->removeElementsByTagName(self::CPF);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**
     * Retorna IE do emitente da NF de Produtor (v2.0))
     * @return \Sped\Schemas\V200\TIeDest 
     */
    public function getIE()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIeDest');
        return $this->getElementsByTagName(self::IE)->item(0);
    }

    /**
     * Adiciona IE do emitente da NF de Produtor (v2.0))
     * @param string $value 
     * @return \Sped\Schemas\V200\TIeDest 
     */
    public function addIE($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TIeDest(self::IE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define IE do emitente da NF de Produtor (v2.0))
     * @param \Sped\Schemas\V200\TIeDest $paramIE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setIE(\Sped\Schemas\V200\TIeDest $paramIE)
    {
        $this->removeElementsByTagName(self::IE);
        $this->appendChild($paramIE, false);
        return $this;
    }

    /**
     * Retorna Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor  ou 01 para NF Avulsa(v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod 
     */
    public function getMod()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod');
        return $this->getElementsByTagName(self::MOD)->item(0);
    }

    /**
     * Adiciona Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor  ou 01 para NF Avulsa(v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod 
     */
    public function addMod($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod(self::MOD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor  ou 01 para NF Avulsa(v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setMod(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod $paramMod)
    {
        $this->removeElementsByTagName(self::MOD);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**
     * Retorna Série do Documento Fiscal, informar zero se inexistentesérie (v2.0).
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function getSerie()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TSerie');
        return $this->getElementsByTagName(self::SERIE)->item(0);
    }

    /**
     * Adiciona Série do Documento Fiscal, informar zero se inexistentesérie (v2.0).
     * @param string $value 
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function addSerie($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TSerie(self::SERIE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Série do Documento Fiscal, informar zero se inexistentesérie (v2.0).
     * @param \Sped\Schemas\V200\TSerie $paramSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setSerie(\Sped\Schemas\V200\TSerie $paramSerie)
    {
        $this->removeElementsByTagName(self::SERIE);
        $this->appendChild($paramSerie, false);
        return $this;
    }

    /**
     * Retorna Número do Documento Fiscal - 1 – 999999999 - (v2.0)
     * @return \Sped\Schemas\V200\TNF 
     */
    public function getNNF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNF');
        return $this->getElementsByTagName(self::NNF)->item(0);
    }

    /**
     * Adiciona Número do Documento Fiscal - 1 – 999999999 - (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNF 
     */
    public function addNNF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNF(self::NNF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número do Documento Fiscal - 1 – 999999999 - (v2.0)
     * @param \Sped\Schemas\V200\TNF $paramNNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setNNF(\Sped\Schemas\V200\TNF $paramNNF)
    {
        $this->removeElementsByTagName(self::NNF);
        $this->appendChild($paramNNF, false);
        return $this;
    }

}