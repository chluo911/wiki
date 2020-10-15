<?php
/**
 * Tests for IP validity functions.
 *
 * Ported from /t/inc/IP.t by avar.
 *
 * @group IP
 * @todo Test methods in this call should be split into a method and a
 * dataprovider.
 */

class AvroValidatorTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getErrorsProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider getErrorsProvider
     */
    public function testGetErrors($message, $schema, $datum, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
