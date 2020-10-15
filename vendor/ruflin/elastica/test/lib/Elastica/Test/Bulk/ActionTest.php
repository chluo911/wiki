<?php

namespace Elastica\Test\Bulk;

use Elastica\Bulk\Action;
use Elastica\Index;
use Elastica\Test\Base as BaseTest;
use Elastica\Type;

class ActionTest extends BaseTest
{
    /**
     * @group unit
     */
    public function testAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
