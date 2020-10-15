<?php

namespace MediaWiki\Auth;

use MediaWiki\Session\SessionInfo;
use MediaWiki\Session\UserInfo;
use Psr\Log\LogLevel;
use StatusValue;
use Wikimedia\ScopedCallback;

/**
 * @group AuthManager
 * @group Database
 * @covers MediaWiki\Auth\AuthManager
 */
class AuthManagerTest extends \MediaWikiTestCase
{
    /** @var WebRequest */
    protected $request;
    /** @var Config */
    protected $config;
    /** @var \\Psr\\Log\\LoggerInterface */
    protected $logger;

    protected $preauthMocks = [];
    protected $primaryauthMocks = [];
    protected $secondaryauthMocks = [];

    /** @var AuthManager */
    protected $manager;
    /** @var TestingAccessWrapper */
    protected $managerPriv;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a mock on a hook
     * @param string $hook
     * @param object $expect From $this->once(), $this->never(), etc.
     * @return object $mock->expects( $expect )->method( ... ).
     */
    protected function hook($hook, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Unsets a hook
     * @param string $hook
     */
    protected function unhook($hook)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensure a value is a clean Message object
     * @param string|Message $key
     * @param array $params
     * @return Message
     */
    protected function message($key, $params = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Initialize the AuthManagerConfig variable in $this->config
     *
     * Uses data from the various 'mocks' fields.
     */
    protected function initializeConfig()
    {
        $config = [
            'preauth' => [
            ],
            'primaryauth' => [
            ],
            'secondaryauth' => [
            ],
        ];

        foreach ([ 'preauth', 'primaryauth', 'secondaryauth' ] as $type) {
            $key = $type . 'Mocks';
            foreach ($this->$key as $mock) {
                $config[$type][$mock->getUniqueId()] = [ 'factory' => function () use ($mock) {
                    return $mock;
                } ];
            }
        }

        $this->config->set('AuthManagerConfig', $config);
        $this->config->set('LanguageCode', 'en');
        $this->config->set('NewUserLog', false);
    }

    /**
     * Initialize $this->manager
     * @param bool $regen Force a call to $this->initializeConfig()
     */
    protected function initializeManager($regen = false)
    {
        if ($regen || !$this->config) {
            $this->config = new \HashConfig();
        }
        if ($regen || !$this->request) {
            $this->request = new \FauxRequest();
        }
        if (!$this->logger) {
            $this->logger = new \TestLogger();
        }

        if ($regen || !$this->config->has('AuthManagerConfig')) {
            $this->initializeConfig();
        }
        $this->manager = new AuthManager($this->request, $this->config);
        $this->manager->setLogger($this->logger);
        $this->managerPriv = \TestingAccessWrapper::newFromObject($this->manager);
    }

    /**
     * Setup SessionManager with a mock session provider
     * @param bool|null $canChangeUser If non-null, canChangeUser will be mocked to return this
     * @param array $methods Additional methods to mock
     * @return array (MediaWiki\Session\SessionProvider, ScopedCallback)
     */
    protected function getMockSessionProvider($canChangeUser = null, array $methods = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSingleton()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanAuthenticateNow()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testNormalizeUsername()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideSecuritySensitiveOperationStatus
     * @param bool $mutableSession
     */
    public function testSecuritySensitiveOperationStatus($mutableSession)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function onSecuritySensitiveOperationStatus(&$status, $operation, $session, $time)
    {
    }

    public static function provideSecuritySensitiveOperationStatus()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideUserCanAuthenticate
     * @param bool $primary1Can
     * @param bool $primary2Can
     * @param bool $expect
     */
    public function testUserCanAuthenticate($primary1Can, $primary2Can, $expect)
    {
        $mock1 = $this->getMockForAbstractClass(PrimaryAuthenticationProvider::class);
        $mock1->expects($this->any())->method('getUniqueId')
            ->will($this->returnValue('primary1'));
        $mock1->expects($this->any())->method('testUserCanAuthenticate')
            ->with($this->equalTo('UTSysop'))
            ->will($this->returnValue($primary1Can));
        $mock2 = $this->getMockForAbstractClass(PrimaryAuthenticationProvider::class);
        $mock2->expects($this->any())->method('getUniqueId')
            ->will($this->returnValue('primary2'));
        $mock2->expects($this->any())->method('testUserCanAuthenticate')
            ->with($this->equalTo('UTSysop'))
            ->will($this->returnValue($primary2Can));
        $this->primaryauthMocks = [ $mock1, $mock2 ];

        $this->initializeManager(true);
        $this->assertSame($expect, $this->manager->userCanAuthenticate('UTSysop'));
    }

    public static function provideUserCanAuthenticate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testRevokeAccessForUser()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testProviderCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSetDefaultUserOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testForcePrimaryAuthenticationProviders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testBeginAuthentication()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCreateFromLogin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideAuthentication
     * @param StatusValue $preResponse
     * @param array $primaryResponses
     * @param array $secondaryResponses
     * @param array $managerResponses
     * @param bool $link Whether the primary authentication provider is a "link" provider
     */
    public function testAuthentication(
        StatusValue $preResponse,
        array $primaryResponses,
        array $secondaryResponses,
        array $managerResponses,
        $link = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideAuthentication()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideUserExists
     * @param bool $primary1Exists
     * @param bool $primary2Exists
     * @param bool $expect
     */
    public function testUserExists($primary1Exists, $primary2Exists, $expect)
    {
        $mock1 = $this->getMockForAbstractClass(PrimaryAuthenticationProvider::class);
        $mock1->expects($this->any())->method('getUniqueId')
            ->will($this->returnValue('primary1'));
        $mock1->expects($this->any())->method('testUserExists')
            ->with($this->equalTo('UTSysop'))
            ->will($this->returnValue($primary1Exists));
        $mock2 = $this->getMockForAbstractClass(PrimaryAuthenticationProvider::class);
        $mock2->expects($this->any())->method('getUniqueId')
            ->will($this->returnValue('primary2'));
        $mock2->expects($this->any())->method('testUserExists')
            ->with($this->equalTo('UTSysop'))
            ->will($this->returnValue($primary2Exists));
        $this->primaryauthMocks = [ $mock1, $mock2 ];

        $this->initializeManager(true);
        $this->assertSame($expect, $this->manager->userExists('UTSysop'));
    }

    public static function provideUserExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideAllowsAuthenticationDataChange
     * @param StatusValue $primaryReturn
     * @param StatusValue $secondaryReturn
     * @param Status $expect
     */
    public function testAllowsAuthenticationDataChange($primaryReturn, $secondaryReturn, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideAllowsAuthenticationDataChange()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testChangeAuthenticationData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanCreateAccounts()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCheckAccountCreatePermissions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $uniq
     * @return string
     */
    private static function usernameForCreation($uniq = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanCreateAccount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testBeginAccountCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testContinueAccountCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideAccountCreation
     * @param StatusValue $preTest
     * @param StatusValue $primaryTest
     * @param StatusValue $secondaryTest
     * @param array $primaryResponses
     * @param array $secondaryResponses
     * @param array $managerResponses
     */
    public function testAccountCreation(
        StatusValue $preTest,
        $primaryTest,
        $secondaryTest,
        array $primaryResponses,
        array $secondaryResponses,
        array $managerResponses
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideAccountCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideAccountCreationLogging
     * @param bool $isAnon
     * @param string|null $logSubtype
     */
    public function testAccountCreationLogging($isAnon, $logSubtype)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideAccountCreationLogging()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAutoAccountCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetAuthenticationRequests
     * @param string $action
     * @param array $expect
     * @param array $state
     */
    public function testGetAuthenticationRequests($action, $expect, $state = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetAuthenticationRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testGetAuthenticationRequestsRequired()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAllowsPropertyChange()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAutoCreateOnLogin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAutoCreateFailOnLogin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAuthenticationSessionData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanLinkAccounts()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testBeginAccountLink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testContinueAccountLink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideAccountLink
     * @param StatusValue $preTest
     * @param array $primaryResponses
     * @param array $managerResponses
     */
    public function testAccountLink(
        StatusValue $preTest,
        array $primaryResponses,
        array $managerResponses
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideAccountLink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
