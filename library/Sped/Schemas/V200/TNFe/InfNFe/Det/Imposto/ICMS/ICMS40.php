<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação pelo ICMS<br />
 * 40 - Isenta <br />
 * 41 - Não tributada <br />
 * 50 - Suspensão  
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMS40
 * @package Sped
 */
class ICMS40 extends \Sped\Components\Xml\Element 
{

    const ORIG = 'orig';

    const CST = 'CST';

    const VICMS = 'vICMS';

    const MOTDESICMS = 'motDesICMS';

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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig)
    {
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * Retorna Tributação pelo ICMS <br />
     * 40 - Isenta <br />
     * 41 - Não tributada <br />
     * 50 - Suspensão <br />
     * 51 - Diferimento 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * Adiciona Tributação pelo ICMS <br />
     * 40 - Isenta <br />
     * 41 - Não tributada <br />
     * 50 - Suspensão <br />
     * 51 - Diferimento 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação pelo ICMS <br />
     * 40 - Isenta <br />
     * 41 - Não tributada <br />
     * 50 - Suspensão <br />
     * 51 - Diferimento 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * Retorna O valor do ICMS será informado apenas nas operações com veículos beneficiados com a desoneração condicional do ICMS. (v2.0)
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item(0);
    }

    /**
     * Adiciona O valor do ICMS será informado apenas nas operações com veículos beneficiados com a desoneração condicional do ICMS. (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define O valor do ICMS será informado apenas nas operações com veículos beneficiados com a desoneração condicional do ICMS. (v2.0)
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS)
    {
        $this->removeElementsByTagName(self::VICMS);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

    /**
     * Retorna Este campo será preenchido quando o campo anterior estiver preenchido.<br />
     * Informar o motivo da desoneração:<br />
     * 1 – Táxi;<br />
     * 2 – Deficiente Físico;<br />
     * 3 – Produtor Agropecuário;<br />
     * 4 – Frotista/Locadora;<br />
     * 5 – Diplomático/Consular;<br />
     * 6 – Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações);<br />
     * 7 – SUFRAMA;<br />
     * 8 - Venda a órgão Público;<br />
     * 9 – outros. (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS 
     */
    public function getMotDesICMS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS');
        return $this->getElementsByTagName(self::MOTDESICMS)->item(0);
    }

    /**
     * Adiciona Este campo será preenchido quando o campo anterior estiver preenchido.<br />
     * Informar o motivo da desoneração:<br />
     * 1 – Táxi;<br />
     * 2 – Deficiente Físico;<br />
     * 3 – Produtor Agropecuário;<br />
     * 4 – Frotista/Locadora;<br />
     * 5 – Diplomático/Consular;<br />
     * 6 – Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações);<br />
     * 7 – SUFRAMA;<br />
     * 8 - Venda a órgão Público;<br />
     * 9 – outros. (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS 
     */
    public function addMotDesICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS(self::MOTDESICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Este campo será preenchido quando o campo anterior estiver preenchido.<br />
     * Informar o motivo da desoneração:<br />
     * 1 – Táxi;<br />
     * 2 – Deficiente Físico;<br />
     * 3 – Produtor Agropecuário;<br />
     * 4 – Frotista/Locadora;<br />
     * 5 – Diplomático/Consular;<br />
     * 6 – Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações);<br />
     * 7 – SUFRAMA;<br />
     * 8 - Venda a órgão Público;<br />
     * 9 – outros. (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS $paramMotDesICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function setMotDesICMS(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS $paramMotDesICMS)
    {
        $this->removeElementsByTagName(self::MOTDESICMS);
        $this->appendChild($paramMotDesICMS, false);
        return $this;
    }

}