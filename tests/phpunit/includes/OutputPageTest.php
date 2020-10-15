<?php

/**
 *
 * @author Matthew Flaschen
 *
 * @group Output
 *
 * @todo factor tests in this class into providers and test methods
 *
 */
class OutputPageTest extends MediaWikiTestCase
{
    const SCREEN_MEDIA_QUERY = 'screen and (min-width: 982px)';
    const SCREEN_ONLY_MEDIA_QUERY = 'only screen and (min-width: 982px)';

    /**
     * Tests a particular case of transformCssMedia, using the given input, globals,
     * expected return, and message
     *
     * Asserts that $expectedReturn is returned.
     *
     * options['printableQuery'] - value of query string for printable, or omitted for none
     * options['handheldQuery'] - value of query string for handheld, or omitted for none
     * options['media'] - passed into the method under the same name
     * options['expectedReturn'] - expected return value
     * options['message'] - PHPUnit message for assertion
     *
     * @param array $args Key-value array of arguments as shown above
     */
    protected function assertTransformCssMediaCase($args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests print requests
     * @covers OutputPage::transformCssMedia
     */
    public function testPrintRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests screen requests, without either query parameter set
     * @covers OutputPage::transformCssMedia
     */
    public function testScreenRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests handheld behavior
     * @covers OutputPage::transformCssMedia
     */
    public function testHandheld()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideMakeResourceLoaderLink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * See ResourceLoaderClientHtmlTest for full coverage.
     *
     * @dataProvider provideMakeResourceLoaderLink
     * @covers OutputPage::makeResourceLoaderLink
     */
    public function testMakeResourceLoaderLink($args, $expectedHtml)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideVaryHeaders
     * @covers OutputPage::addVaryHeader
     * @covers OutputPage::getVaryHeader
     * @covers OutputPage::getKeyHeader
     */
    public function testVaryHeaders($calls, $vary, $key)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideVaryHeaders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers OutputPage::haveCacheVaryCookies
     */
    public function testHaveCacheVaryCookies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * MessageBlobStore that doesn't do anything
 */
class NullMessageBlobStore extends MessageBlobStore
{
    public function get(ResourceLoader $resourceLoader, $modules, $lang)
    {
        return [];
    }

    public function insertMessageBlob($name, ResourceLoaderModule $module, $lang)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function updateModule($name, ResourceLoaderModule $module, $lang)
    {
    }

    public function updateMessage($key)
    {
    }

    public function clear()
    {
    }
}
