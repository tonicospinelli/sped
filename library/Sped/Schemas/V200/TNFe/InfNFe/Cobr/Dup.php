<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Cobr;

/**
 * Dados das duplicatas NT 2011/004

 * @name Dup
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Dup extends \Sped\Components\Xml\Element  {
    const NAME = 'dup';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup 
     * @param int $index 
     */
    public function getNDup(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup 
     */
    public function addNDup(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup $paramNDup 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setNDup(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup $paramNDup){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup::NAME);
        $this->appendChild($paramNDup, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     * @param int $index 
     */
    public function getDVenc(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDVenc(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDVenc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setDVenc(\Sped\Schemas\V200\TData $paramDVenc){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDVenc, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVDup(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVDup(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDup 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setVDup(\Sped\Schemas\V200\TDec_1302Opc $paramVDup){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVDup, false);
        return $this;
    }

}