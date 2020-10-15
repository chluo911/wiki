<?php
/**
 * @author Antoine Musso
 * @copyright Copyright © 2013, Antoine Musso
 * @copyright Copyright © 2013, Wikimedia Foundation Inc.
 * @file
 */

class MWExceptionTest extends MediaWikiTestCase
{

    /**
     * @expectedException MWException
     */
    public function testMwexceptionThrowing()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideTextUseOutputPage
     * @covers MWException::useOutputPage
     */
    public function testUseOutputPage($expected, $langObj, $wgFullyInitialised, $wgOut)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideTextUseOutputPage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function getMockLanguage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideUseMessageCache
     * @covers MWException::useMessageCache
     */
    public function testUseMessageCache($expected, $langObj)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideUseMessageCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MWException::isLoggable
     */
    public function testIsLogable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideRunHooks
     * @covers MWException::runHooks
     */
    public function testRunHooks($wgExceptionHooks, $name, $args, $expectedReturn)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideRunHooks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Used in conjunction with provideRunHooks and testRunHooks as a mock callback for a hook
     */
    public static function mockHook()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideIsCommandLine
     * @covers MWException::isCommandLine
     */
    public function testisCommandLine($expected, $wgCommandLineMode)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideIsCommandLine()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify the exception classes are JSON serializabe.
     *
     * @covers MWExceptionHandler::jsonSerializeException
     * @dataProvider provideExceptionClasses
     */
    public function testJsonSerializeExceptions($exception_class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideExceptionClasses()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Lame JSON schema validation.
     *
     * @covers MWExceptionHandler::jsonSerializeException
     *
     * @param string $expectedKeyType Type expected as returned by gettype()
     * @param string $exClass An exception class (ie: Exception, MWException)
     * @param string $key Name of the key to validate in the serialized JSON
     * @dataProvider provideJsonSerializedKeys
     */
    public function testJsonserializeexceptionKeys($expectedKeyType, $exClass, $key)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns test cases: exception class, key name, gettype()
     */
    public static function provideJsonSerializedKeys()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given wgLogExceptionBacktrace is true
     * then serialized exception SHOULD have a backtrace
     *
     * @covers MWExceptionHandler::jsonSerializeException
     */
    public function testJsonserializeexceptionBacktracingEnabled()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given wgLogExceptionBacktrace is false
     * then serialized exception SHOULD NOT have a backtrace
     *
     * @covers MWExceptionHandler::jsonSerializeException
     */
    public function testJsonserializeexceptionBacktracingDisabled()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
