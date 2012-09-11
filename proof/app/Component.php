<?php
namespace proof\app;
/**
 * timestamp Sep 10, 2012 4:49:16 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 * The Component interface is for classes that store html text.
 *
 *
 */
interface Component
{

    public function getName();

    public function getContent();

}