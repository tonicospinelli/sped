<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref;

/**
 * Dados da NF modelo 1/1A referenciada
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name RefNF
 * @package Sped
 */
class RefNF extends \Sped\Components\Xml\Element 
{

    const CUF = 'cUF';

    const AAMM = 'AAMM';

    const CNPJ = 'CNPJ';

    const MOD = 'mod';

    const SERIE = 'serie';

    const NNF = 'nNF';

    /**
     * Retorna Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(self::CUF)->item(0);
    }

    /**
     * Adiciona Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     * @param type $value 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function addCUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(self::CUF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF)
    {
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * Retorna AAMM da emissão
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM 
     */
    public function getAAMM()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM');
        return $this->getElementsByTagName(self::AAMM)->item(0);
    }

    /**
     * Adiciona AAMM da emissão
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM 
     */
    public function addAAMM($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM(self::AAMM, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define AAMM da emissão
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM $paramAAMM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setAAMM(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM $paramAAMM)
    {
        $this->removeElementsByTagName(self::AAMM);
        $this->appendChild($paramAAMM, false);
        return $this;
    }

    /**
     * Retorna CNPJ do emitente do documento fiscal referenciado
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * Adiciona CNPJ do emitente do documento fiscal referenciado
     * @param type $value 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CNPJ do emitente do documento fiscal referenciado
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ)
    {
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * Retorna Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod 
     */
    public function getMod()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod');
        return $this->getElementsByTagName(self::MOD)->item(0);
    }

    /**
     * Adiciona Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod 
     */
    public function addMod($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod(self::MOD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setMod(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod $paramMod)
    {
        $this->removeElementsByTagName(self::MOD);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**
     * Retorna Série do Documento Fiscal, informar zero se inexistente
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function getSerie()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TSerie');
        return $this->getElementsByTagName(self::SERIE)->item(0);
    }

    /**
     * Adiciona Série do Documento Fiscal, informar zero se inexistente
     * @param type $value 
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function addSerie($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TSerie(self::SERIE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Série do Documento Fiscal, informar zero se inexistente
     * @param \Sped\Schemas\V200\TSerie $paramSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setSerie(\Sped\Schemas\V200\TSerie $paramSerie)
    {
        $this->removeElementsByTagName(self::SERIE);
        $this->appendChild($paramSerie, false);
        return $this;
    }

    /**
     * Retorna Número do Documento Fiscal
     * @return \Sped\Schemas\V200\TNF 
     */
    public function getNNF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNF');
        return $this->getElementsByTagName(self::NNF)->item(0);
    }

    /**
     * Adiciona Número do Documento Fiscal
     * @param type $value 
     * @return \Sped\Schemas\V200\TNF 
     */
    public function addNNF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNF(self::NNF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número do Documento Fiscal
     * @param \Sped\Schemas\V200\TNF $paramNNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setNNF(\Sped\Schemas\V200\TNF $paramNNF)
    {
        $this->removeElementsByTagName(self::NNF);
        $this->appendChild($paramNNF, false);
        return $this;
    }

}