<?php

namespace Elastica\Test\Exception\Connection;

use Elastica\Test\Exception\AbstractExceptionTest;

class GuzzleExceptionTest extends AbstractExceptionTest
{
    public static function setUpBeforeClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
