<?php

namespace Sped\Schemas\V200;

/**
 * Nota Fiscal Eletrônica
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name DocumentNFe
 */
class DocumentNFe extends \Sped\Components\Xml\Document  {

    const NFE = 'NFe';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function getNFe(){
        $this->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe');
        return $this->getElementsByTagName(self::NFE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe 
     * @param type $value 
     * @param type $namespaceURI 
     */
    public function addNFe($value = NULL, $namespaceURI = 'http://www.portalfiscal.inf.br/nfe'){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe(self::NFE, $value, $namespaceURI), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe $paramNFe 
     * @return \Sped\Schemas\V200\DocumentNFe 
     */
    public function setNFe(\Sped\Schemas\V200\TNFe $paramNFe){
        $this->removeElementsByTagName(self::NFE);
        $this->appendChild($paramNFe, false);
        return $this;
    }

}