<?php

namespace Elastica\Test\Query;

use Elastica\Document;
use Elastica\Index;
use Elastica\Query\QueryString;
use Elastica\Test\Base as BaseTest;
use Elastica\Type;
use Elastica\Util;

class EscapeStringTest extends BaseTest
{
    /**
     * @group functional
     */
    public function testSearch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
