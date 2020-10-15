<?php

namespace Elastica\Test\Filter;

use Elastica\Test\DeprecatedClassBase as BaseTest;

class AbstractGeoShapeTest extends BaseTest
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
}
