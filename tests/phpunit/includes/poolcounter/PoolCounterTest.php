<?php

// We will use this class with getMockForAbstractClass to create a concrete mock class.
// That call will die if the contructor is not public, unless we use disableOriginalConstructor(),
// in which case we could not test the constructor.
abstract class PoolCounterAbstractMock extends PoolCounter
{
    public function __construct()
    {
        call_user_func_array('parent::__construct', func_get_args());
    }
}

class PoolCounterTest extends MediaWikiTestCase
{
    public function testConstruct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testConstructWithSlots()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHashKeyIntoSlots()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
