<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @name X509DataType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class X509DataType extends \Sped\Components\Xml\Element  {

    const X509CERTIFICATE = 'X509Certificate';

    /**
     * 
     * @return \Sped\Schemas\V200\Base64Binary 
     */
    public function getX509Certificate(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Base64Binary');
        return $this->getElementsByTagName(self::X509CERTIFICATE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\Base64Binary 
     * @param type $value 
     */
    public function addX509Certificate($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\Base64Binary(self::X509CERTIFICATE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Base64Binary $paramX509Certificate 
     * @return \Sped\Schemas\V200\X509DataType 
     */
    public function setX509Certificate(\Sped\Schemas\V200\Base64Binary $paramX509Certificate){
        $this->removeElementsByTagName(self::X509CERTIFICATE);
        $this->appendChild($paramX509Certificate, false);
        return $this;
    }

}