<?php

namespace lib\Elastica\Test;

use Elastica\ScriptFile as LegacyScriptFile;
use Elastica\Test\Base as BaseTest;

class LegacyScriptFileTest extends BaseTest
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
