<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Protocolo de status resultado do processamento da NF-e
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TProtNFe
 * @package Sped
 */
class TProtNFe extends \Sped\Components\Xml\Element 
{

    const INFPROT = 'infProt';

    const SIGNATURE = 'Signature';

    /**
     * Retorna Dados do protocolo de status
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function getInfProt()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProtNFe\InfProt');
        return $this->getElementsByTagName(self::INFPROT)->item(0);
    }

    /**
     * Adiciona Dados do protocolo de status
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function addInfProt()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TProtNFe\InfProt(self::INFPROT, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Dados do protocolo de status
     * @param \Sped\Schemas\V200\TProtNFe\InfProt $paramInfProt 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function setInfProt(\Sped\Schemas\V200\TProtNFe\InfProt $paramInfProt)
    {
        $this->removeElementsByTagName(self::INFPROT);
        $this->appendChild($paramInfProt, false);
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
     * @param type $value 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function addSignature($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\SignatureType(self::SIGNATURE, $value, 'http://www.w3.org/2000/09/xmldsig#'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignatureType $paramSignature 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function setSignature(\Sped\Schemas\V200\SignatureType $paramSignature)
    {
        $this->removeElementsByTagName(self::SIGNATURE);
        $this->appendChild($paramSignature, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao()
    {
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param type $value 
     */
    public function setVersao($value)
    {
        $this->setAttribute('versao', $value);
        return $this;
    }

}