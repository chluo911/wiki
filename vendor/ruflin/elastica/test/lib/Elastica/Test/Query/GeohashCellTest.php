<?php

namespace Elastica\Test\Query;

use Elastica\Document;
use Elastica\Query;
use Elastica\Query\GeohashCell;
use Elastica\Test\Base as BaseTest;
use Elastica\Type\Mapping;

class GeohashCellTest extends BaseTest
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
