<?php

class PhpunitTestRecorder extends TestRecorder
{
    private $testCase;

    public function setTestCase(PHPUnit_Framework_TestCase $testCase)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Mark a test skipped
     */
    public function skipped($test, $reason)
    {
        $this->testCase->markTestSkipped("SKIPPED: $reason");
    }
}
