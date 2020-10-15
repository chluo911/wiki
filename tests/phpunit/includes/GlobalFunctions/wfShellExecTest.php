<?php

/**
 * @group GlobalFunctions
 * @covers ::wfShellExec
 */
class WfShellExecTest extends MediaWikiTestCase
{
    public function testBug67870()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
