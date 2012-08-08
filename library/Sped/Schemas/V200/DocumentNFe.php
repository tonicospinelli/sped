<?php

namespace Sped\Schemas\V200;

/**
 * Documento Nota Fiscal Eletrônica
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name DocumentNFe
 * @package Sped
 */
class DocumentNFe extends \Sped\Components\Xml\Document 
{

    const NFE = 'NFe';

    /**
     * Retorna Nota Fiscal Eletrônica
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function getNFe()
    {
        $this->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe');
        return $this->getElementsByTagName(self::NFE)->item(0);
    }

    /**
     * Adiciona Nota Fiscal Eletrônica
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function addNFe()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe(self::NFE, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Nota Fiscal Eletrônica
     * @param \Sped\Schemas\V200\TNFe $paramNFe 
     * @return \Sped\Schemas\V200\DocumentNFe 
     */
    public function setNFe(\Sped\Schemas\V200\TNFe $paramNFe)
    {
        $this->removeElementsByTagName(self::NFE);
        $this->appendChild($paramNFe, false);
        return $this;
    }

}