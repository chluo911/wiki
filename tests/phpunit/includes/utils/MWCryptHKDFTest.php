<?php
/**
 *
 * @group HKDF
 */

class MWCryptHKDFTest extends MediaWikiTestCase
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
     * Test basic usage works
     */
    public function testGenerate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providerRfc5869
     */
    public function testRfc5869($hash, $ikm, $salt, $info, $L, $prk, $okm)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test vectors from Appendix A on https://tools.ietf.org/html/rfc5869
     */
    public static function providerRfc5869()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
