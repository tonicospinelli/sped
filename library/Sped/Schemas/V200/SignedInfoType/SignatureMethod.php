<?php

namespace Sped\Schemas\V200\SignedInfoType;

/**
 * 
 * @name SignatureMethod
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class SignatureMethod extends \Sped\Components\Xml\Element  {

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
     * @return \Sped\Schemas\V200\SignedInfoType\SignatureMethod 
     */
    public function setAlgorithm(string $value){
        $this->setAttribute('Algorithm', $value);
        return $this;
    }

}