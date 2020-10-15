<?php

// @codingStandardsIgnoreStart
/**#@+
 * A parser extension that adds two tags, <ref> and <references> for adding
 * citations to pages
 *
 * @ingroup Extensions
 *
 * @link http://www.mediawiki.org/wiki/Extension:Cite/Cite.php Documentation
 * @link http://www.w3.org/TR/html4/struct/text.html#edef-CITE <cite> definition in HTML
 * @link http://www.w3.org/TR/2005/WD-xhtml2-20050527/mod-text.html#edef_text_cite <cite> definition in XHTML 2.0
 *
 * @bug https://phabricator.wikimedia.org/T6579
 *
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @copyright Copyright © 2005, Ævar Arnfjörð Bjarmason
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
// @codingStandardsIgnoreEnd

/**
 * WARNING: MediaWiki core hardcodes this class name to check if the
 * Cite extension is installed. See T89151.
 */
class Cite
{

    /**
     * @todo document
     */
    const DEFAULT_GROUP = '';

    /**
     * Maximum storage capacity for pp_value field of page_props table
     * @todo Find a way to retrieve this information from the DBAL
     */
    const MAX_STORAGE_LENGTH = 65535; // Size of MySQL 'blob' field

    /**
     * Key used for storage in parser output's ExtensionData and ObjectCache
     */
    const EXT_DATA_KEY = 'Cite:References';

    /**
     * Version number in case we change the data structure in the future
     */
    const DATA_VERSION_NUMBER = 1;

    /**
     * Cache duration set when parsing a page with references
     */
    const CACHE_DURATION_ONPARSE = 3600; // 1 hour

    /**
     * Cache duration set when fetching references from db
     */
    const CACHE_DURATION_ONFETCH = 18000; // 5 hours

    /**#@+
     * @access private
     */

    /**
     * Datastructure representing <ref> input, in the format of:
     * <code>
     * array(
     * 	'user supplied' => array(
     *		'text' => 'user supplied reference & key',
     *		'count' => 1, // occurs twice
     * 		'number' => 1, // The first reference, we want
     * 		               // all occourances of it to
     * 		               // use the same number
     *	),
     *	0 => 'Anonymous reference',
     *	1 => 'Another anonymous reference',
     *	'some key' => array(
     *		'text' => 'this one occurs once'
     *		'count' => 0,
     * 		'number' => 4
     *	),
     *	3 => 'more stuff'
     * );
     * </code>
     *
     * This works because:
     * * PHP's datastructures are guaranteed to be returned in the
     *   order that things are inserted into them (unless you mess
     *   with that)
     * * User supplied keys can't be integers, therefore avoiding
     *   conflict with anonymous keys
     *
     * @var array
     **/
    public $mRefs = [];

    /**
     * Count for user displayed output (ref[1], ref[2], ...)
     *
     * @var int
     */
    public $mOutCnt = 0;
    public $mGroupCnt = [];

    /**
     * Counter to track the total number of (useful) calls to either the
     * ref or references tag hook
     */
    public $mCallCnt = 0;

    /**
     * The backlinks, in order, to pass as $3 to
     * 'cite_references_link_many_format', defined in
     * 'cite_references_link_many_format_backlink_labels
     *
     * @var array
     */
    public $mBacklinkLabels;

    /**
     * The links to use per group, in order.
     *
     * @var array
     */
    public $mLinkLabels = [];

    /**
     * @var Parser
     */
    public $mParser;

    /**
     * True when the ParserAfterParse hook has been called.
     * Used to avoid doing anything in ParserBeforeTidy.
     *
     * @var boolean
     */
    public $mHaveAfterParse = false;

    /**
     * True when a <ref> tag is being processed.
     * Used to avoid infinite recursion
     *
     * @var boolean
     */
    public $mInCite = false;

    /**
     * True when a <references> tag is being processed.
     * Used to detect the use of <references> to define refs
     *
     * @var boolean
     */
    public $mInReferences = false;

    /**
     * Error stack used when defining refs in <references>
     *
     * @var array
     */
    public $mReferencesErrors = [];

    /**
     * Group used when in <references> block
     *
     * @var string
     */
    public $mReferencesGroup = '';

    /**
     * <ref> call stack
     * Used to cleanup out of sequence ref calls created by #tag
     * See description of function rollbackRef.
     *
     * @var array
     */
    public $mRefCallStack = [];

    /**
     * @var bool
     */
    private $mBumpRefData = false;

    /**
     * Did we install us into $wgHooks yet?
     * @var Boolean
     */
    protected static $hooksInstalled = false;

