<?php

/**
 * @group ContentHandler
 */
class RevisionTest extends MediaWikiTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::getRevisionText
     */
    public function testGetRevisionText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::getRevisionText
     */
    public function testGetRevisionTextGzip()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::getRevisionText
     */
    public function testGetRevisionTextUtf8Native()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::getRevisionText
     */
    public function testGetRevisionTextUtf8Legacy()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::getRevisionText
     */
    public function testGetRevisionTextUtf8NativeGzip()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::getRevisionText
     */
    public function testGetRevisionTextUtf8LegacyGzip()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::compressRevisionText
     */
    public function testCompressRevisionTextUtf8()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::compressRevisionText
     */
    public function testCompressRevisionTextUtf8Gzip()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # =========================================================================

    /**
     * @param string $text
     * @param string $title
     * @param string $model
     * @param string $format
     *
     * @return Revision
     */
    public function newTestRevision(
        $text,
        $title = "Test",
        $model = CONTENT_MODEL_WIKITEXT,
        $format = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dataGetContentModel()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group Database
     * @dataProvider dataGetContentModel
     * @covers Revision::getContentModel
     */
    public function testGetContentModel($text, $title, $model, $format, $expectedModel)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dataGetContentFormat()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group Database
     * @dataProvider dataGetContentFormat
     * @covers Revision::getContentFormat
     */
    public function testGetContentFormat($text, $title, $model, $format, $expectedFormat)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dataGetContentHandler()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group Database
     * @dataProvider dataGetContentHandler
     * @covers Revision::getContentHandler
     */
    public function testGetContentHandler($text, $title, $model, $format, $expectedClass)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dataGetContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group Database
     * @dataProvider dataGetContent
     * @covers Revision::getContent
     */
    public function testGetContent(
        $text,
        $title,
        $model,
        $format,
        $audience,
        $expectedSerialization
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dataGetText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group Database
     * @dataProvider dataGetText
     * @covers Revision::getText
     */
    public function testGetText($text, $title, $model, $format, $audience, $expectedText)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dataGetSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::getSize
     * @group Database
     * @dataProvider dataGetSize
     */
    public function testGetSize($text, $model, $expected_size)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dataGetSha1()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::getSha1
     * @group Database
     * @dataProvider dataGetSha1
     */
    public function testGetSha1($text, $model, $expected_hash)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::__construct
     */
    public function testConstructWithText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Revision::__construct
     */
    public function testConstructWithContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests whether $rev->getContent() returns a clone when needed.
     *
     * @group Database
     * @covers Revision::getContent
     */
    public function testGetContentClone()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests whether $rev->getContent() returns the same object repeatedly if appropriate.
     *
     * @group Database
     * @covers Revision::getContent
     */
    public function testGetContentUncloned()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class RevisionTestModifyableContent extends TextContent
{
    public function __construct($text)
    {
        parent::__construct($text, "RevisionTestModifyableContent");
    }

    public function copy()
    {
        return new RevisionTestModifyableContent($this->mText);
    }

    public function getText()
    {
        return $this->mText;
    }

    public function setText($text)
    {
        $this->mText = $text;
    }
}

class RevisionTestModifyableContentHandler extends TextContentHandler
{
    public function __construct()
    {
        parent::__construct("RevisionTestModifyableContent", [ CONTENT_FORMAT_TEXT ]);
    }

    public function unserializeContent($text, $format = null)
    {
        $this->checkFormat($format);

        return new RevisionTestModifyableContent($text);
    }

    public function makeEmptyContent()
    {
        return new RevisionTestModifyableContent('');
    }
}
