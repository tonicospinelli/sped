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

    const NPROC = 'nProc';

    const INDPROC = 'indProc';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc 
     */
    public function getNProc(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc');
        return $this->getElementsByTagName(self::NPROC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc 
     * @param type $value 
     */
    public function addNProc($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc(self::NPROC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc $paramNProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function setNProc(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc $paramNProc){
        $this->removeElementsByTagName(self::NPROC);
        $this->appendChild($paramNProc, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc 
     */
    public function getIndProc(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc');
        return $this->getElementsByTagName(self::INDPROC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc 
     * @param type $value 
     */
    public function addIndProc($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc(self::INDPROC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc $paramIndProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function setIndProc(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc $paramIndProc){
        $this->removeElementsByTagName(self::INDPROC);
        $this->appendChild($paramIndProc, false);
        return $this;
    }

}