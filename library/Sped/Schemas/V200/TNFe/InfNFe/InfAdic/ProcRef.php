<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\InfAdic;

/**
 * Grupo de informações do  processo referenciado

 * @name ProcRef
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ProcRef extends \Sped\Components\Xml\Element  {
    const NAME = 'procRef';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc 
     */
    public function getNProc(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc 
     */
    public function addNProc(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc $paramNProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function setNProc(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc $paramNProc){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc::NAME);
        $this->appendChild($paramNProc, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc 
     */
    public function getIndProc(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc 
     */
    public function addIndProc(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc $paramIndProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function setIndProc(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc $paramIndProc){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc::NAME);
        $this->appendChild($paramIndProc, false);
        return $this;
    }

}