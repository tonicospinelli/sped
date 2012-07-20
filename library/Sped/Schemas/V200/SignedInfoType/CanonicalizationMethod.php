<?php

namespace Sped\Schemas\V200\SignedInfoType;

/**
 * 
 * @name CanonicalizationMethod
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CanonicalizationMethod extends \Sped\Components\Xml\Element  {

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return string 
     */
    public function getAlgorithm(){
        return $this->getAttribute('Algorithm');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\SignedInfoType\CanonicalizationMethod 
     */
    public function setAlgorithm(string $value){
        $this->setAttribute('Algorithm', $value);
        return $this;
    }

}