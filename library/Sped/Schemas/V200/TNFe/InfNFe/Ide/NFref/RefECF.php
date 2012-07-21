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
     * @param type $value 
     */
    public function addMod($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod(self::MOD, $value), true);
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
     * @param type $value 
     */
    public function addNECF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF(self::NECF, $value), true);
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
     * @param type $value 
     */
    public function addNCOO($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO(self::NCOO, $value), true);
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