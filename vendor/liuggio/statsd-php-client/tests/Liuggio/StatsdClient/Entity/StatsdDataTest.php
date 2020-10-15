<?php

namespace Liuggio\StatsdClient\Entity;

use Liuggio\StatsdClient\Entity\StatsdData;


class StatsdDataTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMessage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
