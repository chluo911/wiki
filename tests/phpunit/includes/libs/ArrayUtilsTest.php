<?php
/**
 * Test class for ArrayUtils class
 *
 * @group Database
 */

class ArrayUtilsTest extends PHPUnit_Framework_TestCase
{
    private $search;

    /**
     * @covers ArrayUtils::findLowerBound
     * @dataProvider provideFindLowerBound
     */
    public function testFindLowerBound(
        $valueCallback,
        $valueCount,
        $comparisonCallback,
        $target,
        $expected
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideFindLowerBound()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ArrayUtils::arrayDiffAssocRecursive
     * @dataProvider provideArrayDiffAssocRecursive
     */
    public function testArrayDiffAssocRecursive($expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideArrayDiffAssocRecursive()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
