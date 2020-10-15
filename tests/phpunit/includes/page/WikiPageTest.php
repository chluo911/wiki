<?php

/**
 * @group ContentHandler
 * @group Database
 * ^--- important, causes temporary tables to be used instead of the real database
 * @group medium
 **/
class WikiPageTest extends MediaWikiLangTestCase
{
    protected $pages_to_delete;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->tablesUsed = array_merge(
            $this->tablesUsed,
            [ 'page',
                'revision',
                'text',

                'recentchanges',
                'logging',

                'page_props',
                'pagelinks',
                'categorylinks',
                'langlinks',
                'externallinks',
                'imagelinks',
                'templatelinks',
                'iwlinks' ]
        );
    }

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Title|string $title
     * @param string|null $model
     * @return WikiPage
     */
    protected function newPage($title, $model = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string|Title|WikiPage $page
     * @param string $text
     * @param int $model
     *
     * @return WikiPage
     */
    protected function createPage($page, $text, $model = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::doEditContent
     * @covers WikiPage::doModify
     * @covers WikiPage::doCreate
     * @covers WikiPage::doEditUpdates
     */
    public function testDoEditContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::doEdit
     * @deprecated since 1.21. Should be removed when WikiPage::doEdit() gets removed
     */
    public function testDoEdit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::doDeleteArticle
     */
    public function testDoDeleteArticle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::doDeleteUpdates
     */
    public function testDoDeleteUpdates()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::getRevision
     */
    public function testGetRevision()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::getContent
     */
    public function testGetContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::getText
     */
    public function testGetText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::getContentModel
     */
    public function testGetContentModel()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::getContentHandler
     */
    public function testGetContentHandler()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::exists
     */
    public function testExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideHasViewableContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideHasViewableContent
     * @covers WikiPage::hasViewableContent
     */
    public function testHasViewableContent($title, $viewable, $create = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetRedirectTarget()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetRedirectTarget
     * @covers WikiPage::getRedirectTarget
     */
    public function testGetRedirectTarget($title, $model, $text, $target)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetRedirectTarget
     * @covers WikiPage::isRedirect
     */
    public function testIsRedirect($title, $model, $text, $target)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideIsCountable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideIsCountable
     * @covers WikiPage::isCountable
     */
    public function testIsCountable($title, $model, $text, $mode, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetParserOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetParserOutput
     * @covers WikiPage::getParserOutput
     */
    public function testGetParserOutput($model, $text, $expectedHtml)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::getParserOutput
     */
    public function testGetParserOutput_nonexisting()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::getParserOutput
     */
    public function testGetParserOutput_badrev()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static $sections =

        "Intro

== stuff ==
hello world

== test ==
just a test

== foo ==
more stuff
";

    public function dataReplaceSection()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider dataReplaceSection
     * @covers WikiPage::replaceSectionContent
     */
    public function testReplaceSectionContent(
        $title,
        $model,
        $text,
        $section,
        $with,
        $sectionTitle,
        $expected
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider dataReplaceSection
     * @covers WikiPage::replaceSectionAtRev
     */
    public function testReplaceSectionAtRev(
        $title,
        $model,
        $text,
        $section,
        $with,
        $sectionTitle,
        $expected
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /* @todo FIXME: fix this!
    public function testGetUndoText() {
    $this->markTestSkippedIfNoDiff3();

    $text = "one";
    $page = $this->createPage( "WikiPageTest_testGetUndoText", $text );
    $rev1 = $page->getRevision();

    $text .= "\n\ntwo";
    $page->doEditContent(
        ContentHandler::makeContent( $text, $page->getTitle() ),
        "adding section two"
    );
    $rev2 = $page->getRevision();

    $text .= "\n\nthree";
    $page->doEditContent(
        ContentHandler::makeContent( $text, $page->getTitle() ),
        "adding section three"
    );
    $rev3 = $page->getRevision();

    $text .= "\n\nfour";
    $page->doEditContent(
        ContentHandler::makeContent( $text, $page->getTitle() ),
        "adding section four"
    );
    $rev4 = $page->getRevision();

    $text .= "\n\nfive";
    $page->doEditContent(
        ContentHandler::makeContent( $text, $page->getTitle() ),
        "adding section five"
    );
    $rev5 = $page->getRevision();

    $text .= "\n\nsix";
    $page->doEditContent(
        ContentHandler::makeContent( $text, $page->getTitle() ),
        "adding section six"
    );
    $rev6 = $page->getRevision();

    $undo6 = $page->getUndoText( $rev6 );
    if ( $undo6 === false ) $this->fail( "getUndoText failed for rev6" );
    $this->assertEquals( "one\n\ntwo\n\nthree\n\nfour\n\nfive", $undo6 );

    $undo3 = $page->getUndoText( $rev4, $rev2 );
    if ( $undo3 === false ) $this->fail( "getUndoText failed for rev4..rev2" );
    $this->assertEquals( "one\n\ntwo\n\nfive", $undo3 );

    $undo2 = $page->getUndoText( $rev2 );
    if ( $undo2 === false ) $this->fail( "getUndoText failed for rev2" );
    $this->assertEquals( "one\n\nfive", $undo2 );
    }
     */

    /**
     * @todo FIXME: this is a better rollback test than the one below, but it
     * keeps failing in jenkins for some reason.
     */
    public function broken_testDoRollback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @todo FIXME: the above rollback test is better, but it keeps failing in jenkins for some reason.
     * @covers WikiPage::doRollback
     */
    public function testDoRollback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::doRollback
     */
    public function testDoRollbackFailureSameContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetAutosummary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetAutoSummary
     * @covers WikiPage::getAutosummary
     */
    public function testGetAutosummary($old, $new, $flags, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetAutoDeleteReason()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetAutoDeleteReason
     * @covers WikiPage::getAutoDeleteReason
     */
    public function testGetAutoDeleteReason($edits, $expectedResult, $expectedHistory)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providePreSaveTransform()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiPage::factory
     */
    public function testWikiPageFactory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
