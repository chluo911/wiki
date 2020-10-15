<?php
/**
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
 */

use Symfony\Component\Process\ProcessBuilder;

// @codingStandardsIgnoreStart
class SyntaxHighlight_GeSHi
{
    // @codingStandardsIgnoreEnd

    /** @var const The maximum number of lines that may be selected for highlighting. **/
    const HIGHLIGHT_MAX_LINES = 1000;

    /** @var const Maximum input size for the highlighter (100 kB). **/
    const HIGHLIGHT_MAX_BYTES = 102400;

    /** @var const CSS class for syntax-highlighted code. **/
    const HIGHLIGHT_CSS_CLASS = 'mw-highlight';

    /** @var const Cache version. Increment whenever the HTML changes. */
    const CACHE_VERSION = 1;

    /** @var array Mapping of MIME-types to lexer names. **/
    private static $mimeLexers = array(
        'text/javascript'  => 'javascript',
        'application/json' => 'javascript',
        'text/xml'         => 'xml',
    );

    public static function onSetup()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Pygments lexer name for a particular language.
     *
     * @param string $lang Language name.
     * @return string|null Lexer name, or null if no matching lexer.
     */
    private static function getLexer($lang)
    {
        static $lexers = null;

        if ($lang === null) {
            return null;
        }

        if (!$lexers) {
            $lexers = require __DIR__ . '/SyntaxHighlight_GeSHi.lexers.php';
        }

        $lexer = strtolower($lang);

        if (in_array($lexer, $lexers)) {
            return $lexer;
        }

        // Check if this is a GeSHi lexer name for which there exists
        // a compatible Pygments lexer with a different name.
        if (isset(GeSHi::$compatibleLexers[$lexer])) {
            $lexer = GeSHi::$compatibleLexers[$lexer];
            if (in_array($lexer, $lexers)) {
                return $lexer;
            }
        }

        return null;
    }

