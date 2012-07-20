<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref;

/**
 * Grupo do Cupom Fiscal vinculado à NF-e (v2.0).
 * @name RefECF
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class RefECF extends \Sped\Components\Xml\Element  {

    const MOD = 'mod';

    const NECF = 'nECF';

    const NCOO = 'nCOO';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod 
     */
    public function getMod(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod');
        return $this->getElementsByTagName(self::MOD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod 
     */
    public function addMod(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function setMod(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod $paramMod){
        $this->removeElementsByTagName(self::MOD);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF 
     */
    public function getNECF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF');
        return $this->getElementsByTagName(self::NECF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF 
     */
    public function addNECF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF $paramNECF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function setNECF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF $paramNECF){
        $this->removeElementsByTagName(self::NECF);
        $this->appendChild($paramNECF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO 
     */
    public function getNCOO(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO');
        return $this->getElementsByTagName(self::NCOO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO 
     */
    public function addNCOO(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO $paramNCOO 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function setNCOO(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO $paramNCOO){
        $this->removeElementsByTagName(self::NCOO);
        $this->appendChild($paramNCOO, false);
        return $this;
    }

}