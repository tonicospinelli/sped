<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do COFINS da<br />
 * Substituição Tributaria;
 * @name COFINSST
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class COFINSST extends \Sped\Components\Xml\Element  {
    const NAME = 'COFINSST';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302Opc $paramVBC){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPCOFINS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_0302Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPCOFINS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setPCOFINS(\Sped\Schemas\V200\TDec_0302Opc $paramPCOFINS){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_0302Opc::NAME);
        $this->appendChild($paramPCOFINS, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function getQBCProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1204Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function addQBCProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1204Opc $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204Opc $paramQBCProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1204Opc::NAME);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1104Opc 
     */
    public function getVAliqProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1104Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1104Opc 
     */
    public function addVAliqProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1104Opc $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104Opc $paramVAliqProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1104Opc::NAME);
        $this->appendChild($paramVAliqProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVCOFINS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVCOFINS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setVCOFINS(\Sped\Schemas\V200\TDec_1302Opc $paramVCOFINS){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVCOFINS, false);
        return $this;
    }

}