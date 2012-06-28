<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Cobr;

/**
 * Dados da fatura

 * @name Fat
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Fat extends \Sped\Components\Xml\Element  {
    const NAME = 'fat';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat 
     * @param int $index 
     */
    public function getNFat(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat 
     */
    public function addNFat(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat $paramNFat 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setNFat(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat $paramNFat){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat\NFat::NAME);
        $this->appendChild($paramNFat, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVOrig(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVOrig(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVOrig(\Sped\Schemas\V200\TDec_1302Opc $paramVOrig){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVOrig, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVDesc(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVDesc(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDesc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVDesc(\Sped\Schemas\V200\TDec_1302Opc $paramVDesc){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVDesc, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVLiq(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVLiq(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVLiq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function setVLiq(\Sped\Schemas\V200\TDec_1302Opc $paramVLiq){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVLiq, false);
        return $this;
    }

}