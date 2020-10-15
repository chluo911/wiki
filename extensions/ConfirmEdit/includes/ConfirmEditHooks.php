<?php

use MediaWiki\Auth\AuthManager;

class ConfirmEditHooks
{
    protected static $instanceCreated = false;

    /**
     * Get the global Captcha instance
     *
     * @return SimpleCaptcha
     */
    public static function getInstance()
    {
        global $wgCaptcha, $wgCaptchaClass;

        if (!static::$instanceCreated) {
            static::$instanceCreated = true;
            $wgCaptcha = new $wgCaptchaClass;
        }

        return $wgCaptcha;
    }

    /**
     * Registers conditional hooks.
     */
    public static function onRegistration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function confirmEditMerged($context, $content, $status, $summary, $user, $minorEdit)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * PageContentSaveComplete hook handler.
     * Clear IP whitelist cache on page saves for [[MediaWiki:captcha-ip-whitelist]].
     *
     * @param Page     $wikiPage
     * @param User     $user
     * @param Content  $content
     * @param string   $summary
     * @param bool     $isMinor
     * @param bool     $isWatch
     * @param string   $section
     * @param int      $flags
     * @param int      $revision
     * @param Status   $status
     * @param int      $baseRevId
     *
     * @return bool true
     */
    public static function onPageContentSaveComplete(
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

    public static function confirmEditPage($editpage, $buttons, $tabindex)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function showEditFormFields(&$editPage, &$out)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function addNewAccountApiForm($apiModule, $loginForm)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function addNewAccountApiResult($apiModule, $loginPage, &$result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function injectUserCreate(&$template)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function confirmUserCreate($u, &$message, &$status = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function triggerUserLogin($user, $password, $retval)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function injectUserLogin(&$template)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function confirmUserLogin($u, $pass, &$retval)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function injectEmailUser(&$form)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function confirmEmailUser($from, $to, $subject, $text, &$error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // Default $flags to 1 for backwards-compatible behavior
    public static function APIGetAllowedParams(&$module, &$params, $flags = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function onAuthChangeFormFields(
        array $requests,
        array $fieldInfo,
        array &$formDescriptor,
        $action
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set up $wgWhitelistRead
     */
    public static function confirmEditSetup()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * TitleReadWhitelist hook handler.
     *
     * @param Title $title
     * @param User $user
     * @param $whitelisted
     */
    public static function onTitleReadWhitelist(Title $title, User $user, &$whitelisted)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *
     * Callback for extension.json of FancyCaptcha to set a default captcha directory,
     * which depends on wgUploadDirectory
     */
    public static function onFancyCaptchaSetup()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Callback for extension.json of ReCaptcha to require the recaptcha library php file.
     * FIXME: This should be done in a better way, e.g. only load the libraray, if really needed.
     */
    public static function onReCaptchaSetup()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extension function, moved from ReCaptcha.php when that was decimated.
     * Make sure the keys are defined.
     */
    public static function efReCaptcha()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * AlternateEditPreview hook handler.
     *
     * Replaces the preview with a check of all lines for the [[MediaWiki:Captcha-ip-whitelist]]
     * interface message, if it validates as an IP address.
     *
     * @param EditPage $editor
     * @param Content &$content
     * @param string &$html
     * @param ParserOutput &$po
     * @return bool
     */
    public static function onAlternateEditPreview(EditPage $editor, &$content, &$html, &$po)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
