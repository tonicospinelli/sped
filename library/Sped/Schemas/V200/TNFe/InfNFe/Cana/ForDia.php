<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Cana;

/**
 * Fornecimentos diários // v2.0
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ForDia
 * @package Sped
 */
class ForDia extends \Sped\Components\Xml\Element 
{

    const QTDE = 'qtde';

    /**
     * Retorna Quantidade em quilogramas - peso líquido // v2.0
     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getQtde()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(self::QTDE)->item(0);
    }

    /**
     * Adiciona Quantidade em quilogramas - peso líquido // v2.0
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addQtde($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(self::QTDE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Quantidade em quilogramas - peso líquido // v2.0
     * @param \Sped\Schemas\V200\TDec_1110 $paramQtde 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia 
     */
    public function setQtde(\Sped\Schemas\V200\TDec_1110 $paramQtde)
    {
        $this->removeElementsByTagName(self::QTDE);
        $this->appendChild($paramQtde, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getDia()
    {
        return $this->getAttribute('dia');
    }

    /**
     * 
     * @param type $value 
     */
    public function setDia($value)
    {
        $this->setAttribute('dia', $value);
        return $this;
    }

}