<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas

 * @name Med
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Med extends \Sped\Components\Xml\Element  {
    const NAME = 'med';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote 
     */
    public function getNLote(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote 
     */
    public function addNLote(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote $paramNLote 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setNLote(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote $paramNLote){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote::NAME);
        $this->appendChild($paramNLote, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0803 
     */
    public function getQLote(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0803');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_0803::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0803 
     */
    public function addQLote(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0803(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_0803 $paramQLote 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setQLote(\Sped\Schemas\V200\TDec_0803 $paramQLote){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_0803::NAME);
        $this->appendChild($paramQLote, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function getDFab(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDFab(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDFab 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setDFab(\Sped\Schemas\V200\TData $paramDFab){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDFab, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function getDVal(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDVal(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDVal 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setDVal(\Sped\Schemas\V200\TData $paramDVal){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDVal, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVPMC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVPMC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVPMC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setVPMC(\Sped\Schemas\V200\TDec_1302 $paramVPMC){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVPMC, false);
        return $this;
    }

}