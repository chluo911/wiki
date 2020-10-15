<?php

/**
 * Test making sure the demo export xml is valid.
 * This is NOT a unit test
 *
 * @group Dump
 * @group large
 */
class ExportDemoTest extends DumpTestCase
{
    public function testExportDemo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
