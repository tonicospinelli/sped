<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Nota Fiscal Eletrônica // v2.0
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TNFe
 * @package Sped
 */
class TNFe extends \Sped\Components\Xml\Element 
{

    const INFNFE = 'infNFe';

    const SIGNATURE = 'Signature';

    /**
     * Retorna Informações da Nota Fiscal eletrônica
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function getInfNFe()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe');
        return $this->getElementsByTagName(self::INFNFE)->item(0);
    }

    /**
     * Adiciona Informações da Nota Fiscal eletrônica
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function addInfNFe()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe(self::INFNFE, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informações da Nota Fiscal eletrônica
     * @param \Sped\Schemas\V200\TNFe\InfNFe $paramInfNFe 
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function setInfNFe(\Sped\Schemas\V200\TNFe\InfNFe $paramInfNFe)
    {
        $this->removeElementsByTagName(self::INFNFE);
        $this->appendChild($paramInfNFe, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function getSignature()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignatureType');
        return $this->getElementsByTagName(self::SIGNATURE)->item(0);
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function addSignature($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\SignatureType(self::SIGNATURE, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignatureType $paramSignature 
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function setSignature(\Sped\Schemas\V200\SignatureType $paramSignature)
    {
        $this->removeElementsByTagName(self::SIGNATURE);
        $this->appendChild($paramSignature, false);
        return $this;
    }

}