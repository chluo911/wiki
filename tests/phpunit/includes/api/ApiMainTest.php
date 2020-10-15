<?php

/**
 * @group API
 * @group medium
 *
 * @covers ApiMain
 */
class ApiMainTest extends ApiTestCase
{

    /**
     * Test that the API will accept a FauxRequest and execute.
     */
    public function testApi()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideAssert()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests the assert={user|bot} functionality
     *
     * @covers ApiMain::checkAsserts
     * @dataProvider provideAssert
     * @param bool $registered
     * @param array $rights
     * @param string $assert
     * @param string|bool $error False if no error expected
     */
    public function testAssert($registered, $rights, $assert, $error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests the assertuser= functionality
     *
     * @covers ApiMain::checkAsserts
     */
    public function testAssertUser()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test if all classes in the main module manager exists
     */
    public function testClassNamesInModuleManager()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test HTTP precondition headers
     *
     * @covers ApiMain::checkConditionalRequestHeaders
     * @dataProvider provideCheckConditionalRequestHeaders
     * @param array $headers HTTP headers
     * @param array $conditions Return data for ApiBase::getConditionalRequestData
     * @param int $status Expected response status
     * @param bool $post Request is a POST
     */
    public function testCheckConditionalRequestHeaders(
        $headers,
        $conditions,
        $status,
        $post = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCheckConditionalRequestHeaders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test conditional headers output
     * @dataProvider provideConditionalRequestHeadersOutput
     * @param array $conditions Return data for ApiBase::getConditionalRequestData
     * @param array $headers Expected output headers
     * @param bool $isError $isError flag
     * @param bool $post Request is a POST
     */
    public function testConditionalRequestHeadersOutput(
        $conditions,
        $headers,
        $isError = false,
        $post = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideConditionalRequestHeadersOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ApiMain::lacksSameOriginSecurity
     */
    public function testLacksSameOriginSecurity()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
