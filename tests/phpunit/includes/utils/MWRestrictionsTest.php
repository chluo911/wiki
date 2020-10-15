<?php
class MWRestrictionsTest extends PHPUnit_Framework_TestCase
{
    protected static $restrictionsForChecks;

    public static function setUpBeforeClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MWRestrictions::newDefault
     * @covers MWRestrictions::__construct
     */
    public function testNewDefault()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MWRestrictions::newFromArray
     * @covers MWRestrictions::__construct
     * @covers MWRestrictions::loadFromArray
     * @covers MWRestrictions::toArray
     * @dataProvider provideArray
     * @param array $data
     * @param bool|InvalidArgumentException $expect True if the call succeeds,
     *  otherwise the exception that should be thrown.
     */
    public function testArray($data, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MWRestrictions::newFromJson
     * @covers MWRestrictions::__construct
     * @covers MWRestrictions::loadFromArray
     * @covers MWRestrictions::toJson
     * @covers MWRestrictions::__toString
     * @dataProvider provideJson
     * @param string $json
     * @param array|InvalidArgumentException $expect
     */
    public function testJson($json, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideJson()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MWRestrictions::checkIP
     * @dataProvider provideCheckIP
     * @param string $ip
     * @param bool $pass
     */
    public function testCheckIP($ip, $pass)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCheckIP()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MWRestrictions::check
     * @dataProvider provideCheck
     * @param WebRequest $request
     * @param Status $expect
     */
    public function testCheck($request, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideCheck()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
