<?php

namespace Elastica\Test\Filter;

use Elastica\Document;
use Elastica\Filter\Nested;
use Elastica\Filter\Terms;
use Elastica\Search;
use Elastica\Test\Base as BaseTest;
use Elastica\Type\Mapping;

class NestedFilterWithSetFilterTest extends BaseTest
{
    protected function _getIndexForTest()
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

    /**
     * @group functional
     */
    public function testShouldReturnTheRightNumberOfResult()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
