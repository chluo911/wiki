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

class IPTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers IP::isIPAddress
     * @dataProvider provideInvalidIPs
     */
    public function isNotIPAddress($val, $desc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide a list of things that aren't IP addresses
     */
    public function provideInvalidIPs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isIPAddress
     */
    public function testisIPAddress()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isIPv6
     */
    public function testisIPv6()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isIPv4
     * @dataProvider provideInvalidIPv4Addresses
     */
    public function testisNotIPv4($bogusIP, $desc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideInvalidIPv4Addresses()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isIPv4
     * @dataProvider provideValidIPv4Address
     */
    public function testIsIPv4($ip, $desc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide some IPv4 addresses and ranges
     */
    public function provideValidIPv4Address()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isValid
     */
    public function testValidIPs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isValid
     */
    public function testInvalidIPs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide some valid IP blocks
     */
    public function provideValidBlocks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isValidBlock
     * @dataProvider provideValidBlocks
     */
    public function testValidBlocks($block)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isValidBlock
     * @dataProvider provideInvalidBlocks
     */
    public function testInvalidBlocks($invalid)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideInvalidBlocks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::sanitizeIP
     * @dataProvider provideSanitizeIP
     */
    public function testSanitizeIP($expected, $input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for IP::testSanitizeIP()
     */
    public static function provideSanitizeIP()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::toHex
     * @dataProvider provideToHex
     */
    public function testToHex($expected, $input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for IP::testToHex()
     */
    public static function provideToHex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::isPublic
     * @dataProvider provideIsPublic
     */
    public function testIsPublic($expected, $input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for IP::testIsPublic()
     */
    public static function provideIsPublic()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // Private wrapper used to test CIDR Parsing.
    private function assertFalseCIDR($CIDR, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // Private wrapper to test network shifting using only dot notation
    private function assertNet($expected, $CIDR)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::hexToQuad
     * @dataProvider provideIPsAndHexes
     */
    public function testHexToQuad($ip, $hex)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide some IP addresses and their equivalent hex representations
     */
    public function provideIPsandHexes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::hexToOctet
     * @dataProvider provideOctetsAndHexes
     */
    public function testHexToOctet($octet, $hex)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide some hex and octet representations of the same IPs
     */
    public function provideOctetsAndHexes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * IP::parseCIDR() returns an array containing a signed IP address
     * representing the network mask and the bit mask.
     * @covers IP::parseCIDR
     */
    public function testCIDRParsing()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::canonicalize
     */
    public function testIPCanonicalizeOnValidIp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IP::canonicalize
     */
    public function testIPCanonicalizeMappedAddress()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Issues there are most probably from IP::toHex() or IP::parseRange()
     * @covers IP::isInRange
     * @dataProvider provideIPsAndRanges
     */
    public function testIPIsInRange($expected, $addr, $range, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** Provider for testIPIsInRange() */
    public static function provideIPsAndRanges()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test for IP::splitHostAndPort().
     * @dataProvider provideSplitHostAndPort
     */
    public function testSplitHostAndPort($expected, $input, $description)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for IP::splitHostAndPort()
     */
    public static function provideSplitHostAndPort()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test for IP::combineHostAndPort()
     * @dataProvider provideCombineHostAndPort
     */
    public function testCombineHostAndPort($expected, $input, $description)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for IP::combineHostAndPort()
     */
    public static function provideCombineHostAndPort()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test for IP::sanitizeRange()
     * @dataProvider provideIPCIDRs
     */
    public function testSanitizeRange($input, $expected, $description)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for IP::testSanitizeRange()
     */
    public static function provideIPCIDRs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test for IP::prettifyIP()
     * @dataProvider provideIPsToPrettify
     */
    public function testPrettifyIP($ip, $prettified)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for IP::testPrettifyIP()
     */
    public static function provideIPsToPrettify()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
