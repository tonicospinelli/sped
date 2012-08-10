<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Total;

/**
 * Totais referentes ao ISSQN
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ISSQNtot
 * @package Sped
 */
class ISSQNtot extends \Sped\Components\Xml\Element 
{

    const VSERV = 'vServ';

    const VBC = 'vBC';

    const VISS = 'vISS';

    const VPIS = 'vPIS';

    const VCOFINS = 'vCOFINS';

    /**
     * Retorna Valor Total dos Serviços sob não-incidência ou não tributados pelo ICMS 
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVServ($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VSERV)->item($index);
    }

    /**
     * Adiciona Valor Total dos Serviços sob não-incidência ou não tributados pelo ICMS 
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVServ($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VSERV, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor Total dos Serviços sob não-incidência ou não tributados pelo ICMS 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVServ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVServ(\Sped\Schemas\V200\TDec_1302Opc $paramVServ)
    {
        $this->removeElementsByTagName(self::VSERV);
        $this->appendChild($paramVServ, false);
        return $this;
    }

    /**
     * Retorna Base de Cálculo do ISS
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVBC($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBC)->item($index);
    }

    /**
     * Adiciona Base de Cálculo do ISS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Base de Cálculo do ISS
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302Opc $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * Retorna Valor Total do ISS
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVISS($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VISS)->item($index);
    }

    /**
     * Adiciona Valor Total do ISS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVISS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VISS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor Total do ISS
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVISS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVISS(\Sped\Schemas\V200\TDec_1302Opc $paramVISS)
    {
        $this->removeElementsByTagName(self::VISS);
        $this->appendChild($paramVISS, false);
        return $this;
    }

    /**
     * Retorna Valor do PIS sobre serviços
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVPIS($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VPIS)->item($index);
    }

    /**
     * Adiciona Valor do PIS sobre serviços
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVPIS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VPIS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor do PIS sobre serviços
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302Opc $paramVPIS)
    {
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

    /**
     * Retorna Valor do COFINS sobre serviços
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVCOFINS($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VCOFINS)->item($index);
    }

    /**
     * Adiciona Valor do COFINS sobre serviços
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVCOFINS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VCOFINS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor do COFINS sobre serviços
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVCOFINS(\Sped\Schemas\V200\TDec_1302Opc $paramVCOFINS)
    {
        $this->removeElementsByTagName(self::VCOFINS);
        $this->appendChild($paramVCOFINS, false);
        return $this;
    }

}