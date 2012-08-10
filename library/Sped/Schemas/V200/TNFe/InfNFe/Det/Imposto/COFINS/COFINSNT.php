<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS;

/**
 * Código de Situação Tributária do COFINS:<br />
 * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
 * 06 - Operação Tributável - Alíquota Zero;<br />
 * 07 - Operação Isenta da contribuição;<br />
 * 08 - Operação Sem Incidência da contribuição;<br />
 * 09 - Operação com suspensão da contribuição;
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name COFINSNT
 * @package Sped
 */
class COFINSNT extends \Sped\Components\Xml\Element 
{

    const CST = 'CST';

    /**
     * Retorna Código de Situação Tributária do COFINS:<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * Adiciona Código de Situação Tributária do COFINS:<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Situação Tributária do COFINS:<br />
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
     * 06 - Operação Tributável - Alíquota Zero;<br />
     * 07 - Operação Isenta da contribuição;<br />
     * 08 - Operação Sem Incidência da contribuição;<br />
     * 09 - Operação com suspensão da contribuição;
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

}