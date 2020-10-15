<?php

/**
 * @group Editing
 *
 * @group Database
 *        ^--- tell jenkins this test needs the database
 *
 * @group medium
 *        ^--- tell phpunit that these test cases may take longer than 2 seconds.
 */
class EditPageTest extends MediaWikiLangTestCase
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
     * @dataProvider provideExtractSectionTitle
     * @covers EditPage::extractSectionTitle
     */
    public function testExtractSectionTitle($section, $title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideExtractSectionTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function forceRevisionDate(WikiPage $page, $timestamp)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * User input text is passed to rtrim() by edit page. This is a simple
     * wrapper around assertEquals() which calls rrtrim() to normalize the
     * expected and actual texts.
     * @param string $expected
     * @param string $actual
     * @param string $msg
     */
    protected function assertEditedTextEquals($expected, $actual, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Performs an edit and checks the result.
     *
     * @param string|Title $title The title of the page to edit
     * @param string|null $baseText Some text to create the page with before attempting the edit.
     * @param User|string|null $user The user to perform the edit as.
     * @param array $edit An array of request parameters used to define the edit to perform.
     *              Some well known fields are:
     *              * wpTextbox1: the text to submit
     *              * wpSummary: the edit summary
     *              * wpEditToken: the edit token (will be inserted if not provided)
     *              * wpEdittime: timestamp of the edit's base revision (will be inserted
     *                if not provided)
     *              * wpStarttime: timestamp when the edit started (will be inserted if not provided)
     *              * wpSectionTitle: the section to edit
     *              * wpMinorEdit: mark as minor edit
     *              * wpWatchthis: whether to watch the page
     * @param int|null $expectedCode The expected result code (EditPage::AS_XXX constants).
     *                  Set to null to skip the check.
     * @param string|null $expectedText The text expected to be on the page after the edit.
     *                  Set to null to skip the check.
     * @param string|null $message An optional message to show along with any error message.
     *
     * @return WikiPage The page that was just edited, useful for getting the edit's rev_id, etc.
     */
    protected function assertEdit(
        $title,
        $baseText,
        $user = null,
        array $edit,
        $expectedCode = null,
        $expectedText = null,
        $message = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCreatePages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCreatePages
     * @covers EditPage
     */
    public function testCreatePage(
        $desc,
        $pageTitle,
        $user,
        $editText,
        $expectedCode,
        $expectedText,
        $ignoreBlank = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCreatePages
     * @covers EditPage
     */
    public function testCreatePageTrx(
        $desc,
        $pageTitle,
        $user,
        $editText,
        $expectedCode,
        $expectedText,
        $ignoreBlank = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUpdatePage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUpdatePageTrx()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideSectionEdit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideSectionEdit
     * @covers EditPage
     */
    public function testSectionEdit($base, $section, $text, $summary, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideAutoMerge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideAutoMerge
     * @covers EditPage
     */
    public function testAutoMerge(
        $baseUser,
        $text,
        $adamsEdit,
        $bertasEdit,
        $expectedCode,
        $expectedText,
        $message = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testAutoMerge
     */
    public function testCheckDirectEditingDisallowed_forNonTextContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
