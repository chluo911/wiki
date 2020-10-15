<?php

class ArticleTest extends MediaWikiTestCase
{

    /**
     * @var Title
     */
    private $title;
    /**
     * @var Article
     */
    private $article;

    /** creates a title object and its article object */
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** cleanup title object and its article object */
    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Article::__get
     */
    public function testImplementsGetMagic()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testImplementsGetMagic
     * @covers Article::__set
     */
    public function testImplementsSetMagic()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Article::__get
     * @covers Article::__set
     */
    public function testGetOrSetOnNewProperty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks for the existence of the backwards compatibility static functions
     * (forwarders to WikiPage class)
     *
     * @covers Article::selectFields
     * @covers Article::onArticleCreate
     * @covers Article::onArticleDelete
     * @covers Article::onArticleEdit
     * @covers Article::getAutosummary
     */
    public function testStaticFunctions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
