<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMSSN201
 * @package Sped
 */
class ICMSSN201 extends \Sped\Components\Xml\Element 
{

    const ORIG = 'orig';

    const CSOSN = 'CSOSN';

    const MODBCST = 'modBCST';

    const PMVAST = 'pMVAST';

    const PREDBCST = 'pRedBCST';

    const VBCST = 'vBCST';

    const PICMSST = 'pICMSST';

    const VICMSST = 'vICMSST';

    const PCREDSN = 'pCredSN';

    const VCREDICMSSN = 'vCredICMSSN';

    /**
     * Retorna Origem da mercadoria:<br />
     * 0 – Nacional;<br />
     * 1 – Estrangeira – Importação direta;<br />
     * 2 – Estrangeira – Adquirida no mercado interno. (v2.0)
     * @return \Sped\Schemas\V200\Torig 
     */
    public function getOrig()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Torig');
        return $this->getElementsByTagName(self::ORIG)->item(0);
    }

    /**
     * Adiciona Origem da mercadoria:<br />
     * 0 – Nacional;<br />
     * 1 – Estrangeira – Importação direta;<br />
     * 2 – Estrangeira – Adquirida no mercado interno. (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\Torig(self::ORIG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Origem da mercadoria:<br />
     * 0 – Nacional;<br />
     * 1 – Estrangeira – Importação direta;<br />
     * 2 – Estrangeira – Adquirida no mercado interno. (v2.0)
     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig)
    {
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * Retorna 201- Tributada pelo Simples Nacional com permissão de crédito e com cobrança do ICMS por Substituição Tributária (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN 
     */
    public function getCSOSN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN');
        return $this->getElementsByTagName(self::CSOSN)->item(0);
    }

    /**
     * Adiciona 201- Tributada pelo Simples Nacional com permissão de crédito e com cobrança do ICMS por Substituição Tributária (v.2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN 
     */
    public function addCSOSN($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN(self::CSOSN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define 201- Tributada pelo Simples Nacional com permissão de crédito e com cobrança do ICMS por Substituição Tributária (v.2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN $paramCSOSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setCSOSN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\CSOSN $paramCSOSN)
    {
        $this->removeElementsByTagName(self::CSOSN);
        $this->appendChild($paramCSOSN, false);
        return $this;
    }

    /**
     * Retorna Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor). (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST 
     */
    public function getModBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST');
        return $this->getElementsByTagName(self::MODBCST)->item(0);
    }

    /**
     * Adiciona Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor). (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST 
     */
    public function addModBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST(self::MODBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor). (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST $paramModBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setModBCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201\ModBCST $paramModBCST)
    {
        $this->removeElementsByTagName(self::MODBCST);
        $this->appendChild($paramModBCST, false);
        return $this;
    }

    /**
     * Retorna Percentual da Margem de Valor Adicionado ICMS ST (v2.0)
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPMVAST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PMVAST)->item(0);
    }

    /**
     * Adiciona Percentual da Margem de Valor Adicionado ICMS ST (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPMVAST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PMVAST, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Percentual da Margem de Valor Adicionado ICMS ST (v2.0)
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPMVAST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setPMVAST(\Sped\Schemas\V200\TDec_0302Opc $paramPMVAST)
    {
        $this->removeElementsByTagName(self::PMVAST);
        $this->appendChild($paramPMVAST, false);
        return $this;
    }

    /**
     * Retorna Percentual de redução da BC ICMS ST  (v2.0)
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPRedBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PREDBCST)->item(0);
    }

    /**
     * Adiciona Percentual de redução da BC ICMS ST  (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPRedBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PREDBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Percentual de redução da BC ICMS ST  (v2.0)
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setPRedBCST(\Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST)
    {
        $this->removeElementsByTagName(self::PREDBCST);
        $this->appendChild($paramPRedBCST, false);
        return $this;
    }

    /**
     * Retorna Valor da BC do ICMS ST (v2.0)
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCST)->item(0);
    }

    /**
     * Adiciona Valor da BC do ICMS ST (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor da BC do ICMS ST (v2.0)
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setVBCST(\Sped\Schemas\V200\TDec_1302 $paramVBCST)
    {
        $this->removeElementsByTagName(self::VBCST);
        $this->appendChild($paramVBCST, false);
        return $this;
    }

    /**
     * Retorna Alíquota do ICMS ST (v2.0)
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMSST)->item(0);
    }

    /**
     * Adiciona Alíquota do ICMS ST (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMSST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMSST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do ICMS ST (v2.0)
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setPICMSST(\Sped\Schemas\V200\TDec_0302 $paramPICMSST)
    {
        $this->removeElementsByTagName(self::PICMSST);
        $this->appendChild($paramPICMSST, false);
        return $this;
    }

    /**
     * Retorna Valor do ICMS ST (v2.0)
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMSST)->item(0);
    }

    /**
     * Adiciona Valor do ICMS ST (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMSST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do ICMS ST (v2.0)
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setVICMSST(\Sped\Schemas\V200\TDec_1302 $paramVICMSST)
    {
        $this->removeElementsByTagName(self::VICMSST);
        $this->appendChild($paramVICMSST, false);
        return $this;
    }

    /**
     * Retorna Alíquota aplicável de cálculo do crédito (Simples Nacional). (v2.0)
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPCredSN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PCREDSN)->item(0);
    }

    /**
     * Adiciona Alíquota aplicável de cálculo do crédito (Simples Nacional). (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPCredSN($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PCREDSN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota aplicável de cálculo do crédito (Simples Nacional). (v2.0)
     * @param \Sped\Schemas\V200\TDec_0302 $paramPCredSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setPCredSN(\Sped\Schemas\V200\TDec_0302 $paramPCredSN)
    {
        $this->removeElementsByTagName(self::PCREDSN);
        $this->appendChild($paramPCredSN, false);
        return $this;
    }

    /**
     * Retorna Valor crédito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123 (Simples Nacional) (v2.0)
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVCredICMSSN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VCREDICMSSN)->item(0);
    }

    /**
     * Adiciona Valor crédito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123 (Simples Nacional) (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVCredICMSSN($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VCREDICMSSN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor crédito do ICMS que pode ser aproveitado nos termos do art. 23 da LC 123 (Simples Nacional) (v2.0)
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCredICMSSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function setVCredICMSSN(\Sped\Schemas\V200\TDec_1302 $paramVCredICMSSN)
    {
        $this->removeElementsByTagName(self::VCREDICMSSN);
        $this->appendChild($paramVCredICMSSN, false);
        return $this;
    }

}