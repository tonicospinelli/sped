<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Cana;

/**
 * Deduções - Taxas e Contribuições // v2.0

 * @name Deduc
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Deduc extends \Sped\Components\Xml\Element  {
    const NAME = 'deduc';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed 
     */
    public function getXDed(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed 
     */
    public function addXDed(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed $paramXDed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc 
     */
    public function setXDed(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed $paramXDed){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc\XDed::NAME);
        $this->appendChild($paramXDed, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVDed(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVDed(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVDed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\Deduc 
     */
    public function setVDed(\Sped\Schemas\V200\TDec_1302 $paramVDed){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVDed, false);
        return $this;
    }

}