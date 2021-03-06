<?php

namespace proof\util;


/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-10-14 at 14:24:41.
 */
class MapTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Map
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Map;

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers proof\util\Map::add
     */
    public function testAdd()
    {

        $this->assertInstanceOf(get_class($this->object), $this->object->add('item', new \stdClass()));

    }

}
