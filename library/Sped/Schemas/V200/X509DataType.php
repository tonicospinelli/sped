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
    const NAME = 'X509Data';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\Base64Binary 
     */
    public function getX509Certificate(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Base64Binary');
        return $this->getElementsByTagName(\Sped\Schemas\V200\Base64Binary::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\Base64Binary 
     */
    public function addX509Certificate(){
        return $this->appendChild(new \Sped\Schemas\V200\Base64Binary(), true);
    }

    /**

     * @param \Sped\Schemas\V200\Base64Binary $paramX509Certificate 
     * @return \Sped\Schemas\V200\X509DataType 
     */
    public function setX509Certificate(\Sped\Schemas\V200\Base64Binary $paramX509Certificate){
        $this->removeElementsByTagName(\Sped\Schemas\V200\Base64Binary::NAME);
        $this->appendChild($paramX509Certificate, false);
        return $this;
    }

}