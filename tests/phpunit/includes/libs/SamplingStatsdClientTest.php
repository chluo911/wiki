<?php

use Liuggio\StatsdClient\Entity\StatsdData;

class SamplingStatsdClientTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider samplingDataProvider
     */
    public function testSampling($data, $sampleRate, $seed, $expectWrite)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function samplingDataProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSetSamplingRates()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
