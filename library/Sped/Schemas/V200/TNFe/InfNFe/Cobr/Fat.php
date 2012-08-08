<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Cobr;

/**
 * Dados da fatura
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Fat
 * @package Sped
 */
class Fat extends \Sped\Components\Xml\Element 
{

    const NFAT = 'nFat';

    const VORIG = 'vOrig';

    const VDESC = 'vDesc';

    const VLIQ = 'vLiq';

    /**
     * Retorna Número da fatura
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat 
     */
    public function getNFat()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat');
        return $this->getElementsByTagName(self::NFAT)->item(0);
    }

    /**
     * Adiciona Número da fatura
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat 
     */
    public function addNFat($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat(self::NFAT, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Número da fatura
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat $paramNFat 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setNFat(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat $paramNFat)
    {
        $this->removeElementsByTagName(self::NFAT);
        $this->appendChild($paramNFat, false);
        return $this;
    }

    /**
     * Retorna Valor original da fatura
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVOrig()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VORIG)->item(0);
    }

    /**
     * Adiciona Valor original da fatura
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVOrig($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VORIG, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor original da fatura
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVOrig(\Sped\Schemas\V200\TDec_1302Opc $paramVOrig)
    {
        $this->removeElementsByTagName(self::VORIG);
        $this->appendChild($paramVOrig, false);
        return $this;
    }

    /**
     * Retorna Valor do desconto da fatura
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVDesc()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDESC)->item(0);
    }

    /**
     * Adiciona Valor do desconto da fatura
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVDesc($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VDESC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor do desconto da fatura
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDesc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVDesc(\Sped\Schemas\V200\TDec_1302Opc $paramVDesc)
    {
        $this->removeElementsByTagName(self::VDESC);
        $this->appendChild($paramVDesc, false);
        return $this;
    }

    /**
     * Retorna Valor líquido da fatura
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVLiq()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VLIQ)->item(0);
    }

    /**
     * Adiciona Valor líquido da fatura
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVLiq($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VLIQ, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor líquido da fatura
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVLiq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVLiq(\Sped\Schemas\V200\TDec_1302Opc $paramVLiq)
    {
        $this->removeElementsByTagName(self::VLIQ);
        $this->appendChild($paramVLiq, false);
        return $this;
    }

}