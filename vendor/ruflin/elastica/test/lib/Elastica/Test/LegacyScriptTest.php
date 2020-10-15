<?php

namespace Elastica\Test;

use Elastica\Script as LegacyScript;
use Elastica\Test\Base as BaseTest;

class LegacyScriptTest extends BaseTest
{
    /**
     * @group unit
     */
    public function testParent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
