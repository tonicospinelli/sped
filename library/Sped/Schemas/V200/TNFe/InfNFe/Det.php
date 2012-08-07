<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Dados dos detalhes da NF-e
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Det
 * @package Sped
 */
class Det extends \Sped\Components\Xml\Element 
{

    const PROD = 'prod';

    const IMPOSTO = 'imposto';

    const INFADPROD = 'infAdProd';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function getProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod');
        return $this->getElementsByTagName(self::PROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function addProd()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod(self::PROD, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod $paramProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function setProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod $paramProd)
    {
        $this->removeElementsByTagName(self::PROD);
        $this->appendChild($paramProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function getImposto()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto');
        return $this->getElementsByTagName(self::IMPOSTO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function addImposto()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto(self::IMPOSTO, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto $paramImposto 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function setImposto(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto $paramImposto)
    {
        $this->removeElementsByTagName(self::IMPOSTO);
        $this->appendChild($paramImposto, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd 
     */
    public function getInfAdProd($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd');
        return $this->getElementsByTagName(self::INFADPROD)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd 
     */
    public function addInfAdProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd(self::INFADPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd $paramInfAdProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function setInfAdProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\InfAdProd $paramInfAdProd)
    {
        $this->removeElementsByTagName(self::INFADPROD);
        $this->appendChild($paramInfAdProd, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getNItem()
    {
        return $this->getAttribute('nItem');
    }

    /**
     * 
     * @param type $value 
     */
    public function setNItem($value)
    {
        $this->setAttribute('nItem', $value);
        return $this;
    }

}