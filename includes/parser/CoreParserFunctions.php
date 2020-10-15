<?php
/**
 * Parser functions provided by MediaWiki core
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Parser
 */

/**
 * Various core parser functions, registered in Parser::firstCallInit()
 * @ingroup Parser
 */
class CoreParserFunctions
{
    /**
     * @param Parser $parser
     * @return void
     */
    public static function register($parser)
    {
        global $wgAllowDisplayTitle, $wgAllowSlowParserFunctions;

        # Syntax for arguments (see Parser::setFunctionHook):
        #  "name for lookup in localized magic words array",
        #  function callback,
        #  optional Parser::SFH_NO_HASH to omit the hash from calls (e.g. {{int:...}}
        #    instead of {{#int:...}})
        $noHashFunctions = [
            'ns', 'nse', 'urlencode', 'lcfirst', 'ucfirst', 'lc', 'uc',
            'localurl', 'localurle', 'fullurl', 'fullurle', 'canonicalurl',
            'canonicalurle', 'formatnum', 'grammar', 'gender', 'plural', 'bidi',
            'numberofpages', 'numberofusers', 'numberofactiveusers',
            'numberofarticles', 'numberoffiles', 'numberofadmins',
            'numberingroup', 'numberofedits', 'language',
            'padleft', 'padright', 'anchorencode', 'defaultsort', 'filepath',
            'pagesincategory', 'pagesize', 'protectionlevel', 'protectionexpiry',
            'namespacee', 'namespacenumber', 'talkspace', 'talkspacee',
            'subjectspace', 'subjectspacee', 'pagename', 'pagenamee',
            'fullpagename', 'fullpagenamee', 'rootpagename', 'rootpagenamee',
            'basepagename', 'basepagenamee', 'subpagename', 'subpagenamee',
            'talkpagename', 'talkpagenamee', 'subjectpagename',
            'subjectpagenamee', 'pageid', 'revisionid', 'revisionday',
            'revisionday2', 'revisionmonth', 'revisionmonth1', 'revisionyear',
            'revisiontimestamp', 'revisionuser', 'cascadingsources',
        ];
        foreach ($noHashFunctions as $func) {
            $parser->setFunctionHook($func, [ __CLASS__, $func ], Parser::SFH_NO_HASH);
        }

        $parser->setFunctionHook(
            'namespace',
            [ __CLASS__, 'mwnamespace' ],
            Parser::SFH_NO_HASH
        );
        $parser->setFunctionHook('int', [ __CLASS__, 'intFunction' ], Parser::SFH_NO_HASH);
        $parser->setFunctionHook('special', [ __CLASS__, 'special' ]);
        $parser->setFunctionHook('speciale', [ __CLASS__, 'speciale' ]);
        $parser->setFunctionHook('tag', [ __CLASS__, 'tagObj' ], Parser::SFH_OBJECT_ARGS);
        $parser->setFunctionHook('formatdate', [ __CLASS__, 'formatDate' ]);

        if ($wgAllowDisplayTitle) {
            $parser->setFunctionHook(
                'displaytitle',
                [ __CLASS__, 'displaytitle' ],
                Parser::SFH_NO_HASH
            );
        }
        if ($wgAllowSlowParserFunctions) {
            $parser->setFunctionHook(
                'pagesinnamespace',
                [ __CLASS__, 'pagesinnamespace' ],
                Parser::SFH_NO_HASH
            );
        }
    }

    /**
     * @param Parser $parser
     * @param string $part1
     * @return array
     */
    public static function intFunction($parser, $part1 = '' /*, ... */)
    {
        if (strval($part1) !== '') {
            $args = array_slice(func_get_args(), 2);
            $message = wfMessage($part1, $args)
                ->inLanguage($parser->getOptions()->getUserLangObj());
            if (!$message->exists()) {
                // When message does not exists, the message name is surrounded by angle
                // and can result in a tag, therefore escape the angles
                return $message->escaped();
            }
            return [ $message->plain(), 'noparse' => false ];
        } else {
            return [ 'found' => false ];
        }
    }

    /**
     * @param Parser $parser
     * @param string $date
     * @param string $defaultPref
     *
     * @return string
     */
    public static function formatDate($parser, $date, $defaultPref = null)
    {
        $lang = $parser->getFunctionLang();
        $df = DateFormatter::getInstance($lang);

        $date = trim($date);

        $pref = $parser->getOptions()->getDateFormat();

        // Specify a different default date format other than the normal default
        // if the user has 'default' for their setting
        if ($pref == 'default' && $defaultPref) {
            $pref = $defaultPref;
        }

        $date = $df->reformat($pref, $date, [ 'match-whole' ]);
        return $date;
    }

