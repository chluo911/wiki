<?php

/**
 * @group Media
 */
class IPTCTest extends MediaWikiTestCase
{

    /**
     * @covers IPTC::getCharset
     */
    public function testRecognizeUtf8()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IPTC::parse
     */
    public function testIPTCParseNoCharset88591()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IPTC::parse
     */
    public function testIPTCParseNoCharset88591b()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Same as testIPTCParseNoCharset88591b, but forcing the charset to utf-8.
     * What should happen is the first "\xC3\xC3" should be dropped as invalid,
     * leaving \xC3\xB8, which is ø
     * @covers IPTC::parse
     */
    public function testIPTCParseForcedUTFButInvalid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IPTC::parse
     */
    public function testIPTCParseNoCharsetUTF8()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Testing something that has 2 values for keyword
     * @covers IPTC::parse
     */
    public function testIPTCParseMulti()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers IPTC::parse
     */
    public function testIPTCParseUTF8()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
