<?php
namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Informações de exportação

 * @name Exporta
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Exporta extends \Sped\Components\Xml\Element  {
    const NAME = 'exporta';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUFEmbarq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TUf::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUFEmbarq(){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TUf $paramUFEmbarq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta 
     */
    public function setUFEmbarq(\Sped\Schemas\V200\TUf $paramUFEmbarq){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TUf::NAME);
        $this->appendChild($paramUFEmbarq, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq 
     */
    public function getXLocEmbarq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq 
     */
    public function addXLocEmbarq(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq $paramXLocEmbarq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta 
     */
    public function setXLocEmbarq(\Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq $paramXLocEmbarq){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Exporta\XLocEmbarq::NAME);
        $this->appendChild($paramXLocEmbarq, false);
        return $this;
    }

}