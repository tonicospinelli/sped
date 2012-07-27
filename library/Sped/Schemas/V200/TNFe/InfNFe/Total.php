<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Dados dos totais da NF-e
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Total
 * @package Sped
 */
class Total extends \Sped\Components\Xml\Element 
{

    const ICMSTOT = 'ICMSTot';

    const ISSQNTOT = 'ISSQNtot';

    const RETTRIB = 'retTrib';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function getICMSTot()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot');
        return $this->getElementsByTagName(self::ICMSTOT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function addICMSTot()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot(self::ICMSTOT, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot $paramICMSTot 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function setICMSTot(\Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot $paramICMSTot)
    {
        $this->removeElementsByTagName(self::ICMSTOT);
        $this->appendChild($paramICMSTot, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function getISSQNtot($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot');
        return $this->getElementsByTagName(self::ISSQNTOT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function addISSQNtot()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot(self::ISSQNTOT, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot $paramISSQNtot 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function setISSQNtot(\Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot $paramISSQNtot)
    {
        $this->removeElementsByTagName(self::ISSQNTOT);
        $this->appendChild($paramISSQNtot, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function getRetTrib($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib');
        return $this->getElementsByTagName(self::RETTRIB)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function addRetTrib()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib(self::RETTRIB, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib $paramRetTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function setRetTrib(\Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib $paramRetTrib)
    {
        $this->removeElementsByTagName(self::RETTRIB);
        $this->appendChild($paramRetTrib, false);
        return $this;
    }

}