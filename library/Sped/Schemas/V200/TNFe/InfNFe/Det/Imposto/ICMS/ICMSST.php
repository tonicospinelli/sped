<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Grupo de informação do ICMSST devido para a UF de destino, nas operações interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na UF do remetente. Repasse via Substituto Tributário. (v2.0)
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMSST
 * @package Sped
 */
class ICMSST extends \Sped\Components\Xml\Element 
{

    const ORIG = 'orig';

    const CST = 'CST';

    const VBCSTRET = 'vBCSTRet';

    const VICMSSTRET = 'vICMSSTRet';

    const VBCSTDEST = 'vBCSTDest';

    const VICMSSTDEST = 'vICMSSTDest';

    /**
     * Retorna origem da mercadoria: 0 - Nacional <br />
     * 1 - Estrangeira - Importação direta <br />
     * 2 - Estrangeira - Adquirida no mercado interno <br />
     * (v2.0)
     * @return \Sped\Schemas\V200\Torig 
     */
    public function getOrig()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Torig');
        return $this->getElementsByTagName(self::ORIG)->item(0);
    }

    /**
     * Adiciona origem da mercadoria: 0 - Nacional <br />
     * 1 - Estrangeira - Importação direta <br />
     * 2 - Estrangeira - Adquirida no mercado interno <br />
     * (v2.0)
     * @param type $value 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\Torig(self::ORIG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define origem da mercadoria: 0 - Nacional <br />
     * 1 - Estrangeira - Importação direta <br />
     * 2 - Estrangeira - Adquirida no mercado interno <br />
     * (v2.0)
     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig)
    {
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * Retorna Tributção pelo ICMS<br />
     * 41-Não Tributado (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * Adiciona Tributção pelo ICMS<br />
     * 41-Não Tributado (v2.0)
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributção pelo ICMS<br />
     * 41-Não Tributado (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * Retorna Informar o valor da BC do ICMS ST retido na UF remetente (v2.0)
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCSTRet()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCSTRET)->item(0);
    }

    /**
     * Adiciona Informar o valor da BC do ICMS ST retido na UF remetente (v2.0)
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCSTRet($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCSTRET, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informar o valor da BC do ICMS ST retido na UF remetente (v2.0)
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCSTRet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST 
     */
    public function setVBCSTRet(\Sped\Schemas\V200\TDec_1302 $paramVBCSTRet)
    {
        $this->removeElementsByTagName(self::VBCSTRET);
        $this->appendChild($paramVBCSTRet, false);
        return $this;
    }

    /**
     * Retorna  Informar o valor do ICMS ST retido na UF remetente (iv2.0))
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSSTRet()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMSSTRET)->item(0);
    }

    /**
     * Adiciona  Informar o valor do ICMS ST retido na UF remetente (iv2.0))
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSSTRet($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMSSTRET, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define  Informar o valor do ICMS ST retido na UF remetente (iv2.0))
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSSTRet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST 
     */
    public function setVICMSSTRet(\Sped\Schemas\V200\TDec_1302 $paramVICMSSTRet)
    {
        $this->removeElementsByTagName(self::VICMSSTRET);
        $this->appendChild($paramVICMSSTRet, false);
        return $this;
    }

    /**
     * Retorna  Informar o valor da BC do ICMS ST da UF destino (v2.0)
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCSTDest()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCSTDEST)->item(0);
    }

    /**
     * Adiciona  Informar o valor da BC do ICMS ST da UF destino (v2.0)
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCSTDest($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCSTDEST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define  Informar o valor da BC do ICMS ST da UF destino (v2.0)
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCSTDest 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST 
     */
    public function setVBCSTDest(\Sped\Schemas\V200\TDec_1302 $paramVBCSTDest)
    {
        $this->removeElementsByTagName(self::VBCSTDEST);
        $this->appendChild($paramVBCSTDest, false);
        return $this;
    }

    /**
     * Retorna Informar o valor da BC do ICMS ST da UF destino (v2.0)
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSSTDest()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMSSTDEST)->item(0);
    }

    /**
     * Adiciona Informar o valor da BC do ICMS ST da UF destino (v2.0)
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSSTDest($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMSSTDEST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informar o valor da BC do ICMS ST da UF destino (v2.0)
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSSTDest 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST 
     */
    public function setVICMSSTDest(\Sped\Schemas\V200\TDec_1302 $paramVICMSSTDest)
    {
        $this->removeElementsByTagName(self::VICMSSTDEST);
        $this->appendChild($paramVICMSSTDest, false);
        return $this;
    }

}