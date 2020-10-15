<?php

/**
 * @todo Tests covering decodeCharReferences can be refactored into a single
 * method and dataprovider.
 */
class SanitizerTest extends MediaWikiTestCase
{
    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Sanitizer::decodeCharReferences
     */
    public function testDecodeNamedEntities()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Sanitizer::decodeCharReferences
     */
    public function testDecodeNumericEntities()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Sanitizer::decodeCharReferences
     */
    public function testDecodeMixedEntities()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Sanitizer::decodeCharReferences
     */
    public function testDecodeMixedComplexEntities()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Sanitizer::decodeCharReferences
     */
    public function testInvalidAmpersand()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Sanitizer::decodeCharReferences
     */
    public function testInvalidEntities()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Sanitizer::decodeCharReferences
     */
    public function testInvalidNumberedEntities()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Sanitizer::removeHTMLtags
     * @dataProvider provideHtml5Tags
     *
     * @param string $tag Name of an HTML5 element (ie: 'video')
     * @param bool $escaped Whether sanitizer let the tag in or escape it (ie: '&lt;video&gt;')
     */
    public function testRemovehtmltagsOnHtml5Tags($tag, $escaped)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide HTML5 tags
     */
    public static function provideHtml5Tags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dataRemoveHTMLtags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider dataRemoveHTMLtags
     * @covers Sanitizer::removeHTMLtags
     */
    public function testRemoveHTMLtags($input, $output, $msg = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideTagAttributesToDecode
     * @covers Sanitizer::decodeTagAttributes
     */
    public function testDecodeTagAttributes($expected, $attributes, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideTagAttributesToDecode()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideDeprecatedAttributes
     * @covers Sanitizer::fixTagAttributes
     */
    public function testDeprecatedAttributesUnaltered($inputAttr, $inputEl, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideDeprecatedAttributes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCssCommentsFixtures
     * @covers Sanitizer::checkCss
     */
    public function testCssCommentsChecking($expected, $css, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCssCommentsFixtures()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideEscapeHtmlAllowEntities
     * @covers Sanitizer::escapeHtmlAllowEntities
     */
    public function testEscapeHtmlAllowEntities($expected, $html)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideEscapeHtmlAllowEntities()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test escapeIdReferenceList for consistency with escapeId
     *
     * @dataProvider provideEscapeIdReferenceList
     * @covers Sanitizer::escapeIdReferenceList
     */
    public function testEscapeIdReferenceList($referenceList, $id1, $id2)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideEscapeIdReferenceList()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
