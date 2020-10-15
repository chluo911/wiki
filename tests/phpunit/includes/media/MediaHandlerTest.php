<?php

/**
 * @group Media
 */
class MediaHandlerTest extends MediaWikiTestCase
{

    /**
     * @covers MediaHandler::fitBoxWidth
     *
     * @dataProvider provideTestFitBoxWidth
     */
    public function testFitBoxWidth($width, $height, $max, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideTestFitBoxWidth()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate single test cases by combining the dimensions and tests contents
     *
     * It creates:
     * [$width, $height, $max, $expected],
     * [$width, $height, $max2, $expected2], ...
     * out of parameters:
     * $width, $height, { $max => $expected, $max2 => $expected2, ... }
     *
     * @param int $width
     * @param int $height
     * @param array $tests associative array of $max => $expected values
     * @return array
     */
    private static function generateTestFitBoxWidthData($width, $height, $tests)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
