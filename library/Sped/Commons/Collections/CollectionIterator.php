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

namespace Sped\Commons\Collections;

use \Countable,
    \IteratorAggregate;

/**
 * @category   Sped
 * @package    Sped\Commons\Collections
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class CollectionIterator implements Iterator, Countable {

    /**
     * This is our collection class, defined later in article.
     */
    private $collection = null;

    /**
     * Current index
     */
    private $currentIndex = 0;

    /**
     * Keys in collection
     */
    private $keys = null;

    /**
     * Collection iterator constructor
     *
     * @param ArrayCollection $collection 
     */
    public function __construct($collection) {
        if (!$collection instanceof ArrayCollection AND is_array($collection))
            $collection = new ArrayCollection($collection);

        if (!$collection instanceof ArrayCollection AND !is_array($collection))
            throw new Exception('The collection is not instance of \Sped\Common\Collections\ArrayCollection and is not Array');

        $this->collection = $collection;

        $this->keys = $collection->getKeys();
    }

    /**
     * Implementation of method current
     *
     * This method returns current item in collection based on currentIndex.
     */
    public function current() {
        return $this->collection->get($this->key());
    }

    /**
     * Get current key
     *
     * This method returns current items' key in collection based on currentIndex.
     */
    public function key() {
        return $this->keys[$this->currentIndex];
    }

    /**
     * Move to next idex
     *
     * This method increases currentIndex by one.
     */
    public function next() {
        ++$this->currentIndex;
    }

    /**
     * Rewind
     *
     * This method resets currentIndex by setting it to 0
     */
    public function rewind() {
        $this->currentIndex = 0;
    }

    /**
     * Check if current index is valid
     *
     * This method checks if current index is valid by checking the keys array.
     */
    public function valid() {
        return isset($this->keys[$this->currentIndex]);
    }

    /**
     * Get number of ocurrences.
     * @return int
     */
    public function count() {
        return $this->collection->count();
    }

}