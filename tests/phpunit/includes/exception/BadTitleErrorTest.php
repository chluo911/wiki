<?php
/**
 * @covers BadTitleError
 * @author Addshore
 */
class BadTitleErrorTest extends MediaWikiTestCase
{
    public function testExceptionSetsStatusCode()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function getMockWgOut()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
