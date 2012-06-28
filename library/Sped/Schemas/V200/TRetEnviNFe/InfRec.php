<?php
namespace Sped\Schemas\V200\TRetEnviNFe;

/**
 * Dados do Recibo do Lote

 * @name InfRec
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class InfRec extends \Sped\Components\Xml\Element  {
    const NAME = 'infRec';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TRec 
     */
    public function getNRec(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRec');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TRec::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TRec 
     */
    public function addNRec(){
        return $this->appendChild(new \Sped\Schemas\V200\TRec(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TRec $paramNRec 
     * @return \Sped\Schemas\V200\TRetEnviNFe\InfRec 
     */
    public function setNRec(\Sped\Schemas\V200\TRec $paramNRec){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TRec::NAME);
        $this->appendChild($paramNRec, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TMed 
     */
    public function getTMed(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMed');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TMed::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TMed 
     */
    public function addTMed(){
        return $this->appendChild(new \Sped\Schemas\V200\TMed(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TMed $paramTMed 
     * @return \Sped\Schemas\V200\TRetEnviNFe\InfRec 
     */
    public function setTMed(\Sped\Schemas\V200\TMed $paramTMed){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TMed::NAME);
        $this->appendChild($paramTMed, false);
        return $this;
    }

}