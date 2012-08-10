<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det;

/**
 * Tributos incidentes nos produtos ou serviços da NF-e
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Imposto
 * @package Sped
 */
class Imposto extends \Sped\Components\Xml\Element 
{

    const ICMS = 'ICMS';

    const IPI = 'IPI';

    const II = 'II';

    const ISSQN = 'ISSQN';

    const PIS = 'PIS';

    const PISST = 'PISST';

    const COFINS = 'COFINS';

    const COFINSST = 'COFINSST';

    /**
     * Retorna Dados do ICMS Normal e ST
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function getICMS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS');
        return $this->getElementsByTagName(self::ICMS)->item(0);
    }

    /**
     * Adiciona Dados do ICMS Normal e ST
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function addICMS()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS(self::ICMS, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Dados do ICMS Normal e ST
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS $paramICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setICMS(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS $paramICMS)
    {
        $this->removeElementsByTagName(self::ICMS);
        $this->appendChild($paramICMS, false);
        return $this;
    }

    /**
     * Retorna Dados do IPI
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function getIPI($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI');
        return $this->getElementsByTagName(self::IPI)->item($index);
    }

    /**
     * Adiciona Dados do IPI
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function addIPI()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI(self::IPI, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Dados do IPI
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI $paramIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setIPI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI $paramIPI)
    {
        $this->removeElementsByTagName(self::IPI);
        $this->appendChild($paramIPI, false);
        return $this;
    }

    /**
     * Retorna Dados do Imposto de Importação
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II 
     */
    public function getII($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II');
        return $this->getElementsByTagName(self::II)->item($index);
    }

    /**
     * Adiciona Dados do Imposto de Importação
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II 
     */
    public function addII()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II(self::II, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Dados do Imposto de Importação
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II $paramII 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setII(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II $paramII)
    {
        $this->removeElementsByTagName(self::II);
        $this->appendChild($paramII, false);
        return $this;
    }

    /**
     * Retorna ISSQN
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function getISSQN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN');
        return $this->getElementsByTagName(self::ISSQN)->item(0);
    }

    /**
     * Adiciona ISSQN
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function addISSQN()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN(self::ISSQN, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define ISSQN
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN $paramISSQN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setISSQN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN $paramISSQN)
    {
        $this->removeElementsByTagName(self::ISSQN);
        $this->appendChild($paramISSQN, false);
        return $this;
    }

    /**
     * Retorna Dados do PIS
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function getPIS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS');
        return $this->getElementsByTagName(self::PIS)->item(0);
    }

    /**
     * Adiciona Dados do PIS
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function addPIS()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS(self::PIS, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Dados do PIS
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS $paramPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setPIS(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS $paramPIS)
    {
        $this->removeElementsByTagName(self::PIS);
        $this->appendChild($paramPIS, false);
        return $this;
    }

    /**
     * Retorna Dados do PIS Substituição Tributária
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function getPISST($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST');
        return $this->getElementsByTagName(self::PISST)->item($index);
    }

    /**
     * Adiciona Dados do PIS Substituição Tributária
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function addPISST()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST(self::PISST, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Dados do PIS Substituição Tributária
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST $paramPISST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setPISST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST $paramPISST)
    {
        $this->removeElementsByTagName(self::PISST);
        $this->appendChild($paramPISST, false);
        return $this;
    }

    /**
     * Retorna Dados do COFINS
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function getCOFINS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS');
        return $this->getElementsByTagName(self::COFINS)->item(0);
    }

    /**
     * Adiciona Dados do COFINS
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function addCOFINS()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS(self::COFINS, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Dados do COFINS
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS $paramCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setCOFINS(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS $paramCOFINS)
    {
        $this->removeElementsByTagName(self::COFINS);
        $this->appendChild($paramCOFINS, false);
        return $this;
    }

    /**
     * Retorna Dados do COFINS da<br />
     * Substituição Tributaria;
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function getCOFINSST($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST');
        return $this->getElementsByTagName(self::COFINSST)->item($index);
    }

    /**
     * Adiciona Dados do COFINS da<br />
     * Substituição Tributaria;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function addCOFINSST()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST(self::COFINSST, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Dados do COFINS da<br />
     * Substituição Tributaria;
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST $paramCOFINSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setCOFINSST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST $paramCOFINSST)
    {
        $this->removeElementsByTagName(self::COFINSST);
        $this->appendChild($paramCOFINSST, false);
        return $this;
    }

}