<?php

namespace Sped\Schemas\V200\ReferenceType;

/**
 * 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name DigestMethod
 * @package Sped
 */
class DigestMethod extends \Sped\Components\Xml\Element 
{

    /**
     * 
     * @return string 
     */
    public function getAlgorithm()
    {
        return $this->getAttribute('Algorithm');
    }

    /**
     * 
     */
    public function setAlgorithm()
    {
        $this->setAttribute('Algorithm', $value);
        return $this;
    }

}