<?php

namespace Elastica\Test\Exception;

use Elastica\Document;
use Elastica\Exception\PartialShardFailureException;
use Elastica\JSON;
use Elastica\Query;
use Elastica\ResultSet;

class PartialShardFailureExceptionTest extends AbstractExceptionTest
{
    /**
     * @group functional
     */
    public function testPartialFailure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
