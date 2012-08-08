<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Emissão de avulsa, informar os dados do Fisco emitente
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Avulsa
 * @package Sped
 */
class Avulsa extends \Sped\Components\Xml\Element 
{

    const CNPJ = 'CNPJ';

    const XORGAO = 'xOrgao';

    const MATR = 'matr';

    const XAGENTE = 'xAgente';

    const FONE = 'fone';

    const UF = 'UF';

    const NDAR = 'nDAR';

    const DEMI = 'dEmi';

    const VDAR = 'vDAR';

    const REPEMI = 'repEmi';

    const DPAG = 'dPag';

    /**
     * Retorna CNPJ do Órgão emissor
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * Adiciona CNPJ do Órgão emissor
     * @param type $value 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define CNPJ do Órgão emissor
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ)
    {
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * Retorna Órgão emitente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao 
     */
    public function getXOrgao()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao');
        return $this->getElementsByTagName(self::XORGAO)->item(0);
    }

    /**
     * Adiciona Órgão emitente
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao 
     */
    public function addXOrgao($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao(self::XORGAO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Órgão emitente
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao $paramXOrgao 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setXOrgao(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao $paramXOrgao)
    {
        $this->removeElementsByTagName(self::XORGAO);
        $this->appendChild($paramXOrgao, false);
        return $this;
    }

    /**
     * Retorna Matrícula do agente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr 
     */
    public function getMatr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr');
        return $this->getElementsByTagName(self::MATR)->item(0);
    }

    /**
     * Adiciona Matrícula do agente
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr 
     */
    public function addMatr($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr(self::MATR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Matrícula do agente
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr $paramMatr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setMatr(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr $paramMatr)
    {
        $this->removeElementsByTagName(self::MATR);
        $this->appendChild($paramMatr, false);
        return $this;
    }

    /**
     * Retorna Nome do agente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente 
     */
    public function getXAgente()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente');
        return $this->getElementsByTagName(self::XAGENTE)->item(0);
    }

    /**
     * Adiciona Nome do agente
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente 
     */
    public function addXAgente($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente(self::XAGENTE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Nome do agente
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente $paramXAgente 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setXAgente(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente $paramXAgente)
    {
        $this->removeElementsByTagName(self::XAGENTE);
        $this->appendChild($paramXAgente, false);
        return $this;
    }

    /**
     * Retorna Telefone
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone 
     */
    public function getFone()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone');
        return $this->getElementsByTagName(self::FONE)->item(0);
    }

    /**
     * Adiciona Telefone
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone 
     */
    public function addFone($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone(self::FONE, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Telefone
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone $paramFone 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setFone(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone $paramFone)
    {
        $this->removeElementsByTagName(self::FONE);
        $this->appendChild($paramFone, false);
        return $this;
    }

    /**
     * Retorna Sigla da Unidade da Federação
     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function getUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUfEmi');
        return $this->getElementsByTagName(self::UF)->item(0);
    }

    /**
     * Adiciona Sigla da Unidade da Federação
     * @param type $value 
     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function addUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(self::UF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Sigla da Unidade da Federação
     * @param \Sped\Schemas\V200\TUfEmi $paramUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setUF(\Sped\Schemas\V200\TUfEmi $paramUF)
    {
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**
     * Retorna Número do Documento de Arrecadação de Receita
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR 
     */
    public function getNDAR()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR');
        return $this->getElementsByTagName(self::NDAR)->item(0);
    }

    /**
     * Adiciona Número do Documento de Arrecadação de Receita
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR 
     */
    public function addNDAR($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR(self::NDAR, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Número do Documento de Arrecadação de Receita
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR $paramNDAR 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setNDAR(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR $paramNDAR)
    {
        $this->removeElementsByTagName(self::NDAR);
        $this->appendChild($paramNDAR, false);
        return $this;
    }

    /**
     * Retorna Data de emissão do DAR (AAAA-MM-DD)
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDEmi()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DEMI)->item(0);
    }

    /**
     * Adiciona Data de emissão do DAR (AAAA-MM-DD)
     * @param type $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDEmi($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DEMI, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Data de emissão do DAR (AAAA-MM-DD)
     * @param \Sped\Schemas\V200\TData $paramDEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setDEmi(\Sped\Schemas\V200\TData $paramDEmi)
    {
        $this->removeElementsByTagName(self::DEMI);
        $this->appendChild($paramDEmi, false);
        return $this;
    }

    /**
     * Retorna Valor Total constante no DAR
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVDAR()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VDAR)->item(0);
    }

    /**
     * Adiciona Valor Total constante no DAR
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVDAR($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VDAR, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor Total constante no DAR
     * @param \Sped\Schemas\V200\TDec_1302 $paramVDAR 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setVDAR(\Sped\Schemas\V200\TDec_1302 $paramVDAR)
    {
        $this->removeElementsByTagName(self::VDAR);
        $this->appendChild($paramVDAR, false);
        return $this;
    }

    /**
     * Retorna Repartição Fiscal emitente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi 
     */
    public function getRepEmi()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi');
        return $this->getElementsByTagName(self::REPEMI)->item(0);
    }

    /**
     * Adiciona Repartição Fiscal emitente
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi 
     */
    public function addRepEmi($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi(self::REPEMI, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Repartição Fiscal emitente
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi $paramRepEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setRepEmi(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi $paramRepEmi)
    {
        $this->removeElementsByTagName(self::REPEMI);
        $this->appendChild($paramRepEmi, false);
        return $this;
    }

    /**
     * Retorna Data de pagamento do DAR (AAAA-MM-DD)
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDPag()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DPAG)->item(0);
    }

    /**
     * Adiciona Data de pagamento do DAR (AAAA-MM-DD)
     * @param type $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDPag($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DPAG, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Data de pagamento do DAR (AAAA-MM-DD)
     * @param \Sped\Schemas\V200\TData $paramDPag 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setDPag(\Sped\Schemas\V200\TData $paramDPag)
    {
        $this->removeElementsByTagName(self::DPAG);
        $this->appendChild($paramDPag, false);
        return $this;
    }

}