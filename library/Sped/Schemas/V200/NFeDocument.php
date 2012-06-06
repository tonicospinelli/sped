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

namespace Sped\Schemas\V200;

/**
 * @category   Sped
 * @package    Sped\Schemas\V200
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class NFeDocument extends \Sped\Components\Xml\Document {

    /**
     *
     * @param string $versao
     * @param string $encoding 
     */
    function __construct() {
        parent::__construct('1.0', 'UTF-8');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function getNFe() {
        $this->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe');
        return $this->getElementsByTagName('NFe')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe
     */
    public function addNFe() {
        return $this->appendChild(new TNFe());
    }

    /**
     *
     * @param Sped\Schemas\V200\TNFe $paramTNFe
     * @return \Sped\Schemas\V200\NFeDocument 
     */
    public function setNFe($paramTNFe) {
        $nfe = $this->getNFe();
        if ($nfe == null)
            $this->appendChild($paramTNFe);
        else
            $this->replaceChild($paramTNFe, $nfe);
        return $this;
    }

}