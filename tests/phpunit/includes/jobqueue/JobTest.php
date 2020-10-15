<?php

/**
 * @author Addshore
 */
class JobTest extends MediaWikiTestCase
{

    /**
     * @dataProvider provideTestToString
     *
     * @param Job $job
     * @param string $expected
     *
     * @covers Job::toString
     */
    public function testToString($job, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideTestToString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getMockJob($params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
