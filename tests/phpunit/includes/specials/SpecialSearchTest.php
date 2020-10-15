<?php
use MediaWiki\MediaWikiServices;

/**
 * Test class for SpecialSearch class
 * Copyright © 2012, Antoine Musso
 *
 * @author Antoine Musso
 * @group Database
 */
class SpecialSearchTest extends MediaWikiTestCase
{

    /**
     * @covers SpecialSearch::load
     * @dataProvider provideSearchOptionsTests
     * @param array $requested Request parameters. For example:
     *   array( 'ns5' => true, 'ns6' => true). Null to use default options.
     * @param array $userOptions User options to test with. For example:
     *   array('searchNs5' => 1 );. Null to use default options.
     * @param string $expectedProfile An expected search profile name
     * @param array $expectedNS Expected namespaces
     * @param string $message
     */
    public function testProfileAndNamespaceLoading(
        $requested,
        $userOptions,
        $expectedProfile,
        $expectedNS,
        $message = 'Profile name and namespaces mismatches!'
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideSearchOptionsTests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Helper to create a new User object with given options
     * User remains anonymous though
     * @param array|null $opt
     */
    public function newUserWithSearchNS($opt = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify we do not expand search term in <title> on search result page
     * https://gerrit.wikimedia.org/r/4841
     */
    public function testSearchTermIsNotExpanded()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideRewriteQueryWithSuggestion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideRewriteQueryWithSuggestion
     */
    public function testRewriteQueryWithSuggestion($message, $expectRegex, $results)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function mockSearchEngine($results)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class SpecialSearchTestMockResultSet extends SearchResultSet
{
    protected $results;
    protected $suggestion;

    public function __construct(
        $suggestion = null,
        $rewrittenQuery = null,
        array $results = [],
        $containedSyntax = false
    ) {
        $this->suggestion = $suggestion;
        $this->rewrittenQuery = $rewrittenQuery;
        $this->results = $results;
        $this->containedSyntax = $containedSyntax;
    }

    public function numRows()
    {
        return count($this->results);
    }

    public function getTotalHits()
    {
        return $this->numRows();
    }

    public function hasSuggestion()
    {
        return $this->suggestion !== null;
    }

    public function getSuggestionQuery()
    {
        return $this->suggestion;
    }

    public function getSuggestionSnippet()
    {
        return $this->suggestion;
    }

    public function hasRewrittenQuery()
    {
        return $this->rewrittenQuery !== null;
    }

    public function getQueryAfterRewrite()
    {
        return $this->rewrittenQuery;
    }

    public function getQueryAfterRewriteSnippet()
    {
        return htmlspecialchars($this->rewrittenQuery);
    }
}
