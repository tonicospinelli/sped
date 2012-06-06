<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Schemas\V200\Signature;

use Sped\Schemas\V200\Signature\SignedInfo\CanonicalizationMethod,
    Sped\Schemas\V200\Signature\SignedInfo\SignatureMethod,
    Sped\Schemas\V200\Reference;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class SignedInfo extends \Sped\Components\Xml\Element {

    const NAME = 'SignedInfo';

    public function __construct() {
        parent::__construct(self::NAME, null, 'http://www.w3.org/2000/09/xmldsig#');
    }

    public function loadDefaults() {
        $this->addCanonicalizationMethod()->setAlgorithm('http://www.w3.org/TR/2001/REC-xml-c14n-20010315');
        $this->addSignatureMethod()->setAlgorithm('http://www.w3.org/2000/09/xmldsig#rsa-sha1');
        $this->addReference();
    }

    /**
     *
     * @return Sped\Schemas\V200\Signature\SignedInfo\CanonicalizationMethod
     */
    public function getCanonicalizationMethod() {
        $this->ownerDocument->registerNodeClass('\DOMElement', 'Sped\Schemas\V200\Signature\SignedInfo\CanonicalizationMethod');
        return $this->getElementsByTagName(CanonicalizationMethod::NAME)->item(0);
    }

    /**
     *
     * @return Sped\Schemas\V200\Signature\SignedInfo\CanonicalizationMethod
     */
    public function addCanonicalizationMethod() {
        return $this->appendChild(new CanonicalizationMethod());
    }

    /**
     * 
     * @param Sped\Schemas\V200\Signature\SignedInfo\CanonicalizationMethod $paramCanonicalizationMethod
     * @return \Sped\Schemas\V200\Signature\SignedInfo 
     */
    public function setCanonicalizationMethod($paramCanonicalizationMethod) {
        $canonicalizationMethod = $this->getCanonicalizationMethod();
        if ($canonicalizationMethod == null)
            $this->appendChild($paramCanonicalizationMethod);
        else
            $this->replaceChild($paramCanonicalizationMethod, $canonicalizationMethod);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\SignedInfo\SignatureMethod
     */
    public function getSignatureMethod() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Signature\SignedInfo\SignatureMethod');
        return $this->getElementsByTagName(SignatureMethod::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\SignedInfo\SignatureMethod
     */
    public function addSignatureMethod() {
        return $this->appendChild(new SignatureMethod());
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Signature\SignedInfo\SignatureMethod $paramSignatureMethod
     * @return \Sped\Schemas\V200\Signature\SignedInfo
     */
    public function setSignatureMethod($paramSignatureMethod) {
        $signatureMethod = $this->getSignatureMethod();
        if ($signatureMethod == null)
            $this->appendChild($paramSignatureMethod);
        else
            $this->replaceChild($paramSignatureMethod, $signatureMethod);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\Reference
     */
    public function getReference() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Reference');
        return $this->getElementsByTagName(Reference::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\Reference
     */
    public function addReference() {
        return $this->appendChild(new Reference());
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Reference $paramReference
     * @return \Sped\Schemas\V200\Signature\SignedInfo
     */
    public function setReference($paramReference) {
        $reference = $this->getReference();
        if ($reference == null)
            $this->appendChild($paramReference);
        else
            $this->replaceChild($paramReference, $reference);
        return $this;
    }

}