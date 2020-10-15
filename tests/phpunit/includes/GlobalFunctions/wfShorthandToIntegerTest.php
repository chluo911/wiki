<?php

/**
 * @group GlobalFunctions
 * @covers ::wfShorthandToInteger
 */
class WfShorthandToIntegerTest extends MediaWikiTestCase
{
    /**
     * @dataProvider provideABunchOfShorthands
     */
    public function testWfShorthandToInteger($input, $output, $description)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideABunchOfShorthands()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
