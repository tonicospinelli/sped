<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Informar apenas para operações<br />
 * com combustíveis líquidos
 * @name Comb
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Comb extends \Sped\Components\Xml\Element  {

    const CPRODANP = 'cProdANP';

    const CODIF = 'CODIF';

    const QTEMP = 'qTemp';

    const UFCONS = 'UFCons';

    const CIDE = 'CIDE';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP 
     */
    public function addCProdANP(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CProdANP(), true);
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF 
     * @param int $index 
     */
    public function getCODIF(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF');
        return $this->getElementsByTagName(self::CODIF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF 
     */
    public function addCODIF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CODIF(), true);
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
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     * @param int $index 
     */
    public function getQTemp(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204Opc');
        return $this->getElementsByTagName(self::QTEMP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function addQTemp(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204Opc(), true);
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
     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUFCons(){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(), true);
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     * @param int $index 
     */
    public function getCIDE(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE');
        return $this->getElementsByTagName(self::CIDE)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE 
     */
    public function addCIDE(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb\CIDE(), true);
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