<?php

/**
 * @group API
 * @group Database
 * @group medium
 *
 * @covers ApiUnblock
 */
class ApiUnblockTest extends ApiTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UsageException
     */
    public function testWithNoToken()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
