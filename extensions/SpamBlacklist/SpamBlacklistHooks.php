<?php

use MediaWiki\Auth\AuthManager;

/**
 * Hooks for the spam blacklist extension
 */
class SpamBlacklistHooks
{
    public static function registerExtension()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Hook function for EditFilterMergedContent
     *
     * @param IContextSource $context
     * @param Content        $content
     * @param Status         $status
     * @param string         $summary
     * @param User           $user
     * @param bool           $minoredit
     *
     * @return bool
     */
    public static function filterMergedContent(IContextSource $context, Content $content, Status $status, $summary, User $user, $minoredit)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function onParserOutputStashForEdit(
        WikiPage $page,
        Content $content,
        ParserOutput $output
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify that the user can send emails
     *
     * @param $user User
     * @param $hookErr array
     * @return bool
     */
    public static function userCanSendEmail(&$user, &$hookErr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Processes new accounts for valid email addresses
     *
     * @param $user User
     * @param $abortError
     * @return bool
     */
    public static function abortNewAccount($user, &$abortError)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Hook function for EditFilter
     * Confirm that a local blacklist page being saved is valid,
     * and toss back a warning to the user if it isn't.
     *
     * @param $editPage EditPage
     * @param $text string
     * @param $section string
     * @param $hookError string
     * @return bool
     */
    public static function validate($editPage, $text, $section, &$hookError)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Hook function for PageContentSaveComplete
     * Clear local spam blacklist caches on page save.
     *
     * @param Page $wikiPage
     * @param User     $user
     * @param Content  $content
     * @param string   $summary
     * @param bool     $isMinor
     * @param bool     $isWatch
     * @param string   $section
     * @param int      $flags
     * @param Revision|null $revision
     * @param Status   $status
     * @param int      $baseRevId
     *
     * @return bool
     */
    public static function pageSaveContent(
        Page $wikiPage,
        User $user,
        Content $content,
        $summary,
        $isMinor,
        $isWatch,
        $section,
        $flags,
        $revision,
        Status $status,
        $baseRevId
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param UploadBase $upload
     * @param User $user
     * @param array $props
     * @param string $comment
     * @param string $pageText
     * @param array|ApiMessage &$error
     * @return bool
     */
    public static function onUploadVerifyUpload(UploadBase $upload, User $user, array $props, $comment, $pageText, &$error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param WikiPage $article
     * @param User $user
     * @param $reason
     * @param $error
     */
    public static function onArticleDelete(WikiPage &$article, User &$user, &$reason, &$error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param WikiPage $page
     * @param User $user
     * @param $reason
     * @param $id
     * @param Content|null $content
     * @param LogEntry $logEntry
     */
    public static function onArticleDeleteComplete(
        &$page,
        User &$user,
        $reason,
        $id,
        Content $content = null,
        LogEntry $logEntry
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
