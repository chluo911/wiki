<?php

namespace Elastica\Test;

/**
 * Base test for test deprecated classes. Supress deprecated error during run test case.
 *
 * @author Evgeniy Sokolov <ewgraf@gmail.com>
 */
class DeprecatedClassBase extends Base
{
    private $isDeprecatedVisible = false;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
