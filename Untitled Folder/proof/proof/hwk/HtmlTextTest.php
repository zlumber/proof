<?php

namespace proof\hwk;


require_once dirname(__FILE__) . '/../../../../proof/hwk/HtmlText.php';

/**
 * Test class for HtmlText.
 * Generated by PHPUnit on 2012-07-22 at 18:34:20.
 */
class HtmlTextTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var HtmlText
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {

        $this->object = new HtmlText();

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers proof\hwk\HtmlText::setHtml
     * @todo Implement testSetHtml().
     */
    public function testSetHtml()
    {

        $html = "<p>This is some html</p>";

        $this->object->setHtml($html);

        $this->assertEquals($html, $this->object->getHtml());



    }

    /**
     * @covers proof\hwk\HtmlText::setName
     * @todo Implement testSetName().
     */
    public function testSetName()
    {

        $name = "tag";

        $this->object->setName($name);

        $this->assertEquals($name, $this->object->getName());

    }

}

?>
