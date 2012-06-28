<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Ide;

/**
 * Grupo de infromações da NF referenciada

 * @name NFref
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class NFref extends \Sped\Components\Xml\Element  {
    const NAME = 'NFref';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function getRefNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TChNFe');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TChNFe::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function addRefNFe(){
        return $this->appendChild(new \Sped\Schemas\V200\TChNFe(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TChNFe $paramRefNFe 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefNFe(\Sped\Schemas\V200\TChNFe $paramRefNFe){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TChNFe::NAME);
        $this->appendChild($paramRefNFe, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function getRefNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function addRefNF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF $paramRefNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefNF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF $paramRefNF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF::NAME);
        $this->appendChild($paramRefNF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function getRefNFP(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function addRefNFP(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP $paramRefNFP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefNFP(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP $paramRefNFP){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP::NAME);
        $this->appendChild($paramRefNFP, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function getRefCTe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TChNFe');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TChNFe::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function addRefCTe(){
        return $this->appendChild(new \Sped\Schemas\V200\TChNFe(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TChNFe $paramRefCTe 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefCTe(\Sped\Schemas\V200\TChNFe $paramRefCTe){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TChNFe::NAME);
        $this->appendChild($paramRefCTe, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function getRefECF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function addRefECF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF $paramRefECF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefECF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF $paramRefECF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF::NAME);
        $this->appendChild($paramRefECF, false);
        return $this;
    }

}