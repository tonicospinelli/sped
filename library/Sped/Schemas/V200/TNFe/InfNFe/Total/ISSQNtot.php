<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Total;

/**
 * Totais referentes ao ISSQN
 * @name ISSQNtot
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ISSQNtot extends \Sped\Components\Xml\Element  {

    const VSERV = 'vServ';

    const VBC = 'vBC';

    const VISS = 'vISS';

    const VPIS = 'vPIS';

    const VCOFINS = 'vCOFINS';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVServ(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VSERV)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVServ(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVServ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVServ(\Sped\Schemas\V200\TDec_1302Opc $paramVServ){
        $this->removeElementsByTagName(self::VSERV);
        $this->appendChild($paramVServ, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVBC(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302Opc $paramVBC){
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVISS(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VISS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVISS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVISS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVISS(\Sped\Schemas\V200\TDec_1302Opc $paramVISS){
        $this->removeElementsByTagName(self::VISS);
        $this->appendChild($paramVISS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVPIS(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VPIS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVPIS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302Opc $paramVPIS){
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVCOFINS(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VCOFINS)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVCOFINS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function setVCOFINS(\Sped\Schemas\V200\TDec_1302Opc $paramVCOFINS){
        $this->removeElementsByTagName(self::VCOFINS);
        $this->appendChild($paramVCOFINS, false);
        return $this;
    }

}