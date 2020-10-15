<?php

/**
 * Class CollationTest
 * @covers Collation
 * @covers IcuCollation
 * @covers IdentityCollation
 * @covers UppercaseCollation
 */
class CollationTest extends MediaWikiLangTestCase
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
     * Test to make sure, that if you
     * have "X" and "XY", the binary
     * sortkey also has "X" being a
     * prefix of "XY". Our collation
     * code makes this assumption.
     *
     * @param string $lang Language code for collator
     * @param string $base Base string
     * @param string $extended String containing base as a prefix.
     *
     * @dataProvider prefixDataProvider
     */
    public function testIsPrefix($lang, $base, $extended)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function prefixDataProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Opposite of testIsPrefix
     *
     * @dataProvider notPrefixDataProvider
     */
    public function testNotIsPrefix($lang, $base, $extended)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function notPrefixDataProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test correct first letter is fetched.
     *
     * @param string $collation Collation name (aka uca-en)
     * @param string $string String to get first letter of
     * @param string $firstLetter Expected first letter.
     *
     * @dataProvider firstLetterProvider
     */
    public function testGetFirstLetter($collation, $string, $firstLetter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function firstLetterProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
