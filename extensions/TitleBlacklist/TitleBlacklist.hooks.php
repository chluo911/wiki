<?php
/**
 * Hooks for Title Blacklist
 * @author Victor Vasiliev
 * @copyright © 2007-2010 Victor Vasiliev et al
 * @license GNU General Public License 2.0 or later
 */

use MediaWiki\Auth\AuthManager;

/**
 * Hooks for the TitleBlacklist class
 *
 * @ingroup Extensions
 */
class TitleBlacklistHooks
{

    /**
     * Called right after configuration variables have been set.
     */
    public static function onRegistration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * getUserPermissionsErrorsExpensive hook
     *
     * @param $title Title
     * @param $user User
     * @param $action
     * @param $result
     * @return bool
     */
    public static function userCan($title, $user, $action, &$result)
    {
        # Some places check createpage, while others check create.
        # As it stands, upload does createpage, but normalize both
        # to the same action, to stop future similar bugs.
        if ($action === 'createpage' || $action === 'createtalk') {
            $action = 'create';
        }
        if ($action == 'create' || $action == 'edit' || $action == 'upload') {
            $blacklisted = TitleBlacklist::singleton()->userCannot($title, $user, $action);
            if ($blacklisted instanceof TitleBlacklistEntry) {
                $errmsg = $blacklisted->getErrorMessage('edit');
                $params = array(
                    $blacklisted->getRaw(),
                    $title->getFullText()
                );
                ApiResult::setIndexedTagName($params, 'param');
                $result = ApiMessage::create(
                    wfMessage(
                        $errmsg,
                        htmlspecialchars($blacklisted->getRaw()),
                        $title->getFullText()
                    ),
                    'titleblacklist-forbidden',
                    array(
                        'message' => array(
                            'key' => $errmsg,
                            'params' => $params,
                        ),
                        'line' => $blacklisted->getRaw(),
                        // As $errmsg usually represents a non-default message here, and ApiBase uses
                        // ->inLanguage( 'en' )->useDatabase( false ) for all messages, it will never result in
                        // useful 'info' text in the API. Try this, extra data seems to override the default.
                        'info' => 'TitleBlacklist prevents this title from being created',
                    )
                );
                return false;
            }
        }
        return true;
    }

    /**
     * Display a notice if a user is only able to create or edit a page
     * because they have tboverride.
     *
     * @param Title $title
     * @param integer $oldid
     * @param array &$notices
     */
    public static function displayBlacklistOverrideNotice(Title $title, $oldid, array &$notices)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * MovePageCheckPermissions hook (1.25+)
     *
     * @param Title $oldTitle
     * @param Title $newTitle
     * @param User $user
     * @param $reason
     * @param Status $status
     * @return bool
     */
    public static function onMovePageCheckPermissions(Title $oldTitle, Title $newTitle, User $user, $reason, Status $status)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check whether a user name is acceptable,
     * and set a message if unacceptable.
     *
     * Used by abortNewAccount and centralAuthAutoCreate.
     * May also be called externally to vet alternate account names.
     *
     * @return bool Acceptable
     */
    public static function acceptNewUserName($userName, $permissionsUser, &$err, $override = true, $log = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check whether a user name is acceptable for account creation or autocreation, and explain
     * why not if that's the case.
     *
     * @param string $userName
     * @param User $creatingUser
     * @param bool $override Should the test be skipped, if the user has sufficient privileges?
     * @param bool $log Log blacklist hits to Special:Log
     * @return StatusValue
     */
    public static function testUserName($userName, User $creatingUser, $override = true, $log = false)
    {
        $title = Title::makeTitleSafe(NS_USER, $userName);
        $blacklisted = TitleBlacklist::singleton()->userCannot(
            $title,
            $creatingUser,
            'new-account',
            $override
        );
        if ($blacklisted instanceof TitleBlacklistEntry) {
            if ($log) {
                self::logFilterHitUsername($creatingUser, $title, $blacklisted->getRaw());
            }
            $message = $blacklisted->getErrorMessage('new-account');
            $params = [
                $blacklisted->getRaw(),
                $userName,
            ];
            ApiResult::setIndexedTagName($params, 'param');
            return StatusValue::newFatal(ApiMessage::create(
                [ $message, $blacklisted->getRaw(), $userName ],
                'titleblacklist-forbidden',
                [
                    'message' => [
                        'key' => $message,
                        'params' => $params,
                    ],
                    'line' => $blacklisted->getRaw(),
                    // The text of the message probably isn't useful API info, so do this instead
                    'info' => 'TitleBlacklist prevents this username from being created',
                ]
            ));
        }
        return StatusValue::newGood();
    }

    /**
     * AbortNewAccount hook
     *
     * @param User $user
     * @param string &$message
     * @param Status $status
     * @return bool
     */
    public static function abortNewAccount($user, &$message, &$status)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * AbortAutoAccount hook
     *
     * @param User $user
     * @param string &$message
     * @return bool
     */
    public static function abortAutoAccount($user, &$message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * EditFilter hook
     *
     * @param $editor EditPage
     */
    public static function validateBlacklist($editor, $text, $section, &$error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * PageContentSaveComplete hook
     *
     * @param Article $article
     */
    public static function clearBlacklist(
        &$article,
        &$user,
        $content,
        $summary,
        $isminor,
        $iswatch,
        $section
    )
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** UserCreateForm hook based on the one from AntiSpoof extension */
    public static function addOverrideCheckbox(&$template)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param ApiBase $module
     * @param array $params
     * @return bool
     */
    public static function onAPIGetAllowedParams(ApiBase &$module, array &$params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Pass API parameter on to the login form when using
     * API account creation.
     *
     * @param ApiBase $apiModule
     * @param LoginForm $loginForm
     * @return bool Always true
     */
    public static function onAddNewAccountApiForm(ApiBase $apiModule, LoginForm $loginForm)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Logs the filter username hit to Special:Log if
     * $wgTitleBlacklistLogHits is enabled.
     *
     * @param User $user
     * @param Title $title
     * @param string $entry
     */
    public static function logFilterHitUsername($user, $title, $entry)
    {
        global $wgTitleBlacklistLogHits;
        if ($wgTitleBlacklistLogHits) {
            $logEntry = new ManualLogEntry('titleblacklist', 'hit-username');
            $logEntry->setPerformer($user);
            $logEntry->setTarget($title);
            $logEntry->setParameters(array(
                '4::entry' => $entry,
            ));
            $logid = $logEntry->insert();
            $logEntry->publish($logid);
        }
    }

    /**
     * External Lua library for Scribunto
     *
     * @param string $engine
     * @param array $extraLibraries
     * @return bool
     */
    public static function scribuntoExternalLibraries($engine, array &$extraLibraries)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
