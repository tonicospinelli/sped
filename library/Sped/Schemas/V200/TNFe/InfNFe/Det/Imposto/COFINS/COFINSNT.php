<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS;

/**
 * Código de Situação Tributária do COFINS:<br />
 * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
 * 06 - Operação Tributável - Alíquota Zero;<br />
 * 07 - Operação Isenta da contribuição;<br />
 * 08 - Operação Sem Incidência da contribuição;<br />
 * 09 - Operação com suspensão da contribuição;
 * @name COFINSNT
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class COFINSNT extends \Sped\Components\Xml\Element  {

    const CST = 'CST';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST 
     */
    public function addCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT\CST $paramCST){
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

}