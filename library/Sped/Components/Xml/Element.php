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
class Element extends \DOMElement
{

    /**
     *
     * @return \Sped\Components\Xml\NodeIterator 
     */
    public function getIterator()
    {
        return new NodeIterator($this);
    }

    /**
     * Adds new child at the end of the children.
     * @param \DOMNode $newNode <p>The appended child.</p>
     * @param boolean $unique [optional]<p>
     * If sets TRUE, search if exists the same node.
     * </p>
     * @return DOMNode The node added or if is unique, returns the node found.
     */
    public function appendChild(\DOMNode $newNode, $unique = false)
    {
        if ($unique)
            $node = parent::getElementsByTagName($newNode->localName)->item(0);

        if ($node !== null)
            $newNode = parent::replaceChild($newNode, $node);
        else 
            $newNode = parent::appendChild($newNode);

        return $newNode;
    }

    /**
     * Adds a new child before a reference node
     * @link http://php.net/manual/en/domnode.insertbefore.php
     * @param DOMNode $newnode <p>
     * The new node.
     * </p>
     * @param DOMNode $refnode [optional] <p>
     * The reference node. If not supplied, <i>newnode</i> is
     * appended to the children.
     * </p>
     * @return DOMNode The inserted node.
     */
    public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = null)
    {
        $newNode = parent::insertBefore($newnode, $refnode);

        return $newNode;
    }

    /**
     * (PHP 5)<br/>
     * Replaces a child
     * @link http://php.net/manual/en/domnode.replacechild.php
     * @param DOMNode $newnode <p>
     * The new node. It must be a member of the target document, i.e.
     * created by one of the DOMDocument->createXXX() methods or imported in
     * the document by .
     * </p>
     * @param DOMNode $oldnode <p>
     * The old node.
     * </p>
     * @return DOMNode The old node or false if an error occur.
     */
    public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode)
    {
        $newNode = parent::replaceChild($newnode, $oldnode);

        return $newNode;
    }

    /**
     * (PHP 5)<br/>
     * Removes children by tag name from list of children
     * @link http://php.net/manual/en/domnode.removechild.php
     * @param string $tagName <p>
     * The tagName to remove children.
     * </p>
     * @return boolean If the child could be removed the function returns true.
     */
    public function removeElementsByTagName($name)
    {
        $nodes = $this->getElementsByTagName($name);
        foreach ($nodes as $node)
            $this->removeChild($node);
        return true;
    }

}