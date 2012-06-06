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

namespace Sped\Schemas\V200\Signature\KeyInfo;

/**
 * Certificado Digital X509 em Base64
 * @category   Sped
 * @package    Sped\Schemas\V200\Signature\SignedInfo
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class X509Certificate extends \Sped\Components\Xml\Element {

    const NAME = 'X509Certificate';

    public function __construct() {
        parent::__construct(self::NAME, null, 'http://www.w3.org/2000/09/xmldsig#');
    }

    /**
     * Retorna o valor Certificado Digital X509 em Base64
     * @return string
     */
    public function getValue() {
        return $this->nodeValue;
    }

    /**
     * Define o Certificado Digital X509 em Base64
     * @param string $key
     * @return \Sped\Schemas\V200\Signature\KeyInfo\X509Certificate 
     */
    public function setValue($paramString) {
        $this->nodeValue = $paramString;
        return $this;
    }

}