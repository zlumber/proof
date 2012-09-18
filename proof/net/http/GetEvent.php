<?php
namespace proof\net\http;
/**
 * timestamp Sep 8, 2012 10:02:12 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Event representing a GET request.
 *
 */
use proof\php\Map;

class GetEvent extends HttpEvent
{

    protected function _params()
    {

        return new Map($_GET);

    }

}