<?php

/**
 * @group Http
 */
class HttpTest extends MediaWikiTestCase
{
    /**
     * @dataProvider cookieDomains
     * @covers Cookie::validateCookieDomain
     */
    public function testValidateCookieDomain($expected, $domain, $origin = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function cookieDomains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test Http::isValidURI()
     * @bug 27854 : Http::isValidURI is too lax
     * @dataProvider provideURI
     * @covers Http::isValidURI
     */
    public function testIsValidUri($expect, $URI, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Http::getProxy
     */
    public function testGetProxy()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Feeds URI to test a long regular expression in Http::isValidURI
     */
    public static function provideURI()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Warning:
     *
     * These tests are for code that makes use of an artifact of how CURL
     * handles header reporting on redirect pages, and will need to be
     * rewritten when bug 29232 is taken care of (high-level handling of
     * HTTP redirects).
     */
    public function testRelativeRedirections()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Constant values are from PHP 5.3.28 using cURL 7.24.0
     * @see http://php.net/manual/en/curl.constants.php
     *
     * All constant values are present so that developers don’t need to remember
     * to add them if added at a later date. The commented out constants were
     * not found anywhere in the MediaWiki core code.
     *
     * Commented out constants that were not available in:
     * HipHop VM 3.3.0 (rel)
     * Compiler: heads/master-0-g08810d920dfff59e0774cf2d651f92f13a637175
     * Repo schema: 3214fc2c684a4520485f715ee45f33f2182324b1
     * Extension API: 20140829
     *
     * Commented out constants that were removed in PHP 5.6.0
     *
     * @covers CurlHttpRequest::execute
     */
    public function provideCurlConstants()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Added this test based on an issue experienced with HHVM 3.3.0-dev
     * where it did not define a cURL constant.
     *
     * @bug 70570
     * @dataProvider provideCurlConstants
     */
    public function testCurlConstants($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Class to let us overwrite MWHttpRequest respHeaders variable
 */
class MWHttpRequestTester extends MWHttpRequest
{
    // function derived from the MWHttpRequest factory function but
    // returns appropriate tester class here
    public static function factory($url, $options = null, $caller = __METHOD__)
    {
        if (!Http::$httpEngine) {
            Http::$httpEngine = function_exists('curl_init') ? 'curl' : 'php';
        } elseif (Http::$httpEngine == 'curl' && !function_exists('curl_init')) {
            throw new MWException(__METHOD__ . ': curl (http://php.net/curl) is not installed, but' .
                'Http::$httpEngine is set to "curl"');
        }

        switch (Http::$httpEngine) {
            case 'curl':
                return new CurlHttpRequestTester($url, $options, $caller);
            case 'php':
                if (!wfIniGetBool('allow_url_fopen')) {
                    throw new MWException(__METHOD__ .
                        ': allow_url_fopen needs to be enabled for pure PHP HTTP requests to work. '
                            . 'If possible, curl should be used instead. See http://php.net/curl.');
                }

                return new PhpHttpRequestTester($url, $options, $caller);
            default:
        }
    }
}

class CurlHttpRequestTester extends CurlHttpRequest
{
    public function setRespHeaders($name, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class PhpHttpRequestTester extends PhpHttpRequest
{
    public function setRespHeaders($name, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
