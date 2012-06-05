<?php

namespace Sped\Commons\Collections;

use \Iterator,
    \Countable;

/**
 * //TODO: adicionar descrição da classe CollectionIterator
 * @name CollectionIterator
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 29/05/2012
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
      throw new Exception('The collection is not instance of Sped_Common_Collections_ArrayCollection and is not Array');
    
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