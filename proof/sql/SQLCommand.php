<?php
namespace proof\sql;
/**
 * timestamp Aug 26, 2012 11:00:16 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  <p><b>SQL</b> functionality boils down to this : retrival of data and modification of data.
 *  Retrival may be data stored in a user or system table and modification may be the creation of a table,
 *  deletion or editing of one etc.</p>
 *
 *  <p>The SQL interface inherits from two interfaces that represent these actions. This interface is used
 *   when a class wants to implement those features.</p>
 *
 */
interface SQLCommand extends Fetchable, Pushable
{

}