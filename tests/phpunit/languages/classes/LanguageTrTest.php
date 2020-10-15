<?php
/**
 * @author Antoine Musso
 * @copyright Copyright © 2011, Antoine Musso
 * @file
 */

/** Tests for MediaWiki languages/LanguageTr.php */
class LanguageTrTest extends LanguageClassesTestCase
{

    /**
     * See @bug 28040
     * Credits to irc://irc.freenode.net/wikipedia-tr users:
     *  - berm
     *  - []LuCkY[]
     *  - Emperyan
     * @see https://en.wikipedia.org/wiki/Dotted_and_dotless_I
     * @dataProvider provideDottedAndDotlessI
     * @covers Language::ucfirst
     * @covers Language::lcfirst
     */
    public function testDottedAndDotlessI($func, $input, $inputCase, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideDottedAndDotlessI()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
