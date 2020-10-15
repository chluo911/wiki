<?php

/**
 * The function only need a string parameter and might react to IIS7.0
 *
 * @group GlobalFunctions
 * @covers ::wfUrlencode
 */
class WfUrlencodeTest extends MediaWikiTestCase
{
    # ### TESTS ##############################################################

    /**
     * @dataProvider provideURLS
     */
    public function testEncodingUrlWith($input, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideURLS
     */
    public function testEncodingUrlWithMicrosoftIis7($input, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # ### HELPERS #############################################################

    /**
     * Internal helper that actually run the test.
     * Called by the public methods testEncodingUrlWith...()
     *
     */
    private function verifyEncodingFor($server, $input, $expectations)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Interprets the provider array. Return expected value depending
     * the HTTP server name.
     */
    private function extractExpect($server, $expectations)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # ### PROVIDERS ###########################################################

    /**
     * Format is either:
     *   [ 'input', 'expected' ];
     * Or:
     *   [ 'input',
     *       [ 'Apache', 'expected' ],
     *       [ 'Microsoft-IIS/7', 'expected' ],
     *   ],
     * If you want to add other HTTP server name, you will have to add a new
     * testing method much like the testEncodingUrlWith() method above.
     */
    public static function provideURLS()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
