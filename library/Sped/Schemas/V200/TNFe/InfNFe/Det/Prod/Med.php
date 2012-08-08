<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Med
 * @package Sped
 */
class Med extends \Sped\Components\Xml\Element 
{

    const NLOTE = 'nLote';

    const QLOTE = 'qLote';

    const DFAB = 'dFab';

    const DVAL = 'dVal';

    const VPMC = 'vPMC';

    /**
     * Retorna Número do lote do medicamento
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote 
     */
    public function getNLote()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote');
        return $this->getElementsByTagName(self::NLOTE)->item(0);
    }

    /**
     * Adiciona Número do lote do medicamento
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote 
     */
    public function addNLote($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote(self::NLOTE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número do lote do medicamento
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote $paramNLote 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setNLote(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote $paramNLote)
    {
        $this->removeElementsByTagName(self::NLOTE);
        $this->appendChild($paramNLote, false);
        return $this;
    }

    /**
     * Retorna Quantidade de produtos no lote
     * @return \Sped\Schemas\V200\TDec_0803 
     */
    public function getQLote()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0803');
        return $this->getElementsByTagName(self::QLOTE)->item(0);
    }

    /**
     * Adiciona Quantidade de produtos no lote
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_0803 
     */
    public function addQLote($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0803(self::QLOTE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Quantidade de produtos no lote
     * @param \Sped\Schemas\V200\TDec_0803 $paramQLote 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setQLote(\Sped\Schemas\V200\TDec_0803 $paramQLote)
    {
        $this->removeElementsByTagName(self::QLOTE);
        $this->appendChild($paramQLote, false);
        return $this;
    }

    /**
     * Retorna Data de Fabricação do medicamento (AAAA-MM-DD)
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDFab()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DFAB)->item(0);
    }

    /**
     * Adiciona Data de Fabricação do medicamento (AAAA-MM-DD)
     * @param type $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDFab($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DFAB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Data de Fabricação do medicamento (AAAA-MM-DD)
     * @param \Sped\Schemas\V200\TData $paramDFab 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setDFab(\Sped\Schemas\V200\TData $paramDFab)
    {
        $this->removeElementsByTagName(self::DFAB);
        $this->appendChild($paramDFab, false);
        return $this;
    }

    /**
     * Retorna Data de validade do medicamento (AAAA-MM-DD)
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDVal()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DVAL)->item(0);
    }

    /**
     * Adiciona Data de validade do medicamento (AAAA-MM-DD)
     * @param type $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDVal($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DVAL, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Data de validade do medicamento (AAAA-MM-DD)
     * @param \Sped\Schemas\V200\TData $paramDVal 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setDVal(\Sped\Schemas\V200\TData $paramDVal)
    {
        $this->removeElementsByTagName(self::DVAL);
        $this->appendChild($paramDVal, false);
        return $this;
    }

    /**
     * Retorna Preço Máximo ao Consumidor
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVPMC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPMC)->item(0);
    }

    /**
     * Adiciona Preço Máximo ao Consumidor
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVPMC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPMC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Preço Máximo ao Consumidor
     * @param \Sped\Schemas\V200\TDec_1302 $paramVPMC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setVPMC(\Sped\Schemas\V200\TDec_1302 $paramVPMC)
    {
        $this->removeElementsByTagName(self::VPMC);
        $this->appendChild($paramVPMC, false);
        return $this;
    }

}