<?php

namespace Elastica\Test\Filter;

use Elastica\Document;
use Elastica\Filter\GeoPolygon;
use Elastica\Query;
use Elastica\Query\MatchAll;
use Elastica\Test\DeprecatedClassBase as BaseTest;

class GeoPolygonTest extends BaseTest
{
    /**
     * @group unit
     */
    public function testDeprecated()
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
    public function testGeoPoint()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
