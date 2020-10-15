<?php

namespace Elastica\Test\Query;

use Elastica\Document;
use Elastica\Query;
use Elastica\Query\HasChild;
use Elastica\Query\Match;
use Elastica\Query\MatchAll;
use Elastica\Test\Base as BaseTest;
use Elastica\Type\Mapping;

class HasChildTest extends BaseTest
{
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
     * @group unit
     */
    public function testSetScope()
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
    public function testTypeInsideHasChildSearch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function _getTestIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
