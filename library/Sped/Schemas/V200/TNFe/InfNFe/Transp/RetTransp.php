<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Transp;

/**
 * Dados da retenção  ICMS do Transporte

 * @name RetTransp
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class RetTransp extends \Sped\Components\Xml\Element  {
    const NAME = 'retTransp';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVServ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVServ(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVServ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setVServ(\Sped\Schemas\V200\TDec_1302 $paramVServ){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVServ, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCRet(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCRet(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCRet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setVBCRet(\Sped\Schemas\V200\TDec_1302 $paramVBCRet){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVBCRet, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMSRet(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_0302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMSRet(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMSRet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setPICMSRet(\Sped\Schemas\V200\TDec_0302 $paramPICMSRet){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_0302::NAME);
        $this->appendChild($paramPICMSRet, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSRet(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSRet(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSRet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setVICMSRet(\Sped\Schemas\V200\TDec_1302 $paramVICMSRet){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVICMSRet, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCfopTransp 
     */
    public function getCFOP(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCfopTransp');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCfopTransp::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCfopTransp 
     */
    public function addCFOP(){
        return $this->appendChild(new \Sped\Schemas\V200\TCfopTransp(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCfopTransp $paramCFOP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setCFOP(\Sped\Schemas\V200\TCfopTransp $paramCFOP){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCfopTransp::NAME);
        $this->appendChild($paramCFOP, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMunFG(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCodMunIBGE::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMunFG(){
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMunFG 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\RetTransp 
     */
    public function setCMunFG(\Sped\Schemas\V200\TCodMunIBGE $paramCMunFG){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCodMunIBGE::NAME);
        $this->appendChild($paramCMunFG, false);
        return $this;
    }

}