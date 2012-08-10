<?php
namespace proof\webapp;
/**
 * timestamp Jul 31, 2012 10:00:41 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proff\webapp
 *
 *  Empty implementation of the BrowserSubscriber interface.
 *
 */
use proof\util\Vector;
use proof\util\Map;

class AbstractBrowserSubscriber implements BrowserSubscriber
{


    public function onGet(Browser $browser, Vector $path, Map $args)
    {

    }

    public function onPost(Browser $browser, Vector $path, Map $post)
    {

    }
}