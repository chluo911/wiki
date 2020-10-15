<?php

class ExtParserFunctions
{
    public static $mExprParser;
    public static $mTimeCache = array();
    public static $mTimeChars = 0;
    public static $mMaxTimeChars = 6000; # ~10 seconds

    /**
     * @param $parser Parser
     * @return bool
     */
    public static function clearState($parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Register ParserClearState hook.
     * We defer this until needed to avoid the loading of the code of this file
     * when no parser function is actually called.
     */
    public static function registerClearHook()
    {
        static $done = false;
        if (!$done) {
            global $wgHooks;
            $wgHooks['ParserClearState'][] = __CLASS__ . '::clearState';
            $done = true;
        }
    }

    /**
     * @return ExprParser
     */
    public static function &getExprParser()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $expr string
     * @return string
     */
    public static function expr($parser, $expr = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $expr string
     * @param $then string
     * @param $else string
     * @return string
     */
    public static function ifexpr($parser, $expr = '', $then = '', $else = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $args array
     * @return string
     */
    public static function ifexprObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $args array
     * @return string
     */
    public static function ifObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $args array
     * @return string
     */
    public static function ifeqObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $test string
     * @param $then string
     * @param $else bool
     * @return bool|string
     */
    public static function iferror($parser, $test = '', $then = '', $else = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $args array
     * @return string
     */
    public static function iferrorObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $args
     * @return string
     */
    public static function switchObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the absolute path to a subpage, relative to the current article
     * title. Treats titles as slash-separated paths.
     *
     * Following subpage link syntax instead of standard path syntax, an
     * initial slash is treated as a relative path, and vice versa.
     *
     * @param $parser Parser
     * @param $to string
     * @param $from string
     *
     * @return string
     */
    public static function rel2abs($parser, $to = '', $from = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $titletext string
     * @param $then string
     * @param $else string
     *
     * @return string
     */
    public static function ifexistCommon($parser, $frame, $titletext = '', $then = '', $else = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $args array
     * @return string
     */
    public static function ifexistObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $format string
     * @param $date string
     * @param $language string
     * @param $local string|bool
     * @return string
     */
    public static function timeCommon($parser, $frame = null, $format = '', $date = '', $language = '', $local = false)
    {
        global $wgLocaltimezone;
        self::registerClearHook();
        if ($date === '') {
            $cacheKey = $parser->getOptions()->getTimestamp();
            $timestamp = new MWTimestamp($cacheKey);
            $date = $timestamp->getTimestamp(TS_ISO_8601);
            $useTTL = true;
        } else {
            $cacheKey = $date;
            $useTTL = false;
        }
        if (isset(self::$mTimeCache[$format][$cacheKey][$language][$local])) {
            $cachedVal = self::$mTimeCache[$format][$cacheKey][$language][$local];
            if ($useTTL && $cachedVal[1] !== null && $frame && is_callable(array( $frame, 'setTTL' ))) {
                $frame->setTTL($cachedVal[1]);
            }
            return $cachedVal[0];
        }

        # compute the timestamp string $ts
        # PHP >= 5.2 can handle dates before 1970 or after 2038 using the DateTime object

        $invalidTime = false;

        # the DateTime constructor must be used because it throws exceptions
        # when errors occur, whereas date_create appears to just output a warning
        # that can't really be detected from within the code
        try {

            # Default input timezone is UTC.
            $utc = new DateTimeZone('UTC');

            # Correct for DateTime interpreting 'XXXX' as XX:XX o'clock
            if (preg_match('/^[0-9]{4}$/', $date)) {
                $date = '00:00 '.$date;
            }

            # Parse date
            # UTC is a default input timezone.
            $dateObject = new DateTime($date, $utc);

            # Set output timezone.
            if ($local) {
                if (isset($wgLocaltimezone)) {
                    $tz = new DateTimeZone($wgLocaltimezone);
                } else {
                    $tz = new DateTimeZone(date_default_timezone_get());
                }
            } else {
                $tz = $utc;
            }
            $dateObject->setTimezone($tz);
            # Generate timestamp
            $ts = $dateObject->format('YmdHis');
        } catch (Exception $ex) {
            $invalidTime = true;
        }

        $ttl = null;
        # format the timestamp and return the result
        if ($invalidTime) {
            $result = '<strong class="error">' . wfMessage('pfunc_time_error')->inContentLanguage()->escaped() . '</strong>';
        } else {
            self::$mTimeChars += strlen($format);
            if (self::$mTimeChars > self::$mMaxTimeChars) {
                return '<strong class="error">' . wfMessage('pfunc_time_too_long')->inContentLanguage()->escaped() . '</strong>';
            } else {
                if ($ts < 0) { // Language can't deal with BC years
                    return '<strong class="error">' . wfMessage('pfunc_time_too_small')->inContentLanguage()->escaped() . '</strong>';
                } elseif ($ts < 100000000000000) { // Language can't deal with years after 9999
                    if ($language !== '' && Language::isValidBuiltInCode($language)) {
                        // use whatever language is passed as a parameter
                        $langObject = Language::factory($language);
                    } else {
                        // use wiki's content language
                        $langObject = $parser->getFunctionLang();
                        StubObject::unstub($langObject); // $ttl is passed by reference, which doesn't work right on stub objects
                    }
                    $result = $langObject->sprintfDate($format, $ts, $tz, $ttl);
                } else {
                    return '<strong class="error">' . wfMessage('pfunc_time_too_big')->inContentLanguage()->escaped() . '</strong>';
                }
            }
        }
        self::$mTimeCache[$format][$cacheKey][$language][$local] = array( $result, $ttl );
        if ($useTTL && $ttl !== null && $frame && is_callable(array( $frame, 'setTTL' ))) {
            $frame->setTTL($ttl);
        }
        return $result;
    }

    /**
     * @param $parser Parser
     * @param $format string
     * @param $date string
     * @param $language string
     * @param $local string|bool
     * @return string
     */
    public static function time($parser, $format = '', $date = '', $language = '', $local = false)
    {
        return self::timeCommon($parser, null, $format, $date, $language, $local);
    }


    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $args array
     * @return string
     */
    public static function timeObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $format string
     * @param $date string
     * @param $language string
     * @return string
     */
    public static function localTime($parser, $format = '', $date = '', $language = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @param $frame PPFrame
     * @param $args array
     * @return string
     */
    public static function localTimeObj($parser, $frame, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Obtain a specified number of slash-separated parts of a title,
     * e.g. {{#titleparts:Hello/World|1}} => "Hello"
     *
     * @param $parser Parser Parent parser
     * @param $title string Title to split
     * @param $parts int Number of parts to keep
     * @param $offset int Offset starting at 1
     * @return string
     */
    public static function titleparts($parser, $title = '', $parts = 0, $offset = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *  Verifies parameter is less than max string length.
     * @param $text
     * @return bool
     */
    private static function checkLength($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates error message.  Called when string is too long.
     * @return string
     */
    private static function tooLongError()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {{#len:string}}
     *
     * Reports number of characters in string.
     * @param $parser Parser
     * @param $inStr string
     * @return int
     */
    public static function runLen($parser, $inStr = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {{#pos: string | needle | offset}}
     *
     * Finds first occurrence of "needle" in "string" starting at "offset".
     *
     * Note: If the needle is an empty string, single space is used instead.
     * Note: If the needle is not found, empty string is returned.
     * @param $parser Parser
     * @param $inStr string
     * @param $inNeedle int|string
     * @param $inOffset int
     * @return int|string
     */
    public static function runPos($parser, $inStr = '', $inNeedle = '', $inOffset = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {{#rpos: string | needle}}
     *
     * Finds last occurrence of "needle" in "string".
     *
     * Note: If the needle is an empty string, single space is used instead.
     * Note: If the needle is not found, -1 is returned.
     * @param $parser Parser
     * @param $inStr string
     * @param $inNeedle int|string
     * @return int|string
     */
    public static function runRPos($parser, $inStr = '', $inNeedle = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {{#sub: string | start | length }}
     *
     * Returns substring of "string" starting at "start" and having
     * "length" characters.
     *
     * Note: If length is zero, the rest of the input is returned.
     * Note: A negative value for "start" operates from the end of the
     *   "string".
     * Note: A negative value for "length" returns a string reduced in
     *   length by that amount.
     *
     * @param $parser Parser
     * @param $inStr string
     * @param $inStart int
     * @param $inLength int
     * @return string
     */
    public static function runSub($parser, $inStr = '', $inStart = 0, $inLength = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {{#count: string | substr }}
     *
     * Returns number of occurrences of "substr" in "string".
     *
     * Note: If "substr" is empty, a single space is used.
     * @param $parser Parser
     * @param $inStr string
     * @param $inSubStr string
     * @return int|string
     */
    public static function runCount($parser, $inStr = '', $inSubStr = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {{#replace:string | from | to | limit }}
     *
     * Replaces each occurrence of "from" in "string" with "to".
     * At most "limit" replacements are performed.
     *
     * Note: Armored against replacements that would generate huge strings.
     * Note: If "from" is an empty string, single space is used instead.
     * @param $parser Parser
     * @param $inStr string
     * @param $inReplaceFrom string
     * @param $inReplaceTo string
     * @param $inLimit int
     * @return mixed|string
     */
    public static function runReplace(
        $parser,
        $inStr = '',
        $inReplaceFrom = '',
        $inReplaceTo = '',
        $inLimit = -1
    )
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    /**
     * {{#explode:string | delimiter | position | limit}}
     *
     * Breaks "string" into chunks separated by "delimiter" and returns the
     * chunk identified by "position".
     *
     * Note: Negative position can be used to specify tokens from the end.
     * Note: If the divider is an empty string, single space is used instead.
     * Note: Empty string is returned if there are not enough exploded chunks.
     * @param $parser Parser
     * @param $inStr string
     * @param $inDiv string
     * @param $inPos int
     * @param $inLim int|null
     * @return string
     */
    public static function runExplode($parser, $inStr = '', $inDiv = '', $inPos = 0, $inLim = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {{#urldecode:string}}
     *
     * Decodes URL-encoded (like%20that) strings.
     * @param $parser Parser
     * @param $inStr string
     * @return string
     */
    public static function runUrlDecode($parser, $inStr = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Take a PPNode (-ish thing), expand it, remove entities, and trim.
     *
     * For use when doing string comparisions, where user expects entities
     * to be equal for what they stand for (e.g. comparisions with {{PAGENAME}})
     *
     * @param $obj PPNode|string Thing to expand
     * @param $frame PPFrame
     * @param &$trimExpanded String Expanded and trimmed version of PPNode, but with char refs intact
     * @return String The trimmed, expanded and entity reference decoded version of the PPNode
     */
    private static function decodeTrimExpand($obj, $frame, &$trimExpanded = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
