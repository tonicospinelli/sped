<?php

namespace Sped\Schemas\V200;

/**
 * 
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name DocumentSignature
 * @package Sped
 */
class DocumentSignature extends \Sped\Components\Xml\Document 
{

    const SIGNATURE = 'Signature';

    /**
     * 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function getSignature()
    {
        $this->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignatureType');
        return $this->getElementsByTagName(self::SIGNATURE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function addSignature()
    {
        return $this->appendChild(new \Sped\Schemas\V200\SignatureType(self::SIGNATURE, NULL, 'http://www.w3.org/2000/09/xmldsig#'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\SignatureType $paramSignature 
     * @return \Sped\Schemas\V200\DocumentSignature 
     */
    public function setSignature(\Sped\Schemas\V200\SignatureType $paramSignature)
    {
        $this->removeElementsByTagName(self::SIGNATURE);
        $this->appendChild($paramSignature, false);
        return $this;
    }

}