    /**
     * Register parser hook
     *
     * @param $parser Parser
     * @return bool
     */
    public static function onParserFirstCallInit(Parser &$parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parser hook
     *
     * @param string $text
     * @param array $args
     * @param Parser $parser
     * @return string
     */
    public static function parserHook($text, $args = array(), $parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Highlight a code-block using a particular lexer.
     *
     * @param string $code Code to highlight.
     * @param string|null $lang Language name, or null to use plain markup.
     * @param array $args Associative array of additional arguments.
     *  If it contains a 'line' key, the output will include line numbers.
     *  If it includes a 'highlight' key, the value will be parsed as a
     *  comma-separated list of lines and line-ranges to highlight.
     *  If it contains a 'start' key, the value will be used as the line at which to
     *  start highlighting.
     *  If it contains a 'inline' key, the output will not be wrapped in `<div><pre/></div>`.
     * @return Status Status object, with HTML representing the highlighted
     *  code as its value.
     */
    public static function highlight($code, $lang = null, $args = array())
    {
        global $wgPygmentizePath;

        $status = new Status;

        $lexer = self::getLexer($lang);
        if ($lexer === null && $lang !== null) {
            $status->warning('syntaxhighlight-error-unknown-language', $lang);
        }

        $length = strlen($code);
        if (strlen($code) > self::HIGHLIGHT_MAX_BYTES) {
            $status->warning(
                'syntaxhighlight-error-exceeds-size-limit',
                $length,
                self::HIGHLIGHT_MAX_BYTES
            );
            $lexer = null;
        }

        if (wfShellExecDisabled() !== false) {
            $status->warning('syntaxhighlight-error-pygments-invocation-failure');
            wfWarn(
                'MediaWiki determined that it cannot invoke Pygments. ' .
                'As a result, SyntaxHighlight_GeSHi will not perform any syntax highlighting. ' .
                'See the debug log for details: ' .
                'https://www.mediawiki.org/wiki/Manual:$wgDebugLogFile'
            );
            $lexer = null;
        }

        $inline = isset($args['inline']);

        if ($lexer === null) {
            if ($inline) {
                $status->value = htmlspecialchars(trim($code), ENT_NOQUOTES);
            } else {
                $pre = Html::element('pre', array(), $code);
                $status->value = Html::rawElement('div', array( 'class' => self::HIGHLIGHT_CSS_CLASS ), $pre);
            }
            return $status;
        }

        $options = array(
            'cssclass' => self::HIGHLIGHT_CSS_CLASS,
            'encoding' => 'utf-8',
        );

        // Line numbers
        if (isset($args['line'])) {
            $options['linenos'] = 'inline';
        }

        if ($lexer === 'php' && strpos($code, '<?php') === false) {
            $options['startinline'] = 1;
        }

        // Highlight specific lines
        if (isset($args['highlight'])) {
            $lines = self::parseHighlightLines($args['highlight']);
            if (count($lines)) {
                $options['hl_lines'] = implode(' ', $lines);
            }
        }

        // Starting line number
        if (isset($args['start'])) {
            $options['linenostart'] = $args['start'];
        }

        if ($inline) {
            $options['nowrap'] = 1;
        }

        $cache = ObjectCache::getMainWANInstance();
        $cacheKey = self::makeCacheKey($code, $lexer, $options);
        $output = $cache->get($cacheKey);

        if ($output === false) {
            $optionPairs = array();
            foreach ($options as $k => $v) {
                $optionPairs[] = "{$k}={$v}";
            }
            $builder = new ProcessBuilder();
            $builder->setPrefix($wgPygmentizePath);
            $process = $builder
                ->add('-l')->add($lexer)
                ->add('-f')->add('html')
                ->add('-O')->add(implode(',', $optionPairs))
                ->getProcess();

            $process->setInput($code);
            $process->run();

            if (!$process->isSuccessful()) {
                $status->warning('syntaxhighlight-error-pygments-invocation-failure');
                wfWarn('Failed to invoke Pygments: ' . $process->getErrorOutput());
                $status->value = self::highlight($code, null, $args)->getValue();
                return $status;
            }

            $output = $process->getOutput();
            $cache->set($cacheKey, $output);
        }

        if ($inline) {
            $output = trim($output);
        }

        $status->value = $output;
        return $status;
    }

    /**
     * Construct a cache key for the results of a Pygments invocation.
     *
     * @param string $code Code to be highlighted.
     * @param string $lexer Lexer name.
     * @param array $options Options array.
     * @return string Cache key.
     */
    private static function makeCacheKey($code, $lexer, $options)
    {
        $optionString = FormatJson::encode($options, false, FormatJson::ALL_OK);
        $hash = md5("{$code}|{$lexer}|{$optionString}|" . self::CACHE_VERSION);
        if (function_exists('wfGlobalCacheKey')) {
            return wfGlobalCacheKey('highlight', $hash);
        } else {
            return 'highlight:' . $hash;
        }
    }

    /**
     * Take an input specifying a list of lines to highlight, returning
     * a raw list of matching line numbers.
     *
     * Input is comma-separated list of lines or line ranges.
     *
     * @param string $lineSpec
     * @return int[] Line numbers.
     */
    protected static function parseHighlightLines($lineSpec)
    {
        $lines = array();
        $values = array_map('trim', explode(',', $lineSpec));
        foreach ($values as $value) {
            if (ctype_digit($value)) {
                $lines[] = (int)$value;
            } elseif (strpos($value, '-') !== false) {
                list($start, $end) = array_map('trim', explode('-', $value));
                if (self::validHighlightRange($start, $end)) {
                    for ($i = intval($start); $i <= $end; $i++) {
                        $lines[] = $i;
                    }
                }
            }
            if (count($lines) > self::HIGHLIGHT_MAX_LINES) {
                $lines = array_slice($lines, 0, self::HIGHLIGHT_MAX_LINES);
                break;
            }
        }
        return $lines;
    }

    /**
     * Validate a provided input range
     * @param $start
     * @param $end
     * @return bool
     */
    protected static function validHighlightRange($start, $end)
    {
        // Since we're taking this tiny range and producing a an
        // array of every integer between them, it would be trivial
        // to DoS the system by asking for a huge range.
        // Impose an arbitrary limit on the number of lines in a
        // given range to reduce the impact.
        return
            ctype_digit($start) &&
            ctype_digit($end) &&
            $start > 0 &&
            $start < $end &&
            $end - $start < self::HIGHLIGHT_MAX_LINES;
    }

    /**
     * Hook into Content::getParserOutput to provide syntax highlighting for
     * script content.
     *
     * @return bool
     * @since MW 1.21
     */
    public static function onContentGetParserOutput(
        Content $content,
        Title $title,
        $revId,
        ParserOptions $options,
        $generateHtml,
        ParserOutput &$output
    )
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Hook to provide syntax highlighting for API pretty-printed output
     *
     * @param IContextSource $context
     * @param string $text
     * @param string $mime
     * @param string $format
     * @since MW 1.24
     */
    public static function onApiFormatHighlight(IContextSource $context, $text, $mime, $format)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Reject parser cache values that are for GeSHi since those
     * ResourceLoader modules no longer exist
     *
     * @param ParserOutput $parserOutput
     * @param WikiPage|Article $page
     * @param ParserOptions $popts
     * @return bool
     */
    public static function onRejectParserCacheValue(
        ParserOutput $parserOutput,
        $page,
        ParserOptions $popts
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** Backward-compatibility shim for extensions.  */
    public static function prepare($text, $lang)
    {
        wfDeprecated(__METHOD__);
        return new GeSHi(self::highlight($text, $lang)->getValue());
    }

    /** Backward-compatibility shim for extensions. */
    public static function buildHeadItem($geshi)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
