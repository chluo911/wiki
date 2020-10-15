<?php

namespace Elastica\Test\Query;

use Elastica\Document;
use Elastica\Query\DisMax;
use Elastica\Query\Ids;
use Elastica\Query\QueryString;
use Elastica\Test\Base as BaseTest;

class DisMaxTest extends BaseTest
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

    /**
     * @group functional
     */
    public function testQuery()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
