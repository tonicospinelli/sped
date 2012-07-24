<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Informar apenas para operações<br />
 * com combustíveis líquidos
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Comb
 * @package Sped
 */
class Comb extends \Sped\Components\Xml\Element  {

    const CPRODANP = 'cProdANP';

    const CODIF = 'CODIF';

    const QTEMP = 'qTemp';

    const UFCONS = 'UFCons';

    const CIDE = 'CIDE';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP 
     */
    public function getCProdANP(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP');
        return $this->getElementsByTagName(self::CPRODANP)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP 
     */
    public function addCProdANP($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP(self::CPRODANP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP $paramCProdANP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setCProdANP(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP $paramCProdANP){
        $this->removeElementsByTagName(self::CPRODANP);
        $this->appendChild($paramCProdANP, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF 
     */
    public function getCODIF($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF');
        return $this->getElementsByTagName(self::CODIF)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF 
     */
    public function addCODIF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF(self::CODIF, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF $paramCODIF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setCODIF(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF $paramCODIF){
        $this->removeElementsByTagName(self::CODIF);
        $this->appendChild($paramCODIF, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function getQTemp($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204Opc');
        return $this->getElementsByTagName(self::QTEMP)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function addQTemp($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204Opc(self::QTEMP, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1204Opc $paramQTemp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setQTemp(\Sped\Schemas\V200\TDec_1204Opc $paramQTemp){
        $this->removeElementsByTagName(self::QTEMP);
        $this->appendChild($paramQTemp, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUFCons(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UFCONS)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUFCons($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UFCONS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TUf $paramUFCons 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setUFCons(\Sped\Schemas\V200\TUf $paramUFCons){
        $this->removeElementsByTagName(self::UFCONS);
        $this->appendChild($paramUFCons, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     */
    public function getCIDE($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE');
        return $this->getElementsByTagName(self::CIDE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     */
    public function addCIDE(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE(self::CIDE, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE $paramCIDE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function setCIDE(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE $paramCIDE){
        $this->removeElementsByTagName(self::CIDE);
        $this->appendChild($paramCIDE, false);
        return $this;
    }

}