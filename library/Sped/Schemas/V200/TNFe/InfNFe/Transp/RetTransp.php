<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Transp;

/**
 * Dados da retenção  ICMS do Transporte
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name RetTransp
 * @package Sped
 */
class RetTransp extends \Sped\Components\Xml\Element 
{

    const VSERV = 'vServ';

    const VBCRET = 'vBCRet';

    const PICMSRET = 'pICMSRet';

    const VICMSRET = 'vICMSRet';

    const CFOP = 'CFOP';

    const CMUNFG = 'cMunFG';

    /**
     * Retorna Valor do Serviço
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVServ()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VSERV)->item(0);
    }

    /**
     * Adiciona Valor do Serviço
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVServ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VSERV, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do Serviço
     * @param \Sped\Schemas\V200\TDec_1302 $paramVServ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setVServ(\Sped\Schemas\V200\TDec_1302 $paramVServ)
    {
        $this->removeElementsByTagName(self::VSERV);
        $this->appendChild($paramVServ, false);
        return $this;
    }

    /**
     * Retorna BC da Retenção do ICMS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCRet()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCRET)->item(0);
    }

    /**
     * Adiciona BC da Retenção do ICMS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCRet($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCRET, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define BC da Retenção do ICMS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCRet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setVBCRet(\Sped\Schemas\V200\TDec_1302 $paramVBCRet)
    {
        $this->removeElementsByTagName(self::VBCRET);
        $this->appendChild($paramVBCRet, false);
        return $this;
    }

    /**
     * Retorna Alíquota da Retenção
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMSRet()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMSRET)->item(0);
    }

    /**
     * Adiciona Alíquota da Retenção
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMSRet($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMSRET, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota da Retenção
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMSRet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setPICMSRet(\Sped\Schemas\V200\TDec_0302 $paramPICMSRet)
    {
        $this->removeElementsByTagName(self::PICMSRET);
        $this->appendChild($paramPICMSRet, false);
        return $this;
    }

    /**
     * Retorna Valor do ICMS Retido
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSRet()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMSRET)->item(0);
    }

    /**
     * Adiciona Valor do ICMS Retido
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSRet($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMSRET, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do ICMS Retido
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSRet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setVICMSRet(\Sped\Schemas\V200\TDec_1302 $paramVICMSRet)
    {
        $this->removeElementsByTagName(self::VICMSRET);
        $this->appendChild($paramVICMSRet, false);
        return $this;
    }

    /**
     * Retorna Código Fiscal de Operações e Prestações // PL_006f - alterado para permitir somente CFOP de transportes 
     * @return \Sped\Schemas\V200\TCfopTransp 
     */
    public function getCFOP()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCfopTransp');
        return $this->getElementsByTagName(self::CFOP)->item(0);
    }

    /**
     * Adiciona Código Fiscal de Operações e Prestações // PL_006f - alterado para permitir somente CFOP de transportes 
     * @param string $value 
     * @return \Sped\Schemas\V200\TCfopTransp 
     */
    public function addCFOP($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCfopTransp(self::CFOP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código Fiscal de Operações e Prestações // PL_006f - alterado para permitir somente CFOP de transportes 
     * @param \Sped\Schemas\V200\TCfopTransp $paramCFOP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setCFOP(\Sped\Schemas\V200\TCfopTransp $paramCFOP)
    {
        $this->removeElementsByTagName(self::CFOP);
        $this->appendChild($paramCFOP, false);
        return $this;
    }

    /**
     * Retorna Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMunFG()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(self::CMUNFG)->item(0);
    }

    /**
     * Adiciona Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     * @param string $value 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMunFG($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(self::CMUNFG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMunFG 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setCMunFG(\Sped\Schemas\V200\TCodMunIBGE $paramCMunFG)
    {
        $this->removeElementsByTagName(self::CMUNFG);
        $this->appendChild($paramCMunFG, false);
        return $this;
    }

}