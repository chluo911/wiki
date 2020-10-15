<?php

namespace Elastica\Test\Index;

use Elastica\Test\Base as BaseTest;

class StatsTest extends BaseTest
{
    /**
     * @group functional
     */
    public function testGetSettings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
