<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributção pelo ICMS<br />
 * 51 - Diferimento<br />
 * A exigência do preenchimento das informações do ICMS diferido fica à critério de cada UF.
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMS51
 * @package Sped
 */
class ICMS51 extends \Sped\Components\Xml\Element 
{

    const ORIG = 'orig';

    const CST = 'CST';

    const MODBC = 'modBC';

    const PREDBC = 'pRedBC';

    const VBC = 'vBC';

    const PICMS = 'pICMS';

    const VICMS = 'vICMS';

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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig)
    {
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * Retorna Tributção pelo ICMS<br />
     * 20 - Com redução de base de cálculo
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * Adiciona Tributção pelo ICMS<br />
     * 20 - Com redução de base de cálculo
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributção pelo ICMS<br />
     * 20 - Com redução de base de cálculo
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * Retorna Modalidade de determinação da BC do ICMS:<br />
     * 0 - Margem Valor Agregado (%);<br />
     * 1 - Pauta (valor);<br />
     * 2 - Preço Tabelado Máximo (valor);<br />
     * 3 - Valor da Operação.
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC 
     */
    public function getModBC($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC');
        return $this->getElementsByTagName(self::MODBC)->item($index);
    }

    /**
     * Adiciona Modalidade de determinação da BC do ICMS:<br />
     * 0 - Margem Valor Agregado (%);<br />
     * 1 - Pauta (valor);<br />
     * 2 - Preço Tabelado Máximo (valor);<br />
     * 3 - Valor da Operação.
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC 
     */
    public function addModBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC(self::MODBC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Modalidade de determinação da BC do ICMS:<br />
     * 0 - Margem Valor Agregado (%);<br />
     * 1 - Pauta (valor);<br />
     * 2 - Preço Tabelado Máximo (valor);<br />
     * 3 - Valor da Operação.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC $paramModBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setModBC(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51\ModBC $paramModBC)
    {
        $this->removeElementsByTagName(self::MODBC);
        $this->appendChild($paramModBC, false);
        return $this;
    }

    /**
     * Retorna Percentual de redução da BC
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPRedBC($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PREDBC)->item($index);
    }

    /**
     * Adiciona Percentual de redução da BC
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPRedBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PREDBC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Percentual de redução da BC
     * @param \Sped\Schemas\V200\TDec_0302 $paramPRedBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setPRedBC(\Sped\Schemas\V200\TDec_0302 $paramPRedBC)
    {
        $this->removeElementsByTagName(self::PREDBC);
        $this->appendChild($paramPRedBC, false);
        return $this;
    }

    /**
     * Retorna Valor da BC do ICMS
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item($index);
    }

    /**
     * Adiciona Valor da BC do ICMS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor da BC do ICMS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * Retorna Alíquota do ICMS
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMS($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMS)->item($index);
    }

    /**
     * Adiciona Alíquota do ICMS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Alíquota do ICMS
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setPICMS(\Sped\Schemas\V200\TDec_0302 $paramPICMS)
    {
        $this->removeElementsByTagName(self::PICMS);
        $this->appendChild($paramPICMS, false);
        return $this;
    }

    /**
     * Retorna Valor do ICMS
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item($index);
    }

    /**
     * Adiciona Valor do ICMS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor do ICMS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS)
    {
        $this->removeElementsByTagName(self::VICMS);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

}