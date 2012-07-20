<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det;

/**
 * Tributos incidentes nos produtos ou serviços da NF-e
 * @name Imposto
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Imposto extends \Sped\Components\Xml\Element  {

    const ICMS = 'ICMS';

    const IPI = 'IPI';

    const II = 'II';

    const ISSQN = 'ISSQN';

    const PIS = 'PIS';

    const PISST = 'PISST';

    const COFINS = 'COFINS';

    const COFINSST = 'COFINSST';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function getICMS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS');
        return $this->getElementsByTagName(self::ICMS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function addICMS(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS $paramICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setICMS(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS $paramICMS){
        $this->removeElementsByTagName(self::ICMS);
        $this->appendChild($paramICMS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     * @param int $index 
     */
    public function getIPI(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI');
        return $this->getElementsByTagName(self::IPI)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function addIPI(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI $paramIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setIPI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI $paramIPI){
        $this->removeElementsByTagName(self::IPI);
        $this->appendChild($paramIPI, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II 
     * @param int $index 
     */
    public function getII(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II');
        return $this->getElementsByTagName(self::II)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II 
     */
    public function addII(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II $paramII 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setII(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II $paramII){
        $this->removeElementsByTagName(self::II);
        $this->appendChild($paramII, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function getISSQN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN');
        return $this->getElementsByTagName(self::ISSQN)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN 
     */
    public function addISSQN(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN $paramISSQN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setISSQN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ISSQN $paramISSQN){
        $this->removeElementsByTagName(self::ISSQN);
        $this->appendChild($paramISSQN, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function getPIS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS');
        return $this->getElementsByTagName(self::PIS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function addPIS(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS $paramPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setPIS(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS $paramPIS){
        $this->removeElementsByTagName(self::PIS);
        $this->appendChild($paramPIS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     * @param int $index 
     */
    public function getPISST(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST');
        return $this->getElementsByTagName(self::PISST)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function addPISST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST $paramPISST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setPISST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST $paramPISST){
        $this->removeElementsByTagName(self::PISST);
        $this->appendChild($paramPISST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function getCOFINS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS');
        return $this->getElementsByTagName(self::COFINS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function addCOFINS(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS $paramCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setCOFINS(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS $paramCOFINS){
        $this->removeElementsByTagName(self::COFINS);
        $this->appendChild($paramCOFINS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     * @param int $index 
     */
    public function getCOFINSST(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST');
        return $this->getElementsByTagName(self::COFINSST)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function addCOFINSST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST $paramCOFINSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto 
     */
    public function setCOFINSST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST $paramCOFINSST){
        $this->removeElementsByTagName(self::COFINSST);
        $this->appendChild($paramCOFINSST, false);
        return $this;
    }

}