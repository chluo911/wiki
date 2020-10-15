<?php

class SpecialSearchText extends \PHPUnit_Framework_TestCase
{
    public function testSubPageRedirect()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
