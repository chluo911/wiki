<?php

/**
 * @covers Preprocessor
 *
 * @covers Preprocessor_DOM
 * @covers PPDStack
 * @covers PPDStackElement
 * @covers PPDPart
 * @covers PPFrame_DOM
 * @covers PPTemplateFrame_DOM
 * @covers PPCustomFrame_DOM
 * @covers PPNode_DOM
 *
 * @covers Preprocessor_Hash
 * @covers PPDStack_Hash
 * @covers PPDStackElement_Hash
 * @covers PPDPart_Hash
 * @covers PPFrame_Hash
 * @covers PPTemplateFrame_Hash
 * @covers PPCustomFrame_Hash
 * @covers PPNode_Hash_Tree
 * @covers PPNode_Hash_Text
 * @covers PPNode_Hash_Array
 * @covers PPNode_Hash_Attr
 */
class PreprocessorTest extends MediaWikiTestCase
{
    protected $mTitle = 'Page title';
    protected $mPPNodeCount = 0;
    /**
     * @var ParserOptions
     */
    protected $mOptions;
    /**
     * @var array
     */
    protected $mPreprocessors;

    protected static $classNames = [
        'Preprocessor_DOM',
        'Preprocessor_Hash'
    ];

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getStripList()
    {
        return [ 'gallery', 'display map' /* Used by Maps, see r80025 CR */, '/foo' ];
    }

    protected static function addClassArg($testCases)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get XML preprocessor tree from the preprocessor (which may not be the
     * native XML-based one).
     *
     * @param string $className
     * @param string $wikiText
     * @return string
     */
    protected function preprocessToXml($className, $wikiText)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Normalize XML string to the form that a DOMDocument saves out.
     *
     * @param string $xml
     * @return string
     */
    protected function normalizeXml($xml)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCases
     */
    public function testPreprocessorOutput($className, $wikiText, $expectedXml)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * These are more complex test cases taken out of wiki articles.
     */
    public static function provideFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideFiles
     */
    public function testPreprocessorOutputFiles($className, $filename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests from T30642 · https://phabricator.wikimedia.org/T30642
     */
    public static function provideHeadings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideHeadings
     */
    public function testHeadings($className, $wikiText, $expectedXml)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
