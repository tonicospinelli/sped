<?php
namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Dados dos totais da NF-e

 * @name Total
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Total extends \Sped\Components\Xml\Element  {
    const NAME = 'total';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function getICMSTot(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function addICMSTot(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot $paramICMSTot 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function setICMSTot(\Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot $paramICMSTot){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot::NAME);
        $this->appendChild($paramICMSTot, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     * @param int $index 
     */
    public function getISSQNtot(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot 
     */
    public function addISSQNtot(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot $paramISSQNtot 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function setISSQNtot(\Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot $paramISSQNtot){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Total\ISSQNtot::NAME);
        $this->appendChild($paramISSQNtot, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     * @param int $index 
     */
    public function getRetTrib(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib 
     */
    public function addRetTrib(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib $paramRetTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function setRetTrib(\Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib $paramRetTrib){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Total\RetTrib::NAME);
        $this->appendChild($paramRetTrib, false);
        return $this;
    }

}