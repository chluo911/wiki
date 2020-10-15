<?php

/**
 * @group Media
 * @covers XMPReader
 */
class XMPTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Put XMP in, compare what comes out...
     *
     * @param string $xmp The actual xml data.
     * @param array $expected Expected result of parsing the xmp.
     * @param string $info Short sentence on what's being tested.
     *
     * @throws Exception
     * @dataProvider provideXMPParse
     *
     * @covers XMPReader::parse
     */
    public function testXMPParse($xmp, $expected, $info)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideXMPParse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** Test ExtendedXMP block support. (Used when the XMP has to be split
     * over multiple jpeg segments, due to 64k size limit on jpeg segments.
     *
     * @todo This is based on what the standard says. Need to find a real
     * world example file to double check the support for this is right.
     *
     * @covers XMPReader::parseExtended
     */
    public function testExtendedXMP()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This test has an extended XMP block with a wrong guid (md5sum)
     * and thus should only return the StandardXMP, not the ExtendedXMP.
     *
     * @covers XMPReader::parseExtended
     */
    public function testExtendedXMPWithWrongGUID()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Have a high offset to simulate a missing packet,
     * which should cause it to ignore the ExtendedXMP packet.
     *
     * @covers XMPReader::parseExtended
     */
    public function testExtendedXMPMissingPacket()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test for multi-section, hostile XML
     * @covers XMPReader::checkParseSafety
     */
    public function testCheckParseSafety()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
