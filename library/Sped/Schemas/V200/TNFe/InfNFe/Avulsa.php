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
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
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
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao 
     */
    public function getXOrgao()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao');
        return $this->getElementsByTagName(self::XORGAO)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao 
     */
    public function addXOrgao($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao(self::XORGAO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
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
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr 
     */
    public function getMatr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr');
        return $this->getElementsByTagName(self::MATR)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr 
     */
    public function addMatr($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr(self::MATR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
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
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente 
     */
    public function getXAgente()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente');
        return $this->getElementsByTagName(self::XAGENTE)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente 
     */
    public function addXAgente($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente(self::XAGENTE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
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
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone 
     */
    public function getFone($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone');
        return $this->getElementsByTagName(self::FONE)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone 
     */
    public function addFone($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone(self::FONE, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
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
     * 
     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function getUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUfEmi');
        return $this->getElementsByTagName(self::UF)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function addUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(self::UF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
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
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR 
     */
    public function getNDAR($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR');
        return $this->getElementsByTagName(self::NDAR)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR 
     */
    public function addNDAR($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR(self::NDAR, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
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
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDEmi($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DEMI)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDEmi($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DEMI, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
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
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVDAR($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VDAR)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVDAR($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VDAR, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
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
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi 
     */
    public function getRepEmi()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi');
        return $this->getElementsByTagName(self::REPEMI)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi 
     */
    public function addRepEmi($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi(self::REPEMI, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
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
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDPag($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DPAG)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDPag($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DPAG, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
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