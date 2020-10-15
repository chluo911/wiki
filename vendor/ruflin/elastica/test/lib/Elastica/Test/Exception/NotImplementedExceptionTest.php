<?php

namespace Elastica\Test\Exception;

use Elastica\Exception\NotImplementedException;

class NotImplementedExceptionTest extends AbstractExceptionTest
{
    /**
     * @group unit
     */
    public function testInstance()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
