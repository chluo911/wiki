<?php

namespace Elastica\Test\Query;

use Elastica\Query\Prefix;
use Elastica\Test\Base as BaseTest;

class PrefixTest extends BaseTest
{
    /**
     * @group unit
     */
    public function testToArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
