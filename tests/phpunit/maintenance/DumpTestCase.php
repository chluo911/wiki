<?php

/**
 * Base TestCase for dumps
 */
abstract class DumpTestCase extends MediaWikiLangTestCase
{

    /**
     * exception to be rethrown once in sound PHPUnit surrounding
     *
     * As the current MediaWikiTestCase::run is not robust enough to recover
     * from thrown exceptions directly, we cannot throw frow within
     * self::addDBData, although it would be appropriate. Hence, we catch the
     * exception and store it until we are in setUp and may finally rethrow
     * the exception without crashing the test suite.
     *
     * @var Exception|null
     */
    protected $exceptionFromAddDBData = null;

    /**
     * Holds the XMLReader used for analyzing an XML dump
     *
     * @var XMLReader|null
     */
    protected $xml = null;

    /** @var bool|null Whether the 'gzip' utility is available */
    protected static $hasGzip = null;

    /**
     * Skip the test if 'gzip' is not in $PATH.
     *
     * @return bool
     */
    protected function checkHasGzip()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a revision to a page, while returning the resuting revision's id
     *
     * @param Page $page Page to add the revision to
     * @param string $text Revisions text
     * @param string $summary Revisions summary
     * @param string $model The model ID (defaults to wikitext)
     *
     * @throws MWException
     * @return array
     */
    protected function addRevision(Page $page, $text, $summary, $model = CONTENT_MODEL_WIKITEXT)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * gunzips the given file and stores the result in the original file name
     *
     * @param string $fname Filename to read the gzipped data from and stored
     *   the gunzipped data into
     */
    protected function gunzip($fname)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Default set up function.
     *
     * Clears $wgUser, and reports errors from addDBData to PHPUnit
     */
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks for test output consisting only of lines containing ETA announcements
     */
    public function expectETAOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Step the current XML reader until node end of given name is found.
     *
     * @param string $name Name of the closing element to look for
     *   (e.g.: "mediawiki" when looking for </mediawiki>)
     *
     * @return bool True if the end node could be found. false otherwise.
     */
    protected function skipToNodeEnd($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Step the current XML reader to the first element start after the node
     * end of a given name.
     *
     * @param string $name Name of the closing element to look for
     *   (e.g.: "mediawiki" when looking for </mediawiki>)
     *
     * @return bool True if new element after the closing of $name could be
     *   found. false otherwise.
     */
    protected function skipPastNodeEnd($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Opens an XML file to analyze and optionally skips past siteinfo.
     *
     * @param string $fname Name of file to analyze
     * @param bool $skip_siteinfo (optional) If true, step the xml reader
     *   to the first element after </siteinfo>
     */
    protected function assertDumpStart($fname, $skip_siteinfo = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the xml reader is at the final closing tag of an xml file and
     * closes the reader.
     *
     * @param string $name (optional) the name of the final tag
     *   (e.g.: "mediawiki" for </mediawiki>)
     */
    protected function assertDumpEnd($name = "mediawiki")
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Steps the xml reader over white space
     */
    protected function skipWhitespace()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the xml reader is at an element of given name, and optionally
     * skips past it.
     *
     * @param string $name The name of the element to check for
     *   (e.g.: "mediawiki" for <mediawiki>)
     * @param bool $skip (optional) if true, skip past the found element
     */
    protected function assertNodeStart($name, $skip = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the xml reader is at an closing element of given name, and optionally
     * skips past it.
     *
     * @param string $name The name of the closing element to check for
     *   (e.g.: "mediawiki" for </mediawiki>)
     * @param bool $skip (optional) if true, skip past the found element
     */
    protected function assertNodeEnd($name, $skip = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the xml reader is at an element of given tag that contains a given text,
     * and skips over the element.
     *
     * @param string $name The name of the element to check for
     *   (e.g.: "mediawiki" for <mediawiki>...</mediawiki>)
     * @param string|bool $text If string, check if it equals the elements text.
     *   If false, ignore the element's text
     * @param bool $skip_ws (optional) if true, skip past white spaces that trail the
     *   closing element.
     */
    protected function assertTextNode($name, $text, $skip_ws = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the xml reader is at the start of a page element and skips over the first
     * tags, after checking them.
     *
     * Besides the opening page element, this function also checks for and skips over the
     * title, ns, and id tags. Hence after this function, the xml reader is at the first
     * revision of the current page.
     *
     * @param int $id Id of the page to assert
     * @param int $ns Number of namespage to assert
     * @param string $name Title of the current page
     */
    protected function assertPageStart($id, $ns, $name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the xml reader is at the page's closing element and skips to the next
     * element.
     */
    protected function assertPageEnd()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the xml reader is at a revision and checks its representation before
     * skipping over it.
     *
     * @param int $id Id of the revision
     * @param string $summary Summary of the revision
     * @param int $text_id Id of the revision's text
     * @param int $text_bytes Number of bytes in the revision's text
     * @param string $text_sha1 The base36 SHA-1 of the revision's text
     * @param string|bool $text (optional) The revision's string, or false to check for a
     *            revision stub
     * @param int|bool $parentid (optional) id of the parent revision
     * @param string $model The expected content model id (default: CONTENT_MODEL_WIKITEXT)
     * @param string $format The expected format model id (default: CONTENT_FORMAT_WIKITEXT)
     */
    protected function assertRevision(
        $id,
        $summary,
        $text_id,
        $text_bytes,
        $text_sha1,
        $text = false,
        $parentid = false,
        $model = CONTENT_MODEL_WIKITEXT,
        $format = CONTENT_FORMAT_WIKITEXT
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertText($id, $text_id, $text_bytes, $text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
