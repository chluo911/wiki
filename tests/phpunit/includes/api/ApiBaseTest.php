<?php

/**
 * @group API
 * @group Database
 * @group medium
 */
class ApiBaseTest extends ApiTestCase
{

    /**
     * @covers ApiBase::requireOnlyOneParameter
     */
    public function testRequireOnlyOneParameterDefault()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UsageException
     * @covers ApiBase::requireOnlyOneParameter
     */
    public function testRequireOnlyOneParameterZero()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UsageException
     * @covers ApiBase::requireOnlyOneParameter
     */
    public function testRequireOnlyOneParameterTrue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetParameterFromSettings
     * @param string|null $input
     * @param array $paramSettings
     * @param mixed $expected
     * @param string[] $warnings
     */
    public function testGetParameterFromSettings($input, $paramSettings, $expected, $warnings)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetParameterFromSettings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
