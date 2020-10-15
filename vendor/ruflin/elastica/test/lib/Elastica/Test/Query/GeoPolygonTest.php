<?php

namespace Elastica\Test\Query;

use Elastica\Document;
use Elastica\Query;
use Elastica\Query\GeoPolygon;
use Elastica\Query\MatchAll;
use Elastica\Test\Base as BaseTest;

class GeoPolygonTest extends BaseTest
{
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
