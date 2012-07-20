<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * ISSQN
 * @name ISSQN
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ISSQN extends \Sped\Components\Xml\Element  {

    const VBC = 'vBC';

    const VALIQ = 'vAliq';

    const VISSQN = 'vISSQN';

    const CMUNFG = 'cMunFG';

    const CLISTSERV = 'cListServ';

    const CSITTRIB = 'cSitTrib';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC){
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getVAliq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::VALIQ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addVAliq(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramVAliq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function setVAliq(\Sped\Schemas\V200\TDec_0302 $paramVAliq){
        $this->removeElementsByTagName(self::VALIQ);
        $this->appendChild($paramVAliq, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVISSQN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VISSQN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVISSQN(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVISSQN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function setVISSQN(\Sped\Schemas\V200\TDec_1302 $paramVISSQN){
        $this->removeElementsByTagName(self::VISSQN);
        $this->appendChild($paramVISSQN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMunFG(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(self::CMUNFG)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMunFG(){
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMunFG 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function setCMunFG(\Sped\Schemas\V200\TCodMunIBGE $paramCMunFG){
        $this->removeElementsByTagName(self::CMUNFG);
        $this->appendChild($paramCMunFG, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCListServ 
     */
    public function getCListServ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCListServ');
        return $this->getElementsByTagName(self::CLISTSERV)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCListServ 
     */
    public function addCListServ(){
        return $this->appendChild(new \Sped\Schemas\V200\TCListServ(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCListServ $paramCListServ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function setCListServ(\Sped\Schemas\V200\TCListServ $paramCListServ){
        $this->removeElementsByTagName(self::CLISTSERV);
        $this->appendChild($paramCListServ, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN\CSitTrib 
     */
    public function getCSitTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN\CSitTrib');
        return $this->getElementsByTagName(self::CSITTRIB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN\CSitTrib 
     */
    public function addCSitTrib(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN\CSitTrib(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN\CSitTrib $paramCSitTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function setCSitTrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN\CSitTrib $paramCSitTrib){
        $this->removeElementsByTagName(self::CSITTRIB);
        $this->appendChild($paramCSitTrib, false);
        return $this;
    }

}