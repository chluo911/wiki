<?php

namespace Elastica\Test\Query;

use Elastica\Query\AbstractGeoShape;
use Elastica\Query\BoolQuery;
use Elastica\Query\GeoShapePreIndexed;
use Elastica\Test\Base as BaseTest;

class GeoShapePreIndexedTest extends BaseTest
{
    /**
     * @group functional
     */
    public function testGeoProvided()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     */
    public function testSetRelation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
