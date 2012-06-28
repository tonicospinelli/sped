<?php
namespace Sped\Schemas\V200;

/**
 * 

 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name DocumentSignature
 */
class DocumentSignature extends \Sped\Components\Xml\Document  {

    /**

     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function getSignature(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignatureType');
        return $this->getElementsByTagName(\Sped\Schemas\V200\SignatureType::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function addSignature(){
        return $this->appendChild(new \Sped\Schemas\V200\SignatureType(), true);
    }

    /**

     * @param \Sped\Schemas\V200\SignatureType $paramSignature 
     * @return \Sped\Schemas\V200\DocumentSignature 
     */
    public function setSignature(\Sped\Schemas\V200\SignatureType $paramSignature){
        $this->removeElementsByTagName(\Sped\Schemas\V200\SignatureType::NAME);
        $this->appendChild($paramSignature, false);
        return $this;
    }

}