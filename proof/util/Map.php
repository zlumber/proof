<?php
namespace proof\util;
/**
 * timestamp Jul 22, 2012 7:10:25 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 * Collection that allows keys to be assigned when adding to it.
 *
 */
class Map extends AbstractCollection
{
    /**
     * Adds an item to this Collection
     * @param string $index
     * @param mixed $item
     * @return \proof\util\AbstractCollection
     *
     */
    public function add($index, $item)
    {

        $this->items[$index] = $item;

        return $this;

    }
}