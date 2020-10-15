<?php

class MockSearch extends SearchEngine
{
    public static $id;
    public static $title;
    public static $text;

    public function __construct($db)
    {
    }

    public function update($id, $title, $text)
    {
        self::$id = $id;
        self::$title = $title;
        self::$text = $text;
    }
}

/**
 * @group Search
 */
class SearchUpdateTest extends MediaWikiTestCase
{

    /**
     * @var SearchUpdate
     */
    private $su;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function updateText($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers SearchUpdate::updateText
     */
    public function testUpdateText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers SearchUpdate::updateText
     * Test bug 32712
     * Test if unicode quotes in article links make its search index empty
     */
    public function testUnicodeLinkSearchIndexError()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
