<?php

namespace Elastica\Test\Query;

use Elastica\Document;
use Elastica\Query;
use Elastica\Test\Base as BaseTest;

class HighlightTest extends BaseTest
{
    /**
     * @group functional
     */
    public function testHightlightSearch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
