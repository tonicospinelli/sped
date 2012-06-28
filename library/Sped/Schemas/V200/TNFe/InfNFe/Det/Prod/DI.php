<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Delcaração de Importação<br />
 * (NT 2011/004)
 * @name DI
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class DI extends \Sped\Components\Xml\Element  {
    const NAME = 'DI';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI 
     */
    public function getNDI(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI 
     */
    public function addNDI(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI $paramNDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setNDI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI $paramNDI){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI::NAME);
        $this->appendChild($paramNDI, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function getDDI(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDDI(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setDDI(\Sped\Schemas\V200\TData $paramDDI){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDDI, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb 
     */
    public function getXLocDesemb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb 
     */
    public function addXLocDesemb(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb $paramXLocDesemb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setXLocDesemb(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb $paramXLocDesemb){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb::NAME);
        $this->appendChild($paramXLocDesemb, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function getUFDesemb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUfEmi');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TUfEmi::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function addUFDesemb(){
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TUfEmi $paramUFDesemb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setUFDesemb(\Sped\Schemas\V200\TUfEmi $paramUFDesemb){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TUfEmi::NAME);
        $this->appendChild($paramUFDesemb, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function getDDesemb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDDesemb(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDDesemb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setDDesemb(\Sped\Schemas\V200\TData $paramDDesemb){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDDesemb, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador 
     */
    public function getCExportador(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador 
     */
    public function addCExportador(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador $paramCExportador 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setCExportador(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador $paramCExportador){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador::NAME);
        $this->appendChild($paramCExportador, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function getAdi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function addAdi(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi $paramAdi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setAdi(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi $paramAdi){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi::NAME);
        $this->appendChild($paramAdi, false);
        return $this;
    }

}