<?php

/**
 * @group Database
 */
class LinkFilterTest extends MediaWikiLangTestCase
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
     * createRegexFromLike($like)
     *
     * Takes an array as created by LinkFilter::makeLikeArray() and creates a regex from it
     *
     * @param array $like Array as created by LinkFilter::makeLikeArray()
     * @return string Regex
     */
    public function createRegexFromLIKE($like)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * provideValidPatterns()
     *
     * @return array
     */
    public static function provideValidPatterns()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * testMakeLikeArrayWithValidPatterns()
     *
     * Tests whether the LIKE clause produced by LinkFilter::makeLikeArray($pattern, $protocol)
     * will find one of the URL indexes produced by wfMakeUrlIndexes($url)
     *
     * @dataProvider provideValidPatterns
     *
     * @param string $protocol Protocol, e.g. 'http://' or 'mailto:'
     * @param string $pattern Search pattern to feed to LinkFilter::makeLikeArray
     * @param string $url URL to feed to wfMakeUrlIndexes
     * @param bool $shouldBeFound Should the URL be found? (defaults true)
     */
    public function testMakeLikeArrayWithValidPatterns($protocol, $pattern, $url, $shouldBeFound = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * provideInvalidPatterns()
     *
     * @return array
     */
    public static function provideInvalidPatterns()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * testMakeLikeArrayWithInvalidPatterns()
     *
     * Tests whether LinkFilter::makeLikeArray($pattern) will reject invalid search patterns
     *
     * @dataProvider provideInvalidPatterns
     *
     * @param string $pattern Invalid search pattern
     */
    public function testMakeLikeArrayWithInvalidPatterns($pattern)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
