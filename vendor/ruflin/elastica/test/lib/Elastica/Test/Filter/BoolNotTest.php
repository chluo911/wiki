<?php

namespace Elastica\Test\Filter;

use Elastica\Filter\BoolNot;
use Elastica\Filter\Exists;
use Elastica\Filter\Ids;
use Elastica\Test\DeprecatedClassBase as BaseTest;

class BoolNotTest extends BaseTest
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
