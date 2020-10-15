<?php
/**
 * PHP Unit tests for MWMessagePack
 * @covers MWMessagePack
 */
class MWMessagePackTest extends PHPUnit_Framework_TestCase
{

    /**
     * Provides test cases for MWMessagePackTest::testMessagePack
     *
     * Returns an array of test cases. Each case is an array of (type, value,
     * expected encoding as hex string). The expected values were generated
     * using <https://github.com/msgpack/msgpack-php>, which includes a
     * serialization function.
     */
    public static function providePacks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify that values are serialized correctly.
     * @covers MWMessagePack::pack
     * @dataProvider providePacks
     */
    public function testPack($type, $value, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
