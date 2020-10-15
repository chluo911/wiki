<?php

namespace Liuggio\StatsdClient;

use Liuggio\StatsdClient\StatsdClient;
use Liuggio\StatsdClient\Factory\StatsdDataFactory;
//use Liuggio\StatsdClient\Sender\SocketSender;


class ReadmeTest extends \PHPUnit_Framework_TestCase
{
    public function testFullUsageWithObject() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }



    public function testFullUsageArray() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    private function mockSender() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
