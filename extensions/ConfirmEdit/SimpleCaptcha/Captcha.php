<?php

use MediaWiki\Auth\AuthenticationRequest;
use MediaWiki\Logger\LoggerFactory;

/**
 * Demo CAPTCHA (not for production usage) and base class for real CAPTCHAs
 */
class SimpleCaptcha
{
    protected static $messagePrefix = 'captcha-';

    /** @var boolean|null Was the CAPTCHA already passed and if yes, with which result? */
    private $captchaSolved = null;

    /**
     * Used to select the right message.
     * One of sendmail, createaccount, badlogin, edit, create, addurl.
     * @var string
     */
    protected $action;

    /** @var string Used in log messages. */
    protected $trigger;

    public function setAction($action)
    {
        $this->action = $action;
    }

    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;
    }

    /**
     * Return the error from the last passCaptcha* call.
     * Not implemented but needed by some child classes.
     * @return
     */
    public function getError()
    {
        return null;
    }

    /**
     * Returns an array with 'question' and 'answer' keys.
     * Subclasses might use different structure.
     * Since MW 1.27 all subclasses must implement this method.
     * @return array
     */
    public function getCaptcha()
    {
        $a = mt_rand(0, 100);
        $b = mt_rand(0, 10);

        /* Minus sign is used in the question. UTF-8,
           since the api uses text/plain, not text/html */
        $op = mt_rand(0, 1) ? '+' : 'âˆ?';

        // No space before and after $op, to ensure correct
        // directionality.
        $test = "$a$op$b";
        $answer = ($op == '+') ? ($a + $b) : ($a - $b);
        return [ 'question' => $test, 'answer' => $answer ];
    }

    public function addCaptchaAPI(&$resultArr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Describes the captcha type for API clients.
     * @return array An array with keys 'type' and 'mime', and possibly other
     *   implementation-specific
     */
    public function describeCaptchaType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Insert a captcha prompt into the edit form.
     * This sample implementation generates a simple arithmetic operation;
     * it would be easy to defeat by machine.
     *
     * Override this!
     *
     * It is not guaranteed that the CAPTCHA will load synchronously with the main page
     * content. So you can not rely on registering handlers before page load. E.g.:
     *
     * NOT SAFE: $( window ).on( 'load', handler )
     * SAFE: $( handler )
     *
     * However, if the HTML is loaded dynamically via AJAX, the following order will
     * be used.
     *
     * headitems => modulestyles + modules => add main HTML to DOM when modulestyles +
     * modules are ready.
     *
     * @param int $tabIndex Tab index to start from
     *
     * @return array Associative array with the following keys:
     *   string html - Main HTML
     *   array modules (optional) - Array of ResourceLoader module names
     *   array modulestyles (optional) - Array of ResourceLoader module names to be
     *		included as style-only modules.
     *   array headitems (optional) - Head items (see OutputPage::addHeadItems), as a numeric array
     * 		of raw HTML strings. Do not use unless no other option is feasible.
     */
    public function getFormInformation($tabIndex = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Uses getFormInformation() to get the CAPTCHA form and adds it to the given
     * OutputPage object.
     *
     * @param OutputPage $out The OutputPage object to which the form should be added
     * @param integer $tabIndex See self::getFormInformation
     */
    public function addFormToOutput(OutputPage $out, $tabIndex = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Processes the given $formInformation array and adds the options (see getFormInformation())
     * to the given OutputPage object.
     *
     * @param OutputPage $out The OutputPage object to which the form should be added
     * @param array $formInformation
     */
    public function addFormInformationToOutput(OutputPage $out, array $formInformation)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $captchaData Data given by getCaptcha
     * @param string $id ID given by storeCaptcha
     * @return string Description of the captcha. Format is not specified; could be text, HTML, URL...
     */
    public function getCaptchaInfo($captchaData, $id)
    {
        return $captchaData['question'] . ' =';
    }

    /**
     * Show error message for missing or incorrect captcha on EditPage.
     * @param EditPage $editPage
     * @param OutputPage $out
     */
    public function showEditFormFields(&$editPage, &$out)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Insert the captcha prompt into an edit form.
     * @param EditPage $editPage
     */
    public function editShowCaptcha($editPage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Show a message asking the user to enter a captcha on edit
     * The result will be treated as wiki text
     *
     * @param $action string Action being performed
     * @return Message
     */
    public function getMessage($action)
    {
        // one of captcha-edit, captcha-addurl, captcha-badlogin, captcha-createaccount,
        // captcha-create, captcha-sendemail
        $name = static::$messagePrefix . $action;
        $msg = wfMessage($name);
        // obtain a more tailored message, if possible, otherwise, fall back to
        // the default for edits
        return $msg->isDisabled() ? wfMessage(static::$messagePrefix . 'edit')  : $msg;
    }

    /**
     * Inject whazawhoo
     * @fixme if multiple thingies insert a header, could break
     * @param $form HTMLForm
     * @return bool true to keep running callbacks
     */
    public function injectEmailUser(&$form)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Inject whazawhoo
     * @fixme if multiple thingies insert a header, could break
     * @param QuickTemplate $template
     * @return bool true to keep running callbacks
     * @deprecated 1.27 pre-AuthManager logic
     */
    public function injectUserCreate(&$template)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Inject a captcha into the user login form after a failed
     * password attempt as a speedbump for mass attacks.
     * @fixme if multiple thingies insert a header, could break
     * @param $template QuickTemplate
     * @return bool true to keep running callbacks
     * @deprecated 1.27 pre-AuthManager logic
     */
    public function injectUserLogin(&$template)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * When a bad login attempt is made, increment an expiring counter
     * in the memcache cloud. Later checks for this may trigger a
     * captcha display to prevent too many hits from the same place.
     * @param User $user
     * @param string $password
     * @param int $retval authentication return value
     * @return bool true to keep running callbacks
     * @deprecated 1.27 pre-AuthManager hook handler
     */
    public function triggerUserLogin($user, $password, $retval)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Increase bad login counter after a failed login.
     * The user might be required to solve a captcha if the count is high.
     * @param string $username
     * TODO use Throttler
     */
    public function increaseBadLoginCounter($username)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Reset bad login counter after a successful login.
     * @param string $username
     */
    public function resetBadLoginCounter($username)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if a bad login has already been registered for this
     * IP address. If so, require a captcha.
     * @return bool
     * @access private
     */
    public function isBadLoginTriggered()
    {
        global $wgCaptchaTriggers, $wgCaptchaBadLoginAttempts;
        $cache = ObjectCache::getLocalClusterInstance();
        return $wgCaptchaTriggers['badlogin']
            && (int)$cache->get($this->badLoginKey()) >= $wgCaptchaBadLoginAttempts;
    }

    /**
     * Is the per-user captcha triggered?
     *
     * @param $u User|String User object, or name
     * @return boolean|null False: no, null: no, but it will be triggered next time
     */
    public function isBadLoginPerUserTriggered($u)
    {
        global $wgCaptchaTriggers, $wgCaptchaBadLoginPerUserAttempts;
        $cache = ObjectCache::getLocalClusterInstance();

        if (is_object($u)) {
            $u = $u->getName();
        }
        return $wgCaptchaTriggers['badloginperuser']
            && (int)$cache->get($this->badLoginPerUserKey($u)) >= $wgCaptchaBadLoginPerUserAttempts;
    }

    /**
     * Check if the current IP is allowed to skip captchas. This checks
     * the whitelist from two sources.
     *  1) From the server-side config array $wgCaptchaWhitelistIP
     *  2) From the local [[MediaWiki:Captcha-ip-whitelist]] message
     *
     * @return bool true if whitelisted, false if not
     */
    public function isIPWhitelisted()
    {
        global $wgCaptchaWhitelistIP, $wgRequest;
        $ip = $wgRequest->getIP();

        if ($wgCaptchaWhitelistIP) {
            if (IP::isInRanges($ip, $wgCaptchaWhitelistIP)) {
                return true;
            }
        }

        $whitelistMsg = wfMessage('captcha-ip-whitelist')->inContentLanguage();
        if (!$whitelistMsg->isDisabled()) {
            $whitelistedIPs = $this->getWikiIPWhitelist($whitelistMsg);
            if (IP::isInRanges($ip, $whitelistedIPs)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get the on-wiki IP whitelist stored in [[MediaWiki:Captcha-ip-whitelist]]
     * page from cache if possible.
     *
     * @param Message $msg whitelist Message on wiki
     * @return array whitelisted IP addresses or IP ranges, empty array if no whitelist
     */
    private function getWikiIPWhitelist(Message $msg)
    {
        $cache = ObjectCache::getMainWANInstance();
        $cacheKey = $cache->makeKey('confirmedit', 'ipwhitelist');

        $cachedWhitelist = $cache->get($cacheKey);
        if ($cachedWhitelist === false) {
            // Could not retrieve from cache so build the whitelist directly
            // from the wikipage
            $whitelist = $this->buildValidIPs(
                explode("\n", $msg->plain())
            );
            // And then store it in cache for one day. This cache is cleared on
            // modifications to the whitelist page.
            // @see ConfirmEditHooks::onPageContentSaveComplete()
            $cache->set($cacheKey, $whitelist, 86400);
        } else {
            // Whitelist from the cache
            $whitelist = $cachedWhitelist;
        }

        return $whitelist;
    }

    /**
     * From a list of unvalidated input, get all the valid
     * IP addresses and IP ranges from it.
     *
     * Note that only lines with just the IP address or IP range is considered
     * as valid. Whitespace is allowed but if there is any other character on
     * the line, it's not considered as a valid entry.
     *
     * @param string[] $input
     * @return string[] of valid IP addresses and IP ranges
     */
    private function buildValidIPs(array $input)
    {
        // Remove whitespace and blank lines first
        $ips = array_map('trim', $input);
        $ips = array_filter($ips);

        $validIPs = [];
        foreach ($ips as $ip) {
            if (IP::isIPAddress($ip)) {
                $validIPs[] = $ip;
            }
        }

        return $validIPs;
    }

    /**
     * Internal cache key for badlogin checks.
     * @return string
     * @access private
     */
    public function badLoginKey()
    {
        global $wgRequest;
        $ip = $wgRequest->getIP();
        return wfGlobalCacheKey('captcha', 'badlogin', 'ip', $ip);
    }

    /*
     * Cache key for badloginPerUser checks.
     * @param $username string
     * @return string
     */
    private function badLoginPerUserKey($username)
    {
        $username = User::getCanonicalName($username, 'usable') ?: $username;
        return wfGlobalCacheKey('captcha', 'badlogin', 'user', md5($username));
    }

    /**
     * Check if the submitted form matches the captcha session data provided
     * by the plugin when the form was generated.
     *
     * Override this!
     *
     * @param string $answer
     * @param array $info
     * @return bool
     */
    public function keyMatch($answer, $info)
    {
        return $answer == $info['answer'];
    }

    // ----------------------------------

    /**
     * @param Title $title
     * @param string $action (edit/create/addurl...)
     * @return bool true if action triggers captcha on $title's namespace
     */
    public function captchaTriggers($title, $action)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param WikiPage $page
     * @param $content Content|string
     * @param $section string
     * @param IContextSource $context
     * @param $oldtext string The content of the revision prior to $content.  When
     *  null this will be loaded from the database.
     * @return bool true if the captcha should run
     */
    public function shouldCheck(WikiPage $page, $content, $section, $context, $oldtext = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Filter callback function for URL whitelisting
     * @param $url string to check
     * @return bool true if unknown, false if whitelisted
     * @access private
     */
    public function filterLink($url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Build regex from whitelist
     * @param $lines string from [[MediaWiki:Captcha-addurl-whitelist]]
     * @return array Regexes
     * @access private
     */
    public function buildRegexes($lines)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Load external links from the externallinks table
     * @param $title Title
     * @return Array
     */
    public function getLinksFromTracker($title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Backend function for confirmEditMerged()
     * @param WikiPage $page
     * @param $newtext string
     * @param $section
     * @param IContextSource $context
     * @return bool false if the CAPTCHA is rejected, true otherwise
     */
    private function doConfirmEdit(WikiPage $page, $newtext, $section, IContextSource $context)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * An efficient edit filter callback based on the text after section merging
     * @param RequestContext $context
     * @param Content $content
     * @param Status $status
     * @param $summary
     * @param $user
     * @param $minorEdit
     * @return bool
     */
    public function confirmEditMerged($context, $content, $status, $summary, $user, $minorEdit)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Hook for user creation form submissions.
     * @param User $u
     * @param string $message
     * @param Status $status
     * @return bool true to continue, false to abort user creation
     * @deprecated 1.27 pre-AuthManager logic
     */
    public function confirmUserCreate($u, &$message, &$status = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Logic to check if we need to pass a captcha for the current user
     * to create a new account, or not
     *
     * @param User $creatingUser
     * @return bool true to show captcha, false to skip captcha
     */
    public function needCreateAccountCaptcha(User $creatingUser = null)
    {
        global $wgCaptchaTriggers, $wgUser;
        $creatingUser = $creatingUser ?: $wgUser;

        if ($wgCaptchaTriggers['createaccount']) {
            if ($creatingUser->isAllowed('skipcaptcha')) {
                wfDebug("ConfirmEdit: user group allows skipping captcha on account creation\n");
                return false;
            }
            if ($this->isIPWhitelisted()) {
                return false;
            }
            return true;
        }
        return false;
    }

    /**
     * Hook for user login form submissions.
     * @param $u User
     * @param $pass
     * @param $retval
     * @return bool true to continue, false to abort user creation
     * @deprecated 1.27 pre-AuthManager logic
     */
    public function confirmUserLogin($u, $pass, &$retval)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check the captcha on Special:EmailUser
     * @param $from MailAddress
     * @param $to MailAddress
     * @param $subject String
     * @param $text String
     * @param $error String reference
     * @return Bool true to continue saving, false to abort and show a captcha form
     */
    public function confirmEmailUser($from, $to, $subject, $text, &$error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $module ApiBase
     * @return bool
     */
    protected function isAPICaptchaModule($module)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $module ApiBase
     * @param $params array
     * @param $flags int
     * @return bool
     */
    public function APIGetAllowedParams(&$module, &$params, $flags)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks, if the user reached the amount of false CAPTCHAs and give him some vacation
     * or run self::passCaptcha() and clear counter if correct.
     *
     * @param WebRequest $request
     * @param User $user
     * @return bool
     */
    public function passCaptchaLimitedFromRequest(WebRequest $request, User $user)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param WebRequest $request
     * @return array [ captcha ID, captcha solution ]
     */
    protected function getCaptchaParamsFromRequest(WebRequest $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks, if the user reached the amount of false CAPTCHAs and give him some vacation
     * or run self::passCaptcha() and clear counter if correct.
     *
     * @param string $index Captcha idenitifier
     * @param string $word Captcha solution
     * @param User $user User for throttling captcha solving attempts
     * @return bool
     * @see self::passCaptcha()
     */
    public function passCaptchaLimited($index, $word, User $user)
    {
        // don't increase pingLimiter here, just check, if CAPTCHA limit exceeded
        if ($user->pingLimiter('badcaptcha', 0)) {
            // for debugging add an proper error message, the user just see an false captcha error message
            $this->log('User reached RateLimit, preventing action.');
            return false;
        }

        if ($this->passCaptcha($index, $word)) {
            return true;
        }

        // captcha was not solved: increase limit and return false
        $user->pingLimiter('badcaptcha');
        return false;
    }

    /**
     * Given a required captcha run, test form input for correct
     * input on the open session.
     * @param WebRequest $request
     * @param User $user
     * @return bool if passed, false if failed or new session
     */
    public function passCaptchaFromRequest(WebRequest $request, User $user)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given a required captcha run, test form input for correct
     * input on the open session.
     * @param string $index Captcha idenitifier
     * @param string $word Captcha solution
     * @return bool if passed, false if failed or new session
     */
    protected function passCaptcha($index, $word)
    {
        // Don't check the same CAPTCHA twice in one session,
        // if the CAPTCHA was already checked - Bug T94276
        if (isset($this->captchaSolved)) {
            return $this->captchaSolved;
        }

        $info = $this->retrieveCaptcha($index);
        if ($info) {
            if ($this->keyMatch($word, $info)) {
                $this->log("passed");
                $this->clearCaptcha($index);
                $this->captchaSolved = true;
                return true;
            } else {
                $this->clearCaptcha($index);
                $this->log("bad form input");
                $this->captchaSolved = false;
                return false;
            }
        } else {
            $this->log("new captcha session");
            return false;
        }
    }

    /**
     * Log the status and any triggering info for debugging or statistics
     * @param string $message
     */
    public function log($message)
    {
        wfDebugLog('captcha', 'ConfirmEdit: ' . $message . '; ' .  $this->trigger);
    }

    /**
     * Generate a captcha session ID and save the info in PHP's session storage.
     * (Requires the user to have cookies enabled to get through the captcha.)
     *
     * A random ID is used so legit users can make edits in multiple tabs or
     * windows without being unnecessarily hobbled by a serial order requirement.
     * Pass the returned id value into the edit form as wpCaptchaId.
     *
     * @param array $info data to store
     * @return string captcha ID key
     */
    public function storeCaptcha($info)
    {
        if (!isset($info['index'])) {
            // Assign random index if we're not udpating
            $info['index'] = strval(mt_rand());
        }
        CaptchaStore::get()->store($info['index'], $info);
        return $info['index'];
    }

    /**
     * Fetch this session's captcha info.
     * @param string $index
     * @return array|false array of info, or false if missing
     */
    public function retrieveCaptcha($index)
    {
        return CaptchaStore::get()->retrieve($index);
    }

    /**
     * Clear out existing captcha info from the session, to ensure
     * it can't be reused.
     */
    public function clearCaptcha($index)
    {
        CaptchaStore::get()->clear($index);
    }

    /**
     * Retrieve the current version of the page or section being edited...
     * @param Title $title
     * @param string $section
     * @param integer $flags Flags for Revision loading methods
     * @return string
     * @access private
     */
    public function loadText($title, $section, $flags = Revision::READ_LATEST)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extract a list of all recognized HTTP links in the text.
     * @param $title Title
     * @param $text string
     * @return array of strings
     */
    public function findLinks($title, $text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Show a page explaining what this wacky thing is.
     */
    public function showHelp()
    {
        global $wgOut;
        $wgOut->setPageTitle(wfMessage('captchahelp-title')->text());
        $wgOut->addWikiMsg('captchahelp-text');
        if (CaptchaStore::get()->cookiesNeeded()) {
            $wgOut->addWikiMsg('captchahelp-cookies-needed');
        }
    }

    /**
     * Pass API captcha parameters on to the login form when using
     * API account creation.
     *
     * @param ApiCreateAccount $apiModule
     * @param LoginForm $loginForm
     * @return hook return value
     * @deprecated 1.27 pre-AuthManager logic
     */
    public function addNewAccountApiForm($apiModule, $loginForm)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Pass extra data back in API results for account creation.
     *
     * @param ApiCreateAccount $apiModule
     * @param LoginForm &loginPage
     * @param array &$result
     * @return bool: Hook return value
     * @deprecated 1.27 pre-AuthManager logic
     */
    public function addNewAccountApiResult($apiModule, $loginPage, &$result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return CaptchaAuthenticationRequest
     */
    public function createAuthenticationRequest()
    {
        $captchaData = $this->getCaptcha();
        $id = $this->storeCaptcha($captchaData);
        return new CaptchaAuthenticationRequest($id, $captchaData);
    }

    /**
     * Modify the apprearance of the captcha field
     * @param AuthenticationRequest[] $requests
     * @param array $fieldInfo Field description as given by AuthenticationRequest::mergeFieldInfo
     * @param array $formDescriptor A form descriptor suitable for the HTMLForm constructor
     * @param string $action One of the AuthManager::ACTION_* constants
     */
    public function onAuthChangeFormFields(
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
}
