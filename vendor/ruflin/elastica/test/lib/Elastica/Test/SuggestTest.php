<?php

namespace Elastica\Test;

use Elastica\Exception\NotImplementedException;
use Elastica\Filter\BoolFilter;
use Elastica\Suggest;
use Elastica\Test\Base as BaseTest;

class SuggestTest extends BaseTest
{
    /**
     * Create self test.
     *
     * @group functional
     */
    public function testCreateSelf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create with suggest test.
     *
     * @group functional
     */
    public function testCreateWithSuggest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create with non suggest test.
     *
     * @group functional
     */
    public function testCreateWithNonSuggest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
