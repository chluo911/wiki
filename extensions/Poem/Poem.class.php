<?php
/**
 * This class handles formatting poems in WikiText, specifically anything within
 * <poem></poem> tags.
 */
class Poem
{
    /**
     * Bind the renderPoem function to the <poem> tag
     * @param Parser $parser
     * @return bool true
     */
    public static function init(&$parser)
    {
        $parser->setHook('poem', array( 'Poem', 'renderPoem' ));
        return true;
    }

    /**
     * Parse the text into proper poem format
     * @param string $in The text inside the poem tag
     * @param array $param
     * @param Parser $parser
     * @param boolean $frame
     * @return string
     */
    public static function renderPoem($in, $param = array(), $parser = null, $frame = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Callback for preg_replace_callback() that replaces spaces with non-breaking spaces
     * @param array $m Matches from the regular expression
     *   - $m[1] consists of 1 or more spaces
     * @return mixed
     */
    protected static function replaceSpaces($m)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Callback for preg_replace_callback() that wraps content in an indented span
     * @param array $m Matches from the regular expression
     *   - $m[1] consists of 1 or more colons
     *   - $m[2] consists of the text after the colons
     * @return string
     */
    protected static function indentVerse($m)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
