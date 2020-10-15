<?php

/**
 * @covers Licenses
 */
class LicensesTest extends MediaWikiTestCase
{
    public function testLicenses()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
