<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Dados da cobrança da NF-e
 * @name Cobr
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Cobr extends \Sped\Components\Xml\Element  {

    const FAT = 'fat';

    const DUP = 'dup';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     * @param int $index 
     */
    public function getFat(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat');
        return $this->getElementsByTagName(self::FAT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat 
     */
    public function addFat(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat $paramFat 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function setFat(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Fat $paramFat){
        $this->removeElementsByTagName(self::FAT);
        $this->appendChild($paramFat, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     * @param int $index 
     */
    public function getDup(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup');
        return $this->getElementsByTagName(self::DUP)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function addDup(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup $paramDup 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function setDup(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup $paramDup){
        $this->removeElementsByTagName(self::DUP);
        $this->appendChild($paramDup, false);
        return $this;
    }

}