    /**#@+ @access private */

    /**
     * Callback function for <ref>
     *
     * @param string|null $str Raw content of the <ref> tag.
     * @param string[] $argv Arguments
     * @param Parser $parser
     * @param PPFrame $frame
     *
     * @return string
     */
    public function ref($str, array $argv, Parser $parser, PPFrame $frame)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string|null $str Raw content of the <ref> tag.
     * @param string[] $argv Arguments
     * @param Parser $parser
     * @param string $default_group
     *
     * @throws Exception
     * @return string
     */
    public function guardedRef(
        $str,
        array $argv,
        Parser $parser,
        $default_group = self::DEFAULT_GROUP
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse the arguments to the <ref> tag
     *
     *  "name" : Key of the reference.
     *  "group" : Group to which it belongs. Needs to be passed to <references /> too.
     *  "follow" : If the current reference is the continuation of another, key of that reference.
     *
     *
     * @param string[] $argv The argument vector
     * @return mixed false on invalid input, a string on valid
     *               input and null on no input
     */
    public function refArg(array $argv)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Populate $this->mRefs based on input and arguments to <ref>
     *
     * @param string $str Input from the <ref> tag
     * @param string|null $key Argument to the <ref> tag as returned by $this->refArg()
     * @param string $group
     * @param string|null $follow
     * @param string[] $call
     *
     * @throws Exception
     * @return string
     */
    public function stack($str, $key = null, $group, $follow, array $call)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Partially undoes the effect of calls to stack()
     *
     * Called by guardedReferences()
     *
     * The option to define <ref> within <references> makes the
     * behavior of <ref> context dependent.  This is normally fine
     * but certain operations (especially #tag) lead to out-of-order
     * parser evaluation with the <ref> tags being processed before
     * their containing <reference> element is read.  This leads to
     * stack corruption that this function works to fix.
     *
     * This function is not a total rollback since some internal
     * counters remain incremented.  Doing so prevents accidentally
     * corrupting certain links.
     *
     * @param string $type
     * @param string|null $key
     * @param string $group
     * @param int $index
     */
    public function rollbackRef($type, $key, $group, $index)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Callback function for <references>
     *
     * @param string|null $str Raw content of the <references> tag.
     * @param string[] $argv Arguments
     * @param Parser $parser
     * @param PPFrame $frame
     *
     * @return string
     */
    public function references($str, array $argv, Parser $parser, PPFrame $frame)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string|null $str Raw content of the <references> tag.
     * @param string[] $argv
     * @param Parser $parser
     * @param string $group
     *
     * @return string
     */
    public function guardedReferences(
        $str,
        array $argv,
        Parser $parser,
        $group = self::DEFAULT_GROUP
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Make output to be returned from the references() function
     *
     * @param string $group
     *
     * @return string XHTML ready for output
     */
    public function referencesFormat($group)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Format a single entry for the referencesFormat() function
     *
     * @param string $key The key of the reference
     * @param mixed $val The value of the reference, string for anonymous
     *                   references, array for user-suppplied
     * @return string Wikitext
     */
    public function referencesFormatEntry($key, $val)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns formatted reference text
     * @param String $key
     * @param String $text
     * @return String
     */
    public function referenceText($key, $text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate a numeric backlink given a base number and an
     * offset, e.g. $base = 1, $offset = 2; = 1.2
     * Since bug #5525, it correctly does 1.9 -> 1.10 as well as 1.099 -> 1.100
     *
     * @static
     *
     * @param int $base The base
     * @param int $offset The offset
     * @param int $max Maximum value expected.
     * @return string
     */
    public function referencesFormatEntryNumericBacklinkLabel($base, $offset, $max)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate a custom format backlink given an offset, e.g.
     * $offset = 2; = c if $this->mBacklinkLabels = array( 'a',
     * 'b', 'c', ...). Return an error if the offset > the # of
     * array items
     *
     * @param int $offset The offset
     *
     * @return string
     */
    public function referencesFormatEntryAlternateBacklinkLabel($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate a custom format link for a group given an offset, e.g.
     * the second <ref group="foo"> is b if $this->mLinkLabels["foo"] =
     * array( 'a', 'b', 'c', ...).
     * Return an error if the offset > the # of array items
     *
     * @param int $offset The offset
     * @param string $group The group name
     * @param string $label The text to use if there's no message for them.
     *
     * @return string
     */
    public function getLinkLabel($offset, $group, $label)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return an id for use in wikitext output based on a key and
     * optionally the number of it, used in <references>, not <ref>
     * (since otherwise it would link to itself)
     *
     * @static
     *
     * @param string $key The key
     * @param int $num The number of the key
     * @return string A key for use in wikitext
     */
    public function refKey($key, $num = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return an id for use in wikitext output based on a key and
     * optionally the number of it, used in <ref>, not <references>
     * (since otherwise it would link to itself)
     *
     * @static
     *
     * @param string $key The key
     * @return string A key for use in wikitext
     */
    public static function getReferencesKey($key)
    {
        $prefix = wfMessage('cite_references_link_prefix')->inContentLanguage()->text();
        $suffix = wfMessage('cite_references_link_suffix')->inContentLanguage()->text();

        return "$prefix$key$suffix";
    }

    /**
     * Generate a link (<sup ...) for the <ref> element from a key
     * and return XHTML ready for output
     *
     * @param string $group
     * @param string $key The key for the link
     * @param int $count The index of the key, used for distinguishing
     *                   multiple occurrences of the same key
     * @param int $label The label to use for the link, I want to
     *                   use the same label for all occourances of
     *                   the same named reference.
     * @param string $subkey
     *
     * @return string
     */
    public function linkRef($group, $key, $count = null, $label = null, $subkey = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This does approximately the same thing as
     * Language::listToText() but due to this being used for a
     * slightly different purpose (people might not want , as the
     * first separator and not 'and' as the second, and this has to
     * use messages from the content language) I'm rolling my own.
     *
     * @static
     *
     * @param array $arr The array to format
     * @return string
     */
    public function listToText($arr)
    {
        $cnt = count($arr);

        $sep = wfMessage('cite_references_link_many_sep')->inContentLanguage()->plain();
        $and = wfMessage('cite_references_link_many_and')->inContentLanguage()->plain();

        if ($cnt === 1) {
            // Enforce always returning a string
            return (string)$arr[0];
        } else {
            $t = array_slice($arr, 0, $cnt - 1);
            return implode($sep, $t) . $and . $arr[$cnt - 1];
        }
    }

    /**
     * Generate the labels to pass to the
     * 'cite_references_link_many_format' message, the format is an
     * arbitrary number of tokens separated by [\t\n ]
     */
    public function genBacklinkLabels()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate the labels to pass to the
     * 'cite_reference_link' message instead of numbers, the format is an
     * arbitrary number of tokens separated by [\t\n ]
     *
     * @param string $group
     * @param string $message
     */
    public function genLinkLabels($group, $message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets run when Parser::clearState() gets run, since we don't
     * want the counts to transcend pages and other instances
     *
     * @param Parser $parser
     *
     * @return bool
     */
    public function clearState(Parser &$parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets run when the parser is cloned.
     *
     * @param Parser $parser
     *
     * @return bool
     */
    public function cloneState(Parser $parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Called at the end of page processing to append a default references
     * section, if refs were used without a main references tag. If there are references
     * in a custom group, and there is no references tag for it, show an error
     * message for that group.
     * If we are processing a section preview, this adds the missing
     * references tags and does not add the errors.
     *
     * @param bool $afterParse True if called from the ParserAfterParse hook
     * @param Parser $parser
     * @param string $text
     *
     * @return bool
     */
    public function checkRefsNoReferences($afterParse, &$parser, &$text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Saves references in parser extension data
     * This is called by each <references/> tag, and by checkRefsNoReferences
     * Assumes $this->mRefs[$group] is set
     *
     * @param $group
     */
    private function saveReferencesData($group = self::DEFAULT_GROUP)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Hook for the InlineEditor extension.
     * If any ref or reference reference tag is in the text,
     * the entire page should be reparsed, so we return false in that case.
     *
     * @param $output
     *
     * @return bool
     */
    public function checkAnyCalls(&$output)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Initialize the parser hooks
     *
     * @param Parser $parser
     *
     * @return bool
     */
    public static function setHooks(Parser $parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return an error message based on an error ID
     *
     * @param string $key   Message name for the error
     * @param string|null $param Parameter to pass to the message
     * @param string $parse Whether to parse the message ('parse') or not ('noparse')
     * @return string XHTML or wikitext ready for output
     */
    public function error($key, $param = null, $parse = 'parse')
    {
        # For ease of debugging and because errors are rare, we
        # use the user language and split the parser cache.
        $lang = $this->mParser->getOptions()->getUserLangObj();
        $dir = $lang->getDir();

        # We rely on the fact that PHP is okay with passing unused argu-
        # ments to functions.  If $1 is not used in the message, wfMessage will
        # just ignore the extra parameter.
        $msg = wfMessage(
            'cite_error',
            wfMessage($key, $param)->inLanguage($lang)->plain()
        )
            ->inLanguage($lang)
            ->plain();

        $this->mParser->addTrackingCategory('cite-tracking-category-cite-error');

        $ret = Html::rawElement(
            'span',
            [
                'class' => 'error mw-ext-cite-error',
                'lang' => $lang->getHtmlCode(),
                'dir' => $dir,
            ],
            $msg
        );

        if ($parse === 'parse') {
            $ret = $this->mParser->recursiveTagParse($ret);
        }

        return $ret;
    }

    /**
     * Return a warning message based on a warning ID
     *
     * @param string $key   Message name for the warning. Name should start with cite_warning_
     * @param string|null $param Parameter to pass to the message
     * @param string $parse Whether to parse the message ('parse') or not ('noparse')
     * @return string XHTML or wikitext ready for output
     */
    public function warning($key, $param = null, $parse = 'parse')
    {
        # For ease of debugging and because errors are rare, we
        # use the user language and split the parser cache.
        $lang = $this->mParser->getOptions()->getUserLangObj();
        $dir = $lang->getDir();

        # We rely on the fact that PHP is okay with passing unused argu-
        # ments to functions.  If $1 is not used in the message, wfMessage will
        # just ignore the extra parameter.
        $msg = wfMessage(
            'cite_warning',
            wfMessage($key, $param)->inLanguage($lang)->plain()
        )
            ->inLanguage($lang)
            ->plain();

        $key = preg_replace('/^cite_warning_/', '', $key) . '';
        $ret = Html::rawElement(
            'span',
            [
                'class' => 'warning mw-ext-cite-warning mw-ext-cite-warning-' .
                    Sanitizer::escapeClass($key),
                'lang' => $lang->getHtmlCode(),
                'dir' => $dir,
            ],
            $msg
        );

        if ($parse === 'parse') {
            $ret = $this->mParser->recursiveTagParse($ret);
        }

        return $ret;
    }

    /**
     * Fetch references stored for the given title in page_props
     * For performance, results are cached
     *
     * @param Title $title
     * @return array|false
     */
    public static function getStoredReferences(Title $title)
    {
        global $wgCiteStoreReferencesData;
        if (!$wgCiteStoreReferencesData) {
            return false;
        }
        $cache = ObjectCache::getMainWANInstance();
        $key = $cache->makeKey(self::EXT_DATA_KEY, $title->getArticleID());
        return $cache->getWithSetCallback(
            $key,
            self::CACHE_DURATION_ONFETCH,
            function ($oldValue, &$ttl, array &$setOpts) use ($title) {
                $dbr = wfGetDB(DB_SLAVE);
                $setOpts += Database::getCacheSetOptions($dbr);
                return self::recursiveFetchRefsFromDB($title, $dbr);
            },
            [
                'checkKeys' => [ $key ],
                'lockTSE' => 30,
            ]
        );
    }

    /**
     * Reconstructs compressed json by successively retrieving the properties references-1, -2, etc
     * It attempts the next step when a decoding error occurs.
     * Returns json_decoded uncompressed string, with validation of json
     *
     * @param Title $title
     * @param DatabaseBase $dbr
     * @param string $string
     * @param int $i
     * @return array|false
     */
    private static function recursiveFetchRefsFromDB(
        Title $title,
        DatabaseBase $dbr,
        $string = '',
        $i = 1
    )
    {
        $id = $title->getArticleID();
        $result = $dbr->selectField(
            'page_props',
            'pp_value',
            [
                'pp_page' => $id,
                'pp_propname' => 'references-' . $i
            ],
            __METHOD__
        );
        if ($result !== false) {
            $string .= $result;
            $decodedString = gzdecode($string);
            if ($decodedString !== false) {
                $json = json_decode($decodedString, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    return $json;
                }
                // corrupted json ?
                // shouldn't happen since when string is truncated, gzdecode should fail
                wfDebug("Corrupted json detected when retrieving stored references for title id $id");
            }
            // if gzdecode fails, try to fetch next references- property value
            return self::recursiveFetchRefsFromDB($title, $dbr, $string, ++$i);
        } else {
            // no refs stored in page_props at this index
            if ($i > 1) {
                // shouldn't happen
                wfDebug("Failed to retrieve stored references for title id $id");
            }
            return false;
        }
    }

    /**#@-*/
}
