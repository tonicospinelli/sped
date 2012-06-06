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

namespace Sped\Components\Xml;

/**
 * @category   Sped
 * @package    Sped\Components\Xml
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Element extends \DOMElement {

    /**
     *
     * @return \Sped\Components\Xml\NodeIterator 
     */
    public function getIterator() {
        return new NodeIterator($this);
    }

    /**
     * Adds new child at the end of the children.
     * @param \DOMNode $newNode The appended child.
     * @param boolean $unique If sets TRUE, search if exists the same node.
     * @return DOMNode The node added or if is unique, returns the node found.
     */
    public function appendChild(\DOMNode $newNode, $unique = false) {

        if ($unique) {
            $node = $this->getElementsByTagName($newNode->localName)->item(0);
            if ($node !== null)
                return $node;
        }
        $node = parent::appendChild($newNode);
        if (method_exists($node, 'loadDefaults'))
            $node->loadDefaults();
        return $node;
    }

}