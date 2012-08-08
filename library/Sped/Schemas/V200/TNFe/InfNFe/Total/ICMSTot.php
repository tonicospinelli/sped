<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Total;

/**
 * Totais referentes ao ICMS
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMSTot
 * @package Sped
 */
class ICMSTot extends \Sped\Components\Xml\Element 
{

    const VBC = 'vBC';

    const VICMS = 'vICMS';

    const VBCST = 'vBCST';

    const VST = 'vST';

    const VPROD = 'vProd';

    const VFRETE = 'vFrete';

    const VSEG = 'vSeg';

    const VDESC = 'vDesc';

    const VII = 'vII';

    const VIPI = 'vIPI';

    const VPIS = 'vPIS';

    const VCOFINS = 'vCOFINS';

    const VOUTRO = 'vOutro';

    const VNF = 'vNF';

    /**
     * Retorna BC do ICMS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * Adiciona BC do ICMS
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define BC do ICMS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * Retorna Valor Total do ICMS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item(0);
    }

    /**
     * Adiciona Valor Total do ICMS
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total do ICMS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS)
    {
        $this->removeElementsByTagName(self::VICMS);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

    /**
     * Retorna BC do ICMS ST
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCST)->item(0);
    }

    /**
     * Adiciona BC do ICMS ST
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define BC do ICMS ST
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVBCST(\Sped\Schemas\V200\TDec_1302 $paramVBCST)
    {
        $this->removeElementsByTagName(self::VBCST);
        $this->appendChild($paramVBCST, false);
        return $this;
    }

    /**
     * Retorna Valor Total do ICMS ST
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VST)->item(0);
    }

    /**
     * Adiciona Valor Total do ICMS ST
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total do ICMS ST
     * @param \Sped\Schemas\V200\TDec_1302 $paramVST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVST(\Sped\Schemas\V200\TDec_1302 $paramVST)
    {
        $this->removeElementsByTagName(self::VST);
        $this->appendChild($paramVST, false);
        return $this;
    }

    /**
     * Retorna Valor Total dos produtos e serviços
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPROD)->item(0);
    }

    /**
     * Adiciona Valor Total dos produtos e serviços
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total dos produtos e serviços
     * @param \Sped\Schemas\V200\TDec_1302 $paramVProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVProd(\Sped\Schemas\V200\TDec_1302 $paramVProd)
    {
        $this->removeElementsByTagName(self::VPROD);
        $this->appendChild($paramVProd, false);
        return $this;
    }

    /**
     * Retorna Valor Total do Frete
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVFrete()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VFRETE)->item(0);
    }

    /**
     * Adiciona Valor Total do Frete
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVFrete($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VFRETE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total do Frete
     * @param \Sped\Schemas\V200\TDec_1302 $paramVFrete 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVFrete(\Sped\Schemas\V200\TDec_1302 $paramVFrete)
    {
        $this->removeElementsByTagName(self::VFRETE);
        $this->appendChild($paramVFrete, false);
        return $this;
    }

    /**
     * Retorna Valor Total do Seguro
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVSeg()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VSEG)->item(0);
    }

    /**
     * Adiciona Valor Total do Seguro
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVSeg($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VSEG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total do Seguro
     * @param \Sped\Schemas\V200\TDec_1302 $paramVSeg 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVSeg(\Sped\Schemas\V200\TDec_1302 $paramVSeg)
    {
        $this->removeElementsByTagName(self::VSEG);
        $this->appendChild($paramVSeg, false);
        return $this;
    }

    /**
     * Retorna Valor Total do Desconto
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVDesc()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VDESC)->item(0);
    }

    /**
     * Adiciona Valor Total do Desconto
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVDesc($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VDESC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total do Desconto
     * @param \Sped\Schemas\V200\TDec_1302 $paramVDesc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVDesc(\Sped\Schemas\V200\TDec_1302 $paramVDesc)
    {
        $this->removeElementsByTagName(self::VDESC);
        $this->appendChild($paramVDesc, false);
        return $this;
    }

    /**
     * Retorna Valor Total do II
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVII()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VII)->item(0);
    }

    /**
     * Adiciona Valor Total do II
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVII($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VII, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total do II
     * @param \Sped\Schemas\V200\TDec_1302 $paramVII 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVII(\Sped\Schemas\V200\TDec_1302 $paramVII)
    {
        $this->removeElementsByTagName(self::VII);
        $this->appendChild($paramVII, false);
        return $this;
    }

    /**
     * Retorna Valor Total do IPI
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVIPI()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VIPI)->item(0);
    }

    /**
     * Adiciona Valor Total do IPI
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVIPI($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VIPI, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total do IPI
     * @param \Sped\Schemas\V200\TDec_1302 $paramVIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVIPI(\Sped\Schemas\V200\TDec_1302 $paramVIPI)
    {
        $this->removeElementsByTagName(self::VIPI);
        $this->appendChild($paramVIPI, false);
        return $this;
    }

    /**
     * Retorna Valor do PIS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVPIS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPIS)->item(0);
    }

    /**
     * Adiciona Valor do PIS
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVPIS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do PIS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302 $paramVPIS)
    {
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

    /**
     * Retorna Valor do COFINS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVCOFINS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VCOFINS)->item(0);
    }

    /**
     * Adiciona Valor do COFINS
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVCOFINS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VCOFINS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do COFINS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVCOFINS(\Sped\Schemas\V200\TDec_1302 $paramVCOFINS)
    {
        $this->removeElementsByTagName(self::VCOFINS);
        $this->appendChild($paramVCOFINS, false);
        return $this;
    }

    /**
     * Retorna Outras Despesas acessórias
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVOutro()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VOUTRO)->item(0);
    }

    /**
     * Adiciona Outras Despesas acessórias
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVOutro($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VOUTRO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Outras Despesas acessórias
     * @param \Sped\Schemas\V200\TDec_1302 $paramVOutro 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVOutro(\Sped\Schemas\V200\TDec_1302 $paramVOutro)
    {
        $this->removeElementsByTagName(self::VOUTRO);
        $this->appendChild($paramVOutro, false);
        return $this;
    }

    /**
     * Retorna Valor Total da NF-e
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVNF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VNF)->item(0);
    }

    /**
     * Adiciona Valor Total da NF-e
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVNF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VNF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor Total da NF-e
     * @param \Sped\Schemas\V200\TDec_1302 $paramVNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVNF(\Sped\Schemas\V200\TDec_1302 $paramVNF)
    {
        $this->removeElementsByTagName(self::VNF);
        $this->appendChild($paramVNF, false);
        return $this;
    }

}