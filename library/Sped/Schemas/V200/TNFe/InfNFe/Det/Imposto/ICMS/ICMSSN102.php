<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMSSN102
 * @package Sped
 */
class ICMSSN102 extends \Sped\Components\Xml\Element 
{

    const ORIG = 'orig';

    const CSOSN = 'CSOSN';

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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig)
    {
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * Retorna 102- Tributada pelo Simples Nacional sem permissão de crédito. <br />
     * 103 – Isenção do ICMS  no Simples Nacional para faixa de receita bruta.<br />
     * 300 – Imune.<br />
     * 400 – Não tributda pelo Simples Nacional (v.2.0) (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN 
     */
    public function getCSOSN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN');
        return $this->getElementsByTagName(self::CSOSN)->item(0);
    }

    /**
     * Adiciona 102- Tributada pelo Simples Nacional sem permissão de crédito. <br />
     * 103 – Isenção do ICMS  no Simples Nacional para faixa de receita bruta.<br />
     * 300 – Imune.<br />
     * 400 – Não tributda pelo Simples Nacional (v.2.0) (v.2.0)
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN 
     */
    public function addCSOSN($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN(self::CSOSN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define 102- Tributada pelo Simples Nacional sem permissão de crédito. <br />
     * 103 – Isenção do ICMS  no Simples Nacional para faixa de receita bruta.<br />
     * 300 – Imune.<br />
     * 400 – Não tributda pelo Simples Nacional (v.2.0) (v.2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN $paramCSOSN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 
     */
    public function setCSOSN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102\CSOSN $paramCSOSN)
    {
        $this->removeElementsByTagName(self::CSOSN);
        $this->appendChild($paramCSOSN, false);
        return $this;
    }

}