    public static function ns($parser, $part1 = '')
    {
        global $wgContLang;
        if (intval($part1) || $part1 == "0") {
            $index = intval($part1);
        } else {
            $index = $wgContLang->getNsIndex(str_replace(' ', '_', $part1));
        }
        if ($index !== false) {
            return $wgContLang->getFormattedNsText($index);
        } else {
            return [ 'found' => false ];
        }
    }

    public static function nse($parser, $part1 = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * urlencodes a string according to one of three patterns: (bug 22474)
     *
     * By default (for HTTP "query" strings), spaces are encoded as '+'.
     * Or to encode a value for the HTTP "path", spaces are encoded as '%20'.
     * For links to "wiki"s, or similar software, spaces are encoded as '_',
     *
     * @param Parser $parser
     * @param string $s The text to encode.
     * @param string $arg (optional): The type of encoding.
     * @return string
     */
    public static function urlencode($parser, $s = '', $arg = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function lcfirst($parser, $s = '')
    {
        global $wgContLang;
        return $wgContLang->lcfirst($s);
    }

    public static function ucfirst($parser, $s = '')
    {
        global $wgContLang;
        return $wgContLang->ucfirst($s);
    }

    /**
     * @param Parser $parser
     * @param string $s
     * @return string
     */
    public static function lc($parser, $s = '')
    {
        global $wgContLang;
        return $parser->markerSkipCallback($s, [ $wgContLang, 'lc' ]);
    }

    /**
     * @param Parser $parser
     * @param string $s
     * @return string
     */
    public static function uc($parser, $s = '')
    {
        global $wgContLang;
        return $parser->markerSkipCallback($s, [ $wgContLang, 'uc' ]);
    }

    public static function localurl($parser, $s = '', $arg = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function localurle($parser, $s = '', $arg = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function fullurl($parser, $s = '', $arg = null)
    {
        return self::urlFunction('getFullURL', $s, $arg);
    }

    public static function fullurle($parser, $s = '', $arg = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function canonicalurl($parser, $s = '', $arg = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function canonicalurle($parser, $s = '', $arg = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function urlFunction($func, $s = '', $arg = null)
    {
        $title = Title::newFromText($s);
        # Due to order of execution of a lot of bits, the values might be encoded
        # before arriving here; if that's true, then the title can't be created
        # and the variable will fail. If we can't get a decent title from the first
        # attempt, url-decode and try for a second.
        if (is_null($title)) {
            $title = Title::newFromURL(urldecode($s));
        }
        if (!is_null($title)) {
            # Convert NS_MEDIA -> NS_FILE
            if ($title->getNamespace() == NS_MEDIA) {
                $title = Title::makeTitle(NS_FILE, $title->getDBkey());
            }
            if (!is_null($arg)) {
                $text = $title->$func($arg);
            } else {
                $text = $title->$func();
            }
            return $text;
        } else {
            return [ 'found' => false ];
        }
    }

    /**
     * @param Parser $parser
     * @param string $num
     * @param string $arg
     * @return string
     */
    public static function formatnum($parser, $num = '', $arg = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Parser $parser
     * @param string $case
     * @param string $word
     * @return string
     */
    public static function grammar($parser, $case = '', $word = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Parser $parser
     * @param string $username
     * @return string
     */
    public static function gender($parser, $username)
    {
        $forms = array_slice(func_get_args(), 2);

        // Some shortcuts to avoid loading user data unnecessarily
        if (count($forms) === 0) {
            return '';
        } elseif (count($forms) === 1) {
            return $forms[0];
        }

        $username = trim($username);

        // default
        $gender = User::getDefaultOption('gender');

        // allow prefix.
        $title = Title::newFromText($username);

        if ($title && $title->getNamespace() == NS_USER) {
            $username = $title->getText();
        }

        // check parameter, or use the ParserOptions if in interface message
        $user = User::newFromName($username);
        if ($user) {
            $gender = GenderCache::singleton()->getGenderOf($user, __METHOD__);
        } elseif ($username === '' && $parser->getOptions()->getInterfaceMessage()) {
            $gender = GenderCache::singleton()->getGenderOf($parser->getOptions()->getUser(), __METHOD__);
        }
        $ret = $parser->getFunctionLang()->gender($gender, $forms);
        return $ret;
    }

    /**
     * @param Parser $parser
     * @param string $text
     * @return string
     */
    public static function plural($parser, $text = '')
    {
        $forms = array_slice(func_get_args(), 2);
        $text = $parser->getFunctionLang()->parseFormattedNumber($text);
        settype($text, ctype_digit($text) ? 'int' : 'float');
        return $parser->getFunctionLang()->convertPlural($text, $forms);
    }

    /**
     * @param Parser $parser
     * @param string $text
     * @return string
     */
    public static function bidi($parser, $text = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Override the title of the page when viewed, provided we've been given a
     * title which will normalise to the canonical title
     *
     * @param Parser $parser Parent parser
     * @param string $text Desired title text
     * @param string $uarg
     * @return string
     */
    public static function displaytitle($parser, $text = '', $uarg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Matches the given value against the value of given magic word
     *
     * @param string $magicword Magic word key
     * @param string $value Value to match
     * @return bool True on successful match
     */
    private static function matchAgainstMagicword($magicword, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function formatRaw($num, $raw)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function numberofpages($parser, $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function numberofusers($parser, $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function numberofactiveusers($parser, $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function numberofarticles($parser, $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function numberoffiles($parser, $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function numberofadmins($parser, $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function numberofedits($parser, $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function pagesinnamespace($parser, $namespace = 0, $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function numberingroup($parser, $name = '', $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given a title, return the namespace name that would be given by the
     * corresponding magic word
     * Note: function name changed to "mwnamespace" rather than "namespace"
     * to not break PHP 5.3
     * @param Parser $parser
     * @param string $title
     * @return mixed|string
     */
    public static function mwnamespace($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function namespacee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function namespacenumber($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function talkspace($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function talkspacee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function subjectspace($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function subjectspacee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Functions to get and normalize pagenames, corresponding to the magic words
     * of the same names
     * @param Parser $parser
     * @param string $title
     * @return string
     */
    public static function pagename($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function pagenamee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function fullpagename($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function fullpagenamee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function subpagename($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function subpagenamee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function rootpagename($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function rootpagenamee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function basepagename($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function basepagenamee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function talkpagename($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function talkpagenamee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function subjectpagename($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public static function subjectpagenamee($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return the number of pages, files or subcats in the given category,
     * or 0 if it's nonexistent. This is an expensive parser function and
     * can't be called too many times per page.
     * @param Parser $parser
     * @param string $name
     * @param string $arg1
     * @param string $arg2
     * @return string
     */
    public static function pagesincategory($parser, $name = '', $arg1 = null, $arg2 = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return the size of the given page, or 0 if it's nonexistent.  This is an
     * expensive parser function and can't be called too many times per page.
     *
     * @param Parser $parser
     * @param string $page Name of page to check (Default: empty string)
     * @param string $raw Should number be human readable with commas or just number
     * @return string
     */
    public static function pagesize($parser, $page = '', $raw = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the requested protection level for the current page. This
     * is an expensive parser function and can't be called too many times
     * per page, unless the protection levels/expiries for the given title
     * have already been retrieved
     *
     * @param Parser $parser
     * @param string $type
     * @param string $title
     *
     * @return string
     */
    public static function protectionlevel($parser, $type = '', $title = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the requested protection expiry for the current page. This
     * is an expensive parser function and can't be called too many times
     * per page, unless the protection levels/expiries for the given title
     * have already been retrieved
     *
     * @param Parser $parser
     * @param string $type
     * @param string $title
     *
     * @return string
     */
    public static function protectionexpiry($parser, $type = '', $title = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gives language names.
     * @param Parser $parser
     * @param string $code Language code (of which to get name)
     * @param string $inLanguage Language code (in which to get name)
     * @return string
     */
    public static function language($parser, $code = '', $inLanguage = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Unicode-safe str_pad with the restriction that $length is forced to be <= 500
     * @param Parser $parser
     * @param string $string
     * @param int $length
     * @param string $padding
     * @param int $direction
     * @return string
     */
    public static function pad(
        $parser,
        $string,
        $length,
        $padding = '0',
        $direction = STR_PAD_RIGHT
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function padleft($parser, $string = '', $length = 0, $padding = '0')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function padright($parser, $string = '', $length = 0, $padding = '0')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Parser $parser
     * @param string $text
     * @return string
     */
    public static function anchorencode($parser, $text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function special($parser, $text)
    {
        list($page, $subpage) = SpecialPageFactory::resolveAlias($text);
        if ($page) {
            $title = SpecialPage::getTitleFor($page, $subpage);
            return $title->getPrefixedText();
        } else {
            // unknown special page, just use the given text as its title, if at all possible
            $title = Title::makeTitleSafe(NS_SPECIAL, $text);
            return $title ? $title->getPrefixedText() : self::special($parser, 'Badtitle');
        }
    }

    public static function speciale($parser, $text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Parser $parser
     * @param string $text The sortkey to use
     * @param string $uarg Either "noreplace" or "noerror" (in en)
     *   both suppress errors, and noreplace does nothing if
     *   a default sortkey already exists.
     * @return string
     */
    public static function defaultsort($parser, $text, $uarg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Usage {{filepath|300}}, {{filepath|nowiki}}, {{filepath|nowiki|300}}
     * or {{filepath|300|nowiki}} or {{filepath|300px}}, {{filepath|200x300px}},
     * {{filepath|nowiki|200x300px}}, {{filepath|200x300px|nowiki}}.
     *
     * @param Parser $parser
     * @param string $name
     * @param string $argA
     * @param string $argB
     * @return array|string
     */
    public static function filepath($parser, $name = '', $argA = '', $argB = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parser function to extension tag adaptor
     * @param Parser $parser
     * @param PPFrame $frame
     * @param PPNode[] $args
     * @return string
     */
    public static function tagObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Fetched the current revision of the given title and return this.
     * Will increment the expensive function count and
     * add a template link to get the value refreshed on changes.
     * For a given title, which is equal to the current parser title,
     * the revision object from the parser is used, when that is the current one
     *
     * @param Parser $parser
     * @param Title $title
     * @return Revision
     * @since 1.23
     */
    private static function getCachedRevisionObject($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the pageid of a specified page
     * @param Parser $parser
     * @param string $title Title to get the pageid from
     * @return int|null|string
     * @since 1.23
     */
    public static function pageid($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the id from the last revision of a specified page.
     * @param Parser $parser
     * @param string $title Title to get the id from
     * @return int|null|string
     * @since 1.23
     */
    public static function revisionid($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the day from the last revision of a specified page.
     * @param Parser $parser
     * @param string $title Title to get the day from
     * @return string
     * @since 1.23
     */
    public static function revisionday($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the day with leading zeros from the last revision of a specified page.
     * @param Parser $parser
     * @param string $title Title to get the day from
     * @return string
     * @since 1.23
     */
    public static function revisionday2($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the month with leading zeros from the last revision of a specified page.
     * @param Parser $parser
     * @param string $title Title to get the month from
     * @return string
     * @since 1.23
     */
    public static function revisionmonth($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the month from the last revision of a specified page.
     * @param Parser $parser
     * @param string $title Title to get the month from
     * @return string
     * @since 1.23
     */
    public static function revisionmonth1($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the year from the last revision of a specified page.
     * @param Parser $parser
     * @param string $title Title to get the year from
     * @return string
     * @since 1.23
     */
    public static function revisionyear($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the timestamp from the last revision of a specified page.
     * @param Parser $parser
     * @param string $title Title to get the timestamp from
     * @return string
     * @since 1.23
     */
    public static function revisiontimestamp($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the user from the last revision of a specified page.
     * @param Parser $parser
     * @param string $title Title to get the user from
     * @return string
     * @since 1.23
     */
    public static function revisionuser($parser, $title = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the sources of any cascading protection acting on a specified page.
     * Pages will not return their own title unless they transclude themselves.
     * This is an expensive parser function and can't be called too many times per page,
     * unless cascading protection sources for the page have already been loaded.
     *
     * @param Parser $parser
     * @param string $title
     *
     * @return string
     * @since 1.23
     */
    public static function cascadingsources($parser, $title = '')
    {
        $titleObject = Title::newFromText($title);
        if (!($titleObject instanceof Title)) {
            $titleObject = $parser->mTitle;
        }
        if ($titleObject->areCascadeProtectionSourcesLoaded()
            || $parser->incrementExpensiveFunctionCount()
        ) {
            $names = [];
            $sources = $titleObject->getCascadeProtectionSources();
            foreach ($sources[0] as $sourceTitle) {
                $names[] = $sourceTitle->getPrefixedText();
            }
            return implode($names, '|');
        }
        return '';
    }
}
