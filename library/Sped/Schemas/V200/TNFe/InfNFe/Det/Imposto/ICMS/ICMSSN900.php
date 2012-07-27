<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e CSOSN=900 (v2.0)
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMSSN900
 * @package Sped
 */
class ICMSSN900 extends \Sped\Components\Xml\Element 
{

    const ORIG = 'orig';

    const CSOSN = 'CSOSN';

    const MODBC = 'modBC';

    const VBC = 'vBC';

    const PREDBC = 'pRedBC';

    const PICMS = 'pICMS';

    const VICMS = 'vICMS';

    const MODBCST = 'modBCST';

    const PMVAST = 'pMVAST';

    const PREDBCST = 'pRedBCST';

    const VBCST = 'vBCST';

    const PICMSST = 'pICMSST';

    const VICMSST = 'vICMSST';

    const PCREDSN = 'pCredSN';

    const VCREDICMSSN = 'vCredICMSSN';

    /**
     * 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function getOrig()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Torig');
        return $this->getElementsByTagName(self::ORIG)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\Torig(self::ORIG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig)
    {
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN 
     */
    public function getCSOSN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN');
        return $this->getElementsByTagName(self::CSOSN)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN 
     */
    public function addCSOSN($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN(self::CSOSN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN $paramCSOSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setCSOSN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\CSOSN $paramCSOSN)
    {
        $this->removeElementsByTagName(self::CSOSN);
        $this->appendChild($paramCSOSN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC 
     */
    public function getModBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC');
        return $this->getElementsByTagName(self::MODBC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC 
     */
    public function addModBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC(self::MODBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC $paramModBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setModBC(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBC $paramModBC)
    {
        $this->removeElementsByTagName(self::MODBC);
        $this->appendChild($paramModBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPRedBC($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PREDBC)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPRedBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PREDBC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPRedBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setPRedBC(\Sped\Schemas\V200\TDec_0302Opc $paramPRedBC)
    {
        $this->removeElementsByTagName(self::PREDBC);
        $this->appendChild($paramPRedBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMS)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setPICMS(\Sped\Schemas\V200\TDec_0302 $paramPICMS)
    {
        $this->removeElementsByTagName(self::PICMS);
        $this->appendChild($paramPICMS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS)
    {
        $this->removeElementsByTagName(self::VICMS);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST 
     */
    public function getModBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST');
        return $this->getElementsByTagName(self::MODBCST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST 
     */
    public function addModBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST(self::MODBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST $paramModBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setModBCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900\ModBCST $paramModBCST)
    {
        $this->removeElementsByTagName(self::MODBCST);
        $this->appendChild($paramModBCST, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPMVAST($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PMVAST)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPMVAST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PMVAST, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPMVAST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setPMVAST(\Sped\Schemas\V200\TDec_0302Opc $paramPMVAST)
    {
        $this->removeElementsByTagName(self::PMVAST);
        $this->appendChild($paramPMVAST, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPRedBCST($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PREDBCST)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPRedBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PREDBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setPRedBCST(\Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST)
    {
        $this->removeElementsByTagName(self::PREDBCST);
        $this->appendChild($paramPRedBCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setVBCST(\Sped\Schemas\V200\TDec_1302 $paramVBCST)
    {
        $this->removeElementsByTagName(self::VBCST);
        $this->appendChild($paramVBCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMSST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMSST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMSST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setPICMSST(\Sped\Schemas\V200\TDec_0302 $paramPICMSST)
    {
        $this->removeElementsByTagName(self::PICMSST);
        $this->appendChild($paramPICMSST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMSST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMSST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setVICMSST(\Sped\Schemas\V200\TDec_1302 $paramVICMSST)
    {
        $this->removeElementsByTagName(self::VICMSST);
        $this->appendChild($paramVICMSST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPCredSN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PCREDSN)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPCredSN($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PCREDSN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPCredSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setPCredSN(\Sped\Schemas\V200\TDec_0302 $paramPCredSN)
    {
        $this->removeElementsByTagName(self::PCREDSN);
        $this->appendChild($paramPCredSN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVCredICMSSN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VCREDICMSSN)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVCredICMSSN($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VCREDICMSSN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCredICMSSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function setVCredICMSSN(\Sped\Schemas\V200\TDec_1302 $paramVCredICMSSN)
    {
        $this->removeElementsByTagName(self::VCREDICMSSN);
        $this->appendChild($paramVCredICMSSN, false);
        return $this;
    }

}