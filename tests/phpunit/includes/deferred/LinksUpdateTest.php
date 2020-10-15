<?php

/**
 * @group LinksUpdate
 * @group Database
 * ^--- make sure temporary tables are used.
 */
class LinksUpdateTest extends MediaWikiLangTestCase
{
    protected static $testingPageId;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->tablesUsed = array_merge(
            $this->tablesUsed,
            [
                'interwiki',
                'page_props',
                'pagelinks',
                'categorylinks',
                'langlinks',
                'externallinks',
                'imagelinks',
                'templatelinks',
                'iwlinks',
                'recentchanges',
            ]
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

    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function makeTitleAndParserOutput($name, $id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::addLink
     */
    public function testUpdate_pagelinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::addExternalLink
     */
    public function testUpdate_externallinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::addCategory
     */
    public function testUpdate_categorylinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testOnAddingAndRemovingCategory_recentChangesRowIsAdded()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testOnAddingAndRemovingCategoryToTemplates_embeddingPagesAreIgnored()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::addInterwikiLink
     */
    public function testUpdate_iwlinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::addTemplate
     */
    public function testUpdate_templatelinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::addImage
     */
    public function testUpdate_imagelinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::addLanguageLink
     */
    public function testUpdate_langlinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::setProperty
     */
    public function testUpdate_page_props()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUpdate_page_props_without_sortkey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // @todo test recursive, too!

    protected function assertLinksUpdate(
        Title $title,
        ParserOutput $parserOutput,
        $table,
        $fields,
        $condition,
        array $expectedRows
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertRecentChangeByCategorization(
        Title $pageTitle,
        ParserOutput $parserOutput,
        Title $categoryTitle,
        $expectedRows
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function runAllRelatedJobs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
