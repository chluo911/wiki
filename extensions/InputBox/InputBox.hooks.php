<?php
/**
 * Hooks for InputBox extension
 *
 * @file
 * @ingroup Extensions
 */

// InputBox hooks
class InputBoxHooks
{
    // Initialization
    public static function register(Parser &$parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // Prepend prefix to wpNewTitle if necessary
    public static function onSpecialPageBeforeExecute($special, $subPage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // Render the input box
    public static function render($input, $args, Parser $parser)
    {
        // Create InputBox
        $inputBox = new InputBox($parser);

        // Configure InputBox
        $inputBox->extractOptions($parser->replaceVariables($input));

        // Return output
        return $inputBox->render();
    }

    /**
     * <inputbox type=create...> sends requests with action=edit, and
     * possibly a &prefix=Foo.  So we pick that up here, munge prefix
     * and title together, and redirect back out to the real page
     * @param $output OutputPage
     * @param $article Article
     * @param $title Title
     * @param $user User
     * @param $request WebRequest
     * @param $wiki MediaWiki
     * @return bool
     */
    public static function onMediaWikiPerformAction(
        $output,
        $article,
        $title,
        $user,
        $request,
        $wiki
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
