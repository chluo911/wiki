<?php

namespace Elastica\Test;

use Elastica\Document;
use Elastica\Query;
use Elastica\ResultSet;
use Elastica\ScanAndScroll;
use Elastica\Search;
use Elastica\Test\Base as BaseTest;

class ScanAndScrollTest extends BaseTest
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
     * query size revert options.
     *
     * @group functional
     */
    public function testQuerySizeRevert()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * index: 12 docs, 2 shards.
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
