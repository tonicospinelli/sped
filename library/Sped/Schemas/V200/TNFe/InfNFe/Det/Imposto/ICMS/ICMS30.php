<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação pelo ICMS<br />
 * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMS30
 * @package Sped
 */
class ICMS30 extends \Sped\Components\Xml\Element 
{

    const ORIG = 'orig';

    const CST = 'CST';

    const MODBCST = 'modBCST';

    const PMVAST = 'pMVAST';

    const PREDBCST = 'pRedBCST';

    const VBCST = 'vBCST';

    const PICMSST = 'pICMSST';

    const VICMSST = 'vICMSST';

    /**
     * Retorna origem da mercadoria: 0 - Nacional <br />
     * 1 - Estrangeira - Importação direta <br />
     * 2 - Estrangeira - Adquirida no mercado interno 
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
     * 2 - Estrangeira - Adquirida no mercado interno 
     * @param string $value 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\Torig(self::ORIG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define origem da mercadoria: 0 - Nacional <br />
     * 1 - Estrangeira - Importação direta <br />
     * 2 - Estrangeira - Adquirida no mercado interno 
     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig)
    {
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * Retorna Tributção pelo ICMS<br />
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * Adiciona Tributção pelo ICMS<br />
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributção pelo ICMS<br />
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * Retorna Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor).
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\ModBCST 
     */
    public function getModBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\ModBCST');
        return $this->getElementsByTagName(self::MODBCST)->item(0);
    }

    /**
     * Adiciona Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor).
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\ModBCST 
     */
    public function addModBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\ModBCST(self::MODBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor).
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\ModBCST $paramModBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function setModBCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30\ModBCST $paramModBCST)
    {
        $this->removeElementsByTagName(self::MODBCST);
        $this->appendChild($paramModBCST, false);
        return $this;
    }

    /**
     * Retorna Percentual da Margem de Valor Adicionado ICMS ST
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPMVAST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PMVAST)->item(0);
    }

    /**
     * Adiciona Percentual da Margem de Valor Adicionado ICMS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPMVAST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PMVAST, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Percentual da Margem de Valor Adicionado ICMS ST
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPMVAST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function setPMVAST(\Sped\Schemas\V200\TDec_0302Opc $paramPMVAST)
    {
        $this->removeElementsByTagName(self::PMVAST);
        $this->appendChild($paramPMVAST, false);
        return $this;
    }

    /**
     * Retorna Percentual de redução da BC ICMS ST 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPRedBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PREDBCST)->item(0);
    }

    /**
     * Adiciona Percentual de redução da BC ICMS ST 
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPRedBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PREDBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Percentual de redução da BC ICMS ST 
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function setPRedBCST(\Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST)
    {
        $this->removeElementsByTagName(self::PREDBCST);
        $this->appendChild($paramPRedBCST, false);
        return $this;
    }

    /**
     * Retorna Valor da BC do ICMS ST
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCST)->item(0);
    }

    /**
     * Adiciona Valor da BC do ICMS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor da BC do ICMS ST
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function setVBCST(\Sped\Schemas\V200\TDec_1302 $paramVBCST)
    {
        $this->removeElementsByTagName(self::VBCST);
        $this->appendChild($paramVBCST, false);
        return $this;
    }

    /**
     * Retorna Alíquota do ICMS ST
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMSST)->item(0);
    }

    /**
     * Adiciona Alíquota do ICMS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMSST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMSST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do ICMS ST
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function setPICMSST(\Sped\Schemas\V200\TDec_0302 $paramPICMSST)
    {
        $this->removeElementsByTagName(self::PICMSST);
        $this->appendChild($paramPICMSST, false);
        return $this;
    }

    /**
     * Retorna Valor do ICMS ST
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMSST)->item(0);
    }

    /**
     * Adiciona Valor do ICMS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMSST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do ICMS ST
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function setVICMSST(\Sped\Schemas\V200\TDec_1302 $paramVICMSST)
    {
        $this->removeElementsByTagName(self::VICMSST);
        $this->appendChild($paramVICMSST, false);
        return $this;
    }

}