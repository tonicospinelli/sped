<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name X509DataType
 * @package Sped
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
     * @param type $value 
     * @return \Sped\Schemas\V200\Base64Binary 
     */
    public function addX509Certificate($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\Base64Binary(self::X509CERTIFICATE, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
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