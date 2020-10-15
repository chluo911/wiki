<?php

/**
 * @covers UserNotLoggedIn
 * @author Addshore
 */
class UserNotLoggedInTest extends MediaWikiTestCase
{
    public function testConstruction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
