<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref;

/**
 * Grupo com as informações NF de produtor referenciada (v2.0)

 * @name RefNFP
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class RefNFP extends \Sped\Components\Xml\Element  {
    const NAME = 'refNFP';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCodUfIBGE::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function addCUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCodUfIBGE::NAME);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM 
     */
    public function getAAMM(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM 
     */
    public function addAAMM(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM $paramAAMM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setAAMM(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM $paramAAMM){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\AAMM::NAME);
        $this->appendChild($paramAAMM, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCnpj::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ(){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCnpj::NAME);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCpf::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCpf 
     */
    public function addCPF(){
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCpf::NAME);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TIeDest 
     */
    public function getIE(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIeDest');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TIeDest::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TIeDest 
     */
    public function addIE(){
        return $this->appendChild(new \Sped\Schemas\V200\TIeDest(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TIeDest $paramIE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setIE(\Sped\Schemas\V200\TIeDest $paramIE){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TIeDest::NAME);
        $this->appendChild($paramIE, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod 
     */
    public function getMod(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod 
     */
    public function addMod(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setMod(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod $paramMod){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP\Mod::NAME);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TSerie 
     */
    public function getSerie(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TSerie');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TSerie::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TSerie 
     */
    public function addSerie(){
        return $this->appendChild(new \Sped\Schemas\V200\TSerie(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TSerie $paramSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setSerie(\Sped\Schemas\V200\TSerie $paramSerie){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TSerie::NAME);
        $this->appendChild($paramSerie, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNF 
     */
    public function getNNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNF');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNF::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNF 
     */
    public function addNNF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNF(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNF $paramNNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function setNNF(\Sped\Schemas\V200\TNF $paramNNF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNF::NAME);
        $this->appendChild($paramNNF, false);
        return $this;
    }

}