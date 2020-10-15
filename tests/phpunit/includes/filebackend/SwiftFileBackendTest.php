<?php

/**
 * @group FileRepo
 * @group FileBackend
 * @group medium
 */
class SwiftFileBackendTest extends MediaWikiTestCase
{
    /** @var TestingAccessWrapper Proxy to SwiftFileBackend */
    private $backend;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provider_testSanitizeHdrs
     * @covers SwiftFileBackend::sanitizeHdrs
     * @covers SwiftFileBackend::getCustomHeaders
     */
    public function testSanitizeHdrs($raw, $sanitized)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provider_testSanitizeHdrs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provider_testGetMetadataHeaders
     * @covers SwiftFileBackend::getMetadataHeaders
     */
    public function testGetMetadataHeaders($raw, $sanitized)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provider_testGetMetadataHeaders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provider_testGetMetadata
     * @covers SwiftFileBackend::getMetadata
     */
    public function testGetMetadata($raw, $sanitized)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provider_testGetMetadata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
