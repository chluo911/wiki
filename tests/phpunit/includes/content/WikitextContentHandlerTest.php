<?php

/**
 * @group ContentHandler
 */
class WikitextContentHandlerTest extends MediaWikiLangTestCase
{
    /**
     * @var ContentHandler
     */
    private $handler;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikitextContentHandler::serializeContent
     */
    public function testSerializeContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikitextContentHandler::unserializeContent
     */
    public function testUnserializeContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikitextContentHandler::makeEmptyContent
     */
    public function testMakeEmptyContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function dataIsSupportedFormat()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideMakeRedirectContent
     * @param Title|string $title Title object or string for Title::newFromText()
     * @param string $expected Serialized form of the content object built
     * @covers WikitextContentHandler::makeRedirectContent
     */
    public function testMakeRedirectContent($title, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideMakeRedirectContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider dataIsSupportedFormat
     * @covers WikitextContentHandler::isSupportedFormat
     */
    public function testIsSupportedFormat($format, $supported)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSupportsDirectEditing()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function dataMerge3()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider dataMerge3
     * @covers WikitextContentHandler::merge3
     */
    public function testMerge3($old, $mine, $yours, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function dataGetAutosummary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider dataGetAutosummary
     * @covers WikitextContentHandler::getAutosummary
     */
    public function testGetAutosummary($old, $new, $flags, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @todo Text case requires database, should be done by a test class in the Database group
     */
    /*
    public function testGetAutoDeleteReason( Title $title, &$hasHistory ) {}
    */

    /**
     * @todo Text case requires database, should be done by a test class in the Database group
     */
    /*
    public function testGetUndoContent( Revision $current, Revision $undo,
        Revision $undoafter = null
    ) {
    }
    */

    public function testDataIndexFieldsFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
