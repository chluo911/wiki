<?php

/**
 * @author Addshore
 *
 * @group Diff
 */
class ArrayDiffFormatterTest extends MediaWikiTestCase
{

    /**
     * @param Diff $input
     * @param array $expectedOutput
     * @dataProvider provideTestFormat
     * @covers ArrayDiffFormatter::format
     */
    public function testFormat($input, $expectedOutput)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function getMockDiff($edits)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function getMockDiffOp($type = null, $orig = [], $closing = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideTestFormat()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
