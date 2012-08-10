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
class X509DataType extends \Sped\Components\Xml\Element 
{

    const X509CERTIFICATE = 'X509Certificate';

    /**
     * 
     * @return \Sped\Components\Xml\Element 
     */
    public function getX509Certificate()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Components\Xml\Element');
        return $this->getElementsByTagName(self::X509CERTIFICATE)->item(0);
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Components\Xml\Element 
     */
    public function addX509Certificate($value = NULL)
    {
        return $this->appendChild(new \Sped\Components\Xml\Element(self::X509CERTIFICATE, $value, 'http://www.w3.org/2000/09/xmldsig#'), true);
    }

    /**
     * 
     * @param \Sped\Components\Xml\Element $paramX509Certificate 
     * @return \Sped\Schemas\V200\X509DataType 
     */
    public function setX509Certificate(\Sped\Components\Xml\Element $paramX509Certificate)
    {
        $this->removeElementsByTagName(self::X509CERTIFICATE);
        $this->appendChild($paramX509Certificate, false);
        return $this;
    }

}