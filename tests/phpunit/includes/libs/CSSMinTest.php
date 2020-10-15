<?php
/**
 * This file test the CSSMin library shipped with Mediawiki.
 *
 * @author Timo Tijhof
 */

class CSSMinTest extends MediaWikiTestCase
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
     * @dataProvider provideMinifyCases
     * @covers CSSMin::minify
     */
    public function testMinify($code, $expectedOutput)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideMinifyCases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This tests funky parameters to CSSMin::remap. testRemapRemapping tests
     * the basic functionality.
     *
     * @dataProvider provideRemapCases
     * @covers CSSMin::remap
     */
    public function testRemap($message, $params, $expectedOutput)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideRemapCases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This tests basic functionality of CSSMin::remap. testRemapRemapping tests funky parameters.
     *
     * @dataProvider provideRemapRemappingCases
     * @covers CSSMin::remap
     */
    public function testRemapRemapping($message, $input, $expectedOutput)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideIsRemoteUrl()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideIsRemoteUrl
     * @cover CSSMin::isRemoteUrl
     */
    public function testIsRemoteUrl($expect, $url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideIsLocalUrls()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideIsLocalUrls
     * @cover CSSMin::isLocalUrl
     */
    public function testIsLocalUrl($expect, $url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideRemapRemappingCases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This tests basic functionality of CSSMin::buildUrlValue.
     *
     * @dataProvider provideBuildUrlValueCases
     * @covers CSSMin::buildUrlValue
     */
    public function testBuildUrlValue($message, $input, $expectedOutput)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideBuildUrlValueCases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Seperated because they are currently broken (bug 35492)
     *
     * @group Broken
     * @dataProvider provideStringCases
     * @covers CSSMin::remap
     */
    public function testMinifyWithCSSStringValues($code, $expectedOutput)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideStringCases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class CSSMinTestable extends CSSMin
{
    // Make some protected methods public
    public static function isRemoteUrl($maybeUrl)
    {
        return parent::isRemoteUrl($maybeUrl);
    }
    public static function isLocalUrl($maybeUrl)
    {
        return parent::isLocalUrl($maybeUrl);
    }
}
