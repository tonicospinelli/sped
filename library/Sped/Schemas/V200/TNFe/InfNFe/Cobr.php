<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Dados da cobrança da NF-e
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Cobr
 * @package Sped
 */
class Cobr extends \Sped\Components\Xml\Element 
{

    const FAT = 'fat';

    const DUP = 'dup';

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function getFat($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat');
        return $this->getElementsByTagName(self::FAT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function addFat()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat(self::FAT, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat $paramFat 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function setFat(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat $paramFat)
    {
        $this->removeElementsByTagName(self::FAT);
        $this->appendChild($paramFat, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function getDup($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup');
        return $this->getElementsByTagName(self::DUP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function addDup()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup(self::DUP, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup $paramDup 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function setDup(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup $paramDup)
    {
        $this->removeElementsByTagName(self::DUP);
        $this->appendChild($paramDup, false);
        return $this;
    }

}