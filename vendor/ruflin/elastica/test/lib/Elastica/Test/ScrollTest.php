<?php

namespace Elastica\Test;

use Elastica\Document;
use Elastica\Query;
use Elastica\ResultSet;
use Elastica\Scroll;
use Elastica\Search;

class ScrollTest extends Base
{
    /**
     * Full foreach test.
     *
     * @group functional
     */
    public function testForeach()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Scroll must not overwrite options.
     *
     * @group functional
     */
    public function testSearchRevert()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * index: 11 docs
     * query size: 5.
     *
     * @return Search
     */
    private function _prepareSearch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
