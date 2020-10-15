<?php

/**
 * @group API
 * @group Database
 * @group medium
 * @covers ApiQuery
 */
class ApiQueryTest extends ApiTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTitlesGetNormalized()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTitlesAreRejectedIfInvalid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test the ApiBase::titlePartToKey function
     *
     * @param string $titlePart
     * @param int $namespace
     * @param string $expected
     * @param string $expectException
     * @dataProvider provideTestTitlePartToKey
     */
    public function testTitlePartToKey($titlePart, $namespace, $expected, $expectException)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideTestTitlePartToKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test if all classes in the query module manager exists
     */
    public function testClassNamesInModuleManager()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
