<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS;

/**
 * Código de Situação Tributária do PIS.<br />
 * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
 * 06 - Operação Tributável - Alíquota Zero;<br />
 * 07 - Operação Isenta da contribuição;<br />
 * 08 - Operação Sem Incidência da contribuição;<br />
 * 09 - Operação com suspensão da contribuição;
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name PISNT
 * @package Sped
 */
class PISNT extends \Sped\Components\Xml\Element  {

    const CST = 'CST';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT\CST 
     */
    public function addCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT\CST $paramCST){
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

}