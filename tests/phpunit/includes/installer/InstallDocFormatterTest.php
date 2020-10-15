<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class InstallDocFormatterTest extends MediaWikiTestCase
{
    /**
     * @covers InstallDocFormatter::format
     * @dataProvider provideDocFormattingTests
     */
    public function testFormat($expected, $unformattedText, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for testFormat()
     */
    public static function provideDocFormattingTests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
