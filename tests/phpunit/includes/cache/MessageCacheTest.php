<?php

/**
 * @group Database
 * @group Cache
 * @covers MessageCache
 */
class MessageCacheTest extends MediaWikiLangTestCase
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
     * Helper function -- setup site language for testing
     */
    protected function configureLanguages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Helper function for addDBData -- adds a simple page to the database
     *
     * @param string $title Title of page to be created
     * @param string $lang Language and content of the created page
     * @param string|null $content Content of the created page, or null for a generic string
     */
    protected function makePage($title, $lang, $content = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test message fallbacks, bug #1495
     *
     * @dataProvider provideMessagesForFallback
     */
    public function testMessageFallbacks($message, $lang, $expectedContent)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideMessagesForFallback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * There's a fallback case where the message key is given as fully qualified -- this
     * should ignore the passed $lang and use the language from the key
     *
     * @dataProvider provideMessagesForFullKeys
     */
    public function testFullKeyBehaviour($message, $lang, $expectedContent)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideMessagesForFullKeys()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideNormalizeKey
     */
    public function testNormalizeKey($key, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideNormalizeKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
