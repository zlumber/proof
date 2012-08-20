<?php
namespace proof\util;
/**
 * timestamp Jul 18, 2012 12:55:04 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util;
 *
 * Interface for classes that act as aggregate holders of objects and/or primitives.
 * The Aggregate heirachy is used to differentiate between associatively collected items
 * and listed items. ($items['a'] vs $items[0]).
 *
 *
 *
 *
 *
 */
interface Aggregate extends \IteratorAggregate
{

    /**
     * Returns the value stored at a specific index
     *
     */
    public function get($index);


    /**
     * Removes all item members.
     *
     */
    public function clear();

    /**
     * Tests for the existence of an index
     */
    public  function indexAt($index);

    /**
     *Test if an item exists at the specifed index.
     */
    public function itemAt($index);

    /**
     * Test for emptiness
     */
    public function isEmpty();


    /**
     * Returns the number of elements in the Collection
     *
     */
    public function size();

    /**
     * Removes the item at $index
     *
     */
    public function remove($index);

    /**
     * Returns a array representation of this object
     *
     */
    public function toArray();






}