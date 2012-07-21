<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref;

/**
 * Dados da NF modelo 1/1A referenciada
 * @name RefNF
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class RefNF extends \Sped\Components\Xml\Element  {

    const CUF = 'cUF';

    const AAMM = 'AAMM';

    const CNPJ = 'CNPJ';

    const MOD = 'mod';

    const SERIE = 'serie';

    const NNF = 'nNF';

    /**
     * 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(self::CUF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     * @param type $value 
     */
    public function addCUF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(self::CUF, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF){
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM 
     */
    public function getAAMM(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM');
        return $this->getElementsByTagName(self::AAMM)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM 
     * @param type $value 
     */
    public function addAAMM($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM(self::AAMM, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM $paramAAMM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setAAMM(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\AAMM $paramAAMM){
        $this->removeElementsByTagName(self::AAMM);
        $this->appendChild($paramAAMM, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     * @param type $value 
     */
    public function addCNPJ($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ){
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod 
     */
    public function getMod(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod');
        return $this->getElementsByTagName(self::MOD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod 
     * @param type $value 
     */
    public function addMod($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod(self::MOD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setMod(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF\Mod $paramMod){
        $this->removeElementsByTagName(self::MOD);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function getSerie(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TSerie');
        return $this->getElementsByTagName(self::SERIE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TSerie 
     * @param type $value 
     */
    public function addSerie($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TSerie(self::SERIE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TSerie $paramSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setSerie(\Sped\Schemas\V200\TSerie $paramSerie){
        $this->removeElementsByTagName(self::SERIE);
        $this->appendChild($paramSerie, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNF 
     */
    public function getNNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNF');
        return $this->getElementsByTagName(self::NNF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNF 
     * @param type $value 
     */
    public function addNNF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNF(self::NNF, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNF $paramNNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function setNNF(\Sped\Schemas\V200\TNF $paramNNF){
        $this->removeElementsByTagName(self::NNF);
        $this->appendChild($paramNNF, false);
        return $this;
    }

}