<?php

/**
 * @group API
 * @group Database
 * @group medium
 *
 * @covers ApiBlock
 */
class ApiBlockTest extends ApiTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getTokens()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This test has probably always been broken and use an invalid token
     * Bug tracking brokenness is https://phabricator.wikimedia.org/T37646
     *
     * Root cause is https://gerrit.wikimedia.org/r/3434
     * Which made the Block/Unblock API to actually verify the token
     * previously always considered valid (T36212).
     */
    public function testMakeNormalBlock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UsageException
     * @expectedExceptionMessage The token parameter must be set
     */
    public function testBlockingActionWithNoToken()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
