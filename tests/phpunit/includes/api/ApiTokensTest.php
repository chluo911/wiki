<?php

/**
 * @group API
 * @group Database
 * @group medium
 *
 * @covers ApiTokens
 */
class ApiTokensTest extends ApiTestCase
{
    public function testGettingToken()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function runTokenTest(TestUser $user)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
