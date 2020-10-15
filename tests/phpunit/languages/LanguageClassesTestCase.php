<?php
/**
 * Helping class to run tests using a clean language instance.
 *
 * This is intended for the MediaWiki language class tests under
 * tests/phpunit/languages.
 *
 * Before each tests, a new language object is build which you
 * can retrieve in your test using the $this->getLang() method:
 *
 * @par Using the crafted language object:
 * @code
 * function testHasLanguageObject() {
 *   $langObject = $this->getLang();
 *   $this->assertInstanceOf( 'LanguageFoo',
 *     $langObject
 *   );
 * }
 * @endcode
 */
abstract class LanguageClassesTestCase extends MediaWikiTestCase
{
    /**
     * Internal language object
     *
     * A new object is created before each tests thanks to PHPUnit
     * setUp() method, it is deleted after each test too. To get
     * this object you simply use the getLang method.
     *
     * You must have setup a language code first. See $LanguageClassCode
     * @code
     *  function testWeAreTheChampions() {
     *    $this->getLang();  # language object
     *  }
     * @endcode
     */
    private $languageObject;

    /**
     * @return Language
     */
    protected function getLang()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a new language object before each test.
     */
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Delete the internal language object so each test start
     * out with a fresh language instance.
     */
    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
