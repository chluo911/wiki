<?php
/**
 * @author Antoine Musso
 * @copyright Copyright © 2013, Antoine Musso
 * @copyright Copyright © 2013, Wikimedia Foundation Inc.
 * @file
 */

class MWExceptionHandlerTest extends MediaWikiTestCase
{

    /**
     * @covers MWExceptionHandler::getRedactedTrace
     */
    public function testGetRedactedTrace()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Helper function for testExpandArgumentsInCall
     *
     * Pass it an object and an array, and something by reference :-)
     *
     * @throws Exception
     */
    protected static function helperThrowAnException($a, $b, &$c)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
