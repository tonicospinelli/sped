<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS;

/**
 * Código de Situação Tributária do COFINS.<br />
 * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
 * @name COFINSQtde
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class COFINSQtde extends \Sped\Components\Xml\Element  {

    const CST = 'CST';

    const QBCPROD = 'qBCProd';

    const VALIQPROD = 'vAliqProd';

    const VCOFINS = 'vCOFINS';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST 
     * @param type $value 
     */
    public function addCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST(self::CST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde\CST $paramCST){
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function getQBCProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204');
        return $this->getElementsByTagName(self::QBCPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204 
     * @param type $value 
     */
    public function addQBCProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204(self::QBCPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1204 $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204 $paramQBCProd){
        $this->removeElementsByTagName(self::QBCPROD);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getVAliqProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(self::VALIQPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     * @param type $value 
     */
    public function addVAliqProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(self::VALIQPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1104v $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104v $paramVAliqProd){
        $this->removeElementsByTagName(self::VALIQPROD);
        $this->appendChild($paramVAliqProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVCOFINS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VCOFINS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVCOFINS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VCOFINS, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde 
     */
    public function setVCOFINS(\Sped\Schemas\V200\TDec_1302 $paramVCOFINS){
        $this->removeElementsByTagName(self::VCOFINS);
        $this->appendChild($paramVCOFINS, false);
        return $this;
    }

}