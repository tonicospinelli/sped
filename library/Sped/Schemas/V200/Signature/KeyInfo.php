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

use Sped\Schemas\V200\Signature\KeyInfo\X509Data;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class KeyInfo extends \Sped\Components\Xml\Element {

    const NAME = 'KeyInfo';

    public function __construct() {
        parent::__construct(self::NAME, null, 'http://www.w3.org/2000/09/xmldsig#');
    }

    public function loadDefaults() {
        $this->addX509Data();
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\KeyInfo\X509Data
     */
    public function getX509Data() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Signature\KeyInfo\X509Data');
        return $this->getElementsByTagName(X509Data::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\KeyInfo\X509Data
     */
    public function addX509Data() {
        return $this->appendChild(new X509Data(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Signature\KeyInfo\X509Data $paramX509Data
     * @return \Sped\Schemas\V200\Signature\SignedInfo 
     */
    public function setX509Data($paramX509Data) {
        $this->appendChild($paramX509Data, true);
        return $this;
    }

}