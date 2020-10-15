<?php

/**
 * @group Database
 */
class PreferencesTest extends MediaWikiTestCase
{
    /**
     * @var User[]
     */
    private $prefUsers;
    /**
     * @var RequestContext
     */
    private $context;

    public function __construct()
    {
        parent::__construct();

        $this->prefUsers['noemail'] = new User;

        $this->prefUsers['notauth'] = new User;
        $this->prefUsers['notauth']
            ->setEmail('noauth@example.org');

        $this->prefUsers['auth'] = new User;
        $this->prefUsers['auth']
            ->setEmail('noauth@example.org');
        $this->prefUsers['auth']
            ->setEmailAuthenticationTimestamp(1330946623);

        $this->context = new RequestContext;
        $this->context->setTitle(Title::newFromText('PreferencesTest'));
    }

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Placeholder to verify bug 34302
     * @covers Preferences::profilePreferences
     */
    public function testEmailAuthenticationFieldWhenUserHasNoEmail()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Placeholder to verify bug 34302
     * @covers Preferences::profilePreferences
     */
    public function testEmailAuthenticationFieldWhenUserEmailNotAuthenticated()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Placeholder to verify bug 34302
     * @covers Preferences::profilePreferences
     */
    public function testEmailAuthenticationFieldWhenUserEmailIsAuthenticated()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** Helper */
    protected function prefsFor($user_key)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
