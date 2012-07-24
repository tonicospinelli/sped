<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol;

/**
 * Número dos Lacres
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Lacres
 * @package Sped
 */
class Lacres extends \Sped\Components\Xml\Element  {

    const NLACRE = 'nLacre';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre 
     */
    public function getNLacre(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre');
        return $this->getElementsByTagName(self::NLACRE)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre 
     */
    public function addNLacre($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre(self::NLACRE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre $paramNLacre 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres 
     */
    public function setNLacre(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre $paramNLacre){
        $this->removeElementsByTagName(self::NLACRE);
        $this->appendChild($paramNLacre, false);
        return $this;
    }

}