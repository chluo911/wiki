<?php
use MediaWiki\Logger\LegacySpi;
use MediaWiki\Logger\LoggerFactory;
use MediaWiki\Logger\MonologSpi;
use MediaWiki\MediaWikiServices;
use Psr\Log\LoggerInterface;

/**
 * @since 1.18
 */
abstract class MediaWikiTestCase extends PHPUnit_Framework_TestCase
{

    /**
     * The service locator created by prepareServices(). This service locator will
     * be restored after each test. Tests that pollute the global service locator
     * instance should use overrideMwServices() to isolate the test.
     *
     * @var MediaWikiServices|null
     */
    private static $serviceLocator = null;

    /**
     * $called tracks whether the setUp and tearDown method has been called.
     * class extending MediaWikiTestCase usually override setUp and tearDown
     * but forget to call the parent.
     *
     * The array format takes a method name as key and anything as a value.
     * By asserting the key exist, we know the child class has called the
     * parent.
     *
     * This property must be private, we do not want child to override it,
     * they should call the appropriate parent method instead.
     */
    private $called = [];

    /**
     * @var TestUser[]
     * @since 1.20
     */
    public static $users;

    /**
     * Primary database
     *
     * @var Database
     * @since 1.18
     */
    protected $db;

    /**
     * @var array
     * @since 1.19
     */
    protected $tablesUsed = []; // tables with data

    private static $useTemporaryTables = true;
    private static $reuseDB = false;
    private static $dbSetup = false;
    private static $oldTablePrefix = '';

    /**
     * Original value of PHP's error_reporting setting.
     *
     * @var int
     */
    private $phpErrorLevel;

    /**
     * Holds the paths of temporary files/directories created through getNewTempFile,
     * and getNewTempDirectory
     *
     * @var array
     */
    private $tmpFiles = [];

    /**
     * Holds original values of MediaWiki configuration settings
     * to be restored in tearDown().
     * See also setMwGlobals().
     * @var array
     */
    private $mwGlobals = [];

    /**
     * Holds original loggers which have been replaced by setLogger()
     * @var LoggerInterface[]
     */
    private $loggers = [];

    /**
     * Table name prefixes. Oracle likes it shorter.
     */
    const DB_PREFIX = 'unittest_';
    const ORA_DB_PREFIX = 'ut_';

    /**
     * @var array
     * @since 1.18
     */
    protected $supportedDBs = [
        'mysql',
        'sqlite',
        'postgres',
        'oracle'
    ];

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->backupGlobals = false;
        $this->backupStaticAttributes = false;
    }

    public function __destruct()
    {
        // Complain if self::setUp() was called, but not self::tearDown()
        // $this->called['setUp'] will be checked by self::testMediaWikiTestCaseParentSetupCalled()
        if (isset($this->called['setUp']) && !isset($this->called['tearDown'])) {
            throw new MWException(static::class . "::tearDown() must call parent::tearDown()");
        }
    }

    public static function setUpBeforeClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convenience method for getting an immutable test user
     *
     * @since 1.28
     *
     * @param string[] $groups Groups the test user should be in.
     * @return TestUser
     */
    public static function getTestUser($groups = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convenience method for getting a mutable test user
     *
     * @since 1.28
     *
     * @param string[] $groups Groups the test user should be added in.
     * @return TestUser
     */
    public static function getMutableTestUser($groups = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convenience method for getting an immutable admin test user
     *
     * @since 1.28
     *
     * @param string[] $groups Groups the test user should be added to.
     * @return TestUser
     */
    public static function getTestSysop()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepare service configuration for unit testing.
     *
     * This calls MediaWikiServices::resetGlobalInstance() to allow some critical services
     * to be overridden for testing.
     *
     * prepareServices() only needs to be called once, but should be called as early as possible,
     * before any class has a chance to grab a reference to any of the global services
     * instances that get discarded by prepareServices(). Only the first call has any effect,
     * later calls are ignored.
     *
     * @note This is called by PHPUnitMaintClass::finalSetup.
     *
     * @see MediaWikiServices::resetGlobalInstance()
     *
     * @param Config $bootstrapConfig The bootstrap config to use with the new
     *        MediaWikiServices. Only used for the first call to this method.
     * @return MediaWikiServices
     */
    public static function prepareServices(Config $bootstrapConfig)
    {
        static $services = null;

        if (!$services) {
            $services = self::resetGlobalServices($bootstrapConfig);
        }
        return $services;
    }

    /**
     * Reset global services, and install testing environment.
     * This is the testing equivalent of MediaWikiServices::resetGlobalInstance().
     * This should only be used to set up the testing environment, not when
     * running unit tests. Use MediaWikiTestCase::overrideMwServices() for that.
     *
     * @see MediaWikiServices::resetGlobalInstance()
     * @see prepareServices()
     * @see MediaWikiTestCase::overrideMwServices()
     *
     * @param Config|null $bootstrapConfig The bootstrap config to use with the new
     *        MediaWikiServices.
     */
    protected static function resetGlobalServices(Config $bootstrapConfig = null)
    {
        $oldServices = MediaWikiServices::getInstance();
        $oldConfigFactory = $oldServices->getConfigFactory();

        $testConfig = self::makeTestConfig($bootstrapConfig);

        MediaWikiServices::resetGlobalInstance($testConfig);

        $serviceLocator = MediaWikiServices::getInstance();
        self::installTestServices(
            $oldConfigFactory,
            $serviceLocator
        );
        return $serviceLocator;
    }

    /**
     * Create a config suitable for testing, based on a base config, default overrides,
     * and custom overrides.
     *
     * @param Config|null $baseConfig
     * @param Config|null $customOverrides
     *
     * @return Config
     */
    private static function makeTestConfig(
        Config $baseConfig = null,
        Config $customOverrides = null
    ) {
        $defaultOverrides = new HashConfig();

        if (!$baseConfig) {
            $baseConfig = MediaWikiServices::getInstance()->getBootstrapConfig();
        }

        /* Some functions require some kind of caching, and will end up using the db,
         * which we can't allow, as that would open a new connection for mysql.
         * Replace with a HashBag. They would not be going to persist anyway.
         */
        $hashCache = [ 'class' => 'HashBagOStuff', 'reportDupes' => false ];
        $objectCaches = [
                CACHE_DB => $hashCache,
                CACHE_ACCEL => $hashCache,
                CACHE_MEMCACHED => $hashCache,
                'apc' => $hashCache,
                'xcache' => $hashCache,
                'wincache' => $hashCache,
            ] + $baseConfig->get('ObjectCaches');

        $defaultOverrides->set('ObjectCaches', $objectCaches);
        $defaultOverrides->set('MainCacheType', CACHE_NONE);
        $defaultOverrides->set('JobTypeConf', [ 'default' => [ 'class' => 'JobQueueMemory' ] ]);

        // Use a fast hash algorithm to hash passwords.
        $defaultOverrides->set('PasswordDefault', 'A');

        $testConfig = $customOverrides
            ? new MultiConfig([ $customOverrides, $defaultOverrides, $baseConfig ])
            : new MultiConfig([ $defaultOverrides, $baseConfig ]);

        return $testConfig;
    }

    /**
     * @param ConfigFactory $oldConfigFactory
     * @param MediaWikiServices $newServices
     *
     * @throws MWException
     */
    private static function installTestServices(
        ConfigFactory $oldConfigFactory,
        MediaWikiServices $newServices
    ) {
        // Use bootstrap config for all configuration.
        // This allows config overrides via global variables to take effect.
        $bootstrapConfig = $newServices->getBootstrapConfig();
        $newServices->resetServiceForTesting('ConfigFactory');
        $newServices->redefineService(
            'ConfigFactory',
            self::makeTestConfigFactoryInstantiator(
                $oldConfigFactory,
                [ 'main' =>  $bootstrapConfig ]
            )
        );
    }

    /**
     * @param ConfigFactory $oldFactory
     * @param Config[] $configurations
     *
     * @return Closure
     */
    private static function makeTestConfigFactoryInstantiator(
        ConfigFactory $oldFactory,
        array $configurations
    ) {
        return function (MediaWikiServices $services) use ($oldFactory, $configurations) {
            $factory = new ConfigFactory();

            // clone configurations from $oldFactory that are not overwritten by $configurations
            $namesToClone = array_diff(
                $oldFactory->getConfigNames(),
                array_keys($configurations)
            );

            foreach ($namesToClone as $name) {
                $factory->register($name, $oldFactory->makeConfig($name));
            }

            foreach ($configurations as $name => $config) {
                $factory->register($name, $config);
            }

            return $factory;
        };
    }

    /**
     * Resets some well known services that typically have state that may interfere with unit tests.
     * This is a lightweight alternative to resetGlobalServices().
     *
     * @note There is no guarantee that no references remain to stale service instances destroyed
     * by a call to doLightweightServiceReset().
     *
     * @throws MWException if called outside of PHPUnit tests.
     *
     * @see resetGlobalServices()
     */
    private function doLightweightServiceReset()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function run(PHPUnit_Framework_TestResult $result = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    private function oncePerClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.21
     *
     * @return bool
     */
    public function usesTemporaryTables()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Obtains a new temporary file name
     *
     * The obtained filename is enlisted to be removed upon tearDown
     *
     * @since 1.20
     *
     * @return string Absolute name of the temporary file
     */
    protected function getNewTempFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * obtains a new temporary directory
     *
     * The obtained directory is enlisted to be removed (recursively with all its contained
     * files) upon tearDown.
     *
     * @since 1.20
     *
     * @return string Absolute name of the temporary directory
     */
    protected function getNewTempDirectory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function addTmpFiles($files)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Make sure MediaWikiTestCase extending classes have called their
     * parent setUp method
     */
    final public function testMediaWikiTestCaseParentSetupCalled()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a service, maintaining a stashed version of the previous service to be
     * restored in tearDown
     *
     * @since 1.27
     *
     * @param string $name
     * @param object $object
     */
    protected function setService($name, $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a global, maintaining a stashed version of the previous global to be
     * restored in tearDown
     *
     * The key is added to the array of globals that will be reset afterwards
     * in the tearDown().
     *
     * @example
     * <code>
     *     protected function setUp() {
     *         $this->setMwGlobals( 'wgRestrictStuff', true );
     *     }
     *
     *     function testFoo() {}
     *
     *     function testBar() {}
     *         $this->assertTrue( self::getX()->doStuff() );
     *
     *         $this->setMwGlobals( 'wgRestrictStuff', false );
     *         $this->assertTrue( self::getX()->doStuff() );
     *     }
     *
     *     function testQuux() {}
     * </code>
     *
     * @param array|string $pairs Key to the global variable, or an array
     *  of key/value pairs.
     * @param mixed $value Value to set the global to (ignored
     *  if an array is given as first argument).
     *
     * @note To allow changes to global variables to take effect on global service instances,
     *       call overrideMwServices().
     *
     * @since 1.21
     */
    protected function setMwGlobals($pairs, $value = null)
    {
        if (is_string($pairs)) {
            $pairs = [ $pairs => $value ];
        }

        $this->stashMwGlobals(array_keys($pairs));

        foreach ($pairs as $key => $value) {
            $GLOBALS[$key] = $value;
        }
    }

    /**
     * Check if we can back up a value by performing a shallow copy.
     * Values which fail this test are copied recursively.
     *
     * @param mixed $value
     * @return bool True if a shallow copy will do; false if a deep copy
     *  is required.
     */
    private static function canShallowCopy($value)
    {
        if (is_scalar($value) || $value === null) {
            return true;
        }
        if (is_array($value)) {
            foreach ($value as $subValue) {
                if (!is_scalar($subValue) && $subValue !== null) {
                    return false;
                }
            }
            return true;
        }
        return false;
    }

    /**
     * Stashes the global, will be restored in tearDown()
     *
     * Individual test functions may override globals through the setMwGlobals() function
     * or directly. When directly overriding globals their keys should first be passed to this
     * method in setUp to avoid breaking global state for other tests
     *
     * That way all other tests are executed with the same settings (instead of using the
     * unreliable local settings for most tests and fix it only for some tests).
     *
     * @param array|string $globalKeys Key to the global variable, or an array of keys.
     *
     * @throws Exception When trying to stash an unset global
     *
     * @note To allow changes to global variables to take effect on global service instances,
     *       call overrideMwServices().
     *
     * @since 1.23
     */
    protected function stashMwGlobals($globalKeys)
    {
        if (is_string($globalKeys)) {
            $globalKeys = [ $globalKeys ];
        }

        foreach ($globalKeys as $globalKey) {
            // NOTE: make sure we only save the global once or a second call to
            // setMwGlobals() on the same global would override the original
            // value.
            if (!array_key_exists($globalKey, $this->mwGlobals)) {
                if (!array_key_exists($globalKey, $GLOBALS)) {
                    throw new Exception("Global with key {$globalKey} doesn't exist and cant be stashed");
                }
                // NOTE: we serialize then unserialize the value in case it is an object
                // this stops any objects being passed by reference. We could use clone
                // and if is_object but this does account for objects within objects!
                if (self::canShallowCopy($GLOBALS[$globalKey])) {
                    $this->mwGlobals[$globalKey] = $GLOBALS[$globalKey];
                } elseif (
                    // Many MediaWiki types are safe to clone. These are the
                    // ones that are most commonly stashed.
                    $GLOBALS[$globalKey] instanceof Language ||
                    $GLOBALS[$globalKey] instanceof User ||
                    $GLOBALS[$globalKey] instanceof FauxRequest
                ) {
                    $this->mwGlobals[$globalKey] = clone $GLOBALS[$globalKey];
                } else {
                    try {
                        $this->mwGlobals[$globalKey] = unserialize(serialize($GLOBALS[$globalKey]));
                    } catch (Exception $e) {
                        $this->mwGlobals[$globalKey] = $GLOBALS[$globalKey];
                    }
                }
            }
        }
    }

    /**
     * Merges the given values into a MW global array variable.
     * Useful for setting some entries in a configuration array, instead of
     * setting the entire array.
     *
     * @param string $name The name of the global, as in wgFooBar
     * @param array $values The array containing the entries to set in that global
     *
     * @throws MWException If the designated global is not an array.
     *
     * @note To allow changes to global variables to take effect on global service instances,
     *       call overrideMwServices().
     *
     * @since 1.21
     */
    protected function mergeMwGlobalArrayValue($name, $values)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Stashes the global instance of MediaWikiServices, and installs a new one,
     * allowing test cases to override settings and services.
     * The previous instance of MediaWikiServices will be restored on tearDown.
     *
     * @since 1.27
     *
     * @param Config $configOverrides Configuration overrides for the new MediaWikiServices instance.
     * @param callable[] $services An associative array of services to re-define. Keys are service
     *        names, values are callables.
     *
     * @return MediaWikiServices
     * @throws MWException
     */
    protected function overrideMwServices(Config $configOverrides = null, array $services = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.27
     * @param string|Language $lang
     */
    public function setUserLang($lang)
    {
        RequestContext::getMain()->setLanguage($lang);
        $this->setMwGlobals('wgLang', RequestContext::getMain()->getLanguage());
    }

    /**
     * @since 1.27
     * @param string|Language $lang
     */
    public function setContentLang($lang)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the logger for a specified channel, for the duration of the test.
     * @since 1.27
     * @param string $channel
     * @param LoggerInterface $logger
     */
    protected function setLogger($channel, LoggerInterface $logger)
    {
        // TODO: Once loggers are managed by MediaWikiServices, use
        //       overrideMwServices() to set loggers.

        $provider = LoggerFactory::getProvider();
        $wrappedProvider = TestingAccessWrapper::newFromObject($provider);
        $singletons = $wrappedProvider->singletons;
        if ($provider instanceof MonologSpi) {
            if (!isset($this->loggers[$channel])) {
                $this->loggers[$channel] = isset($singletons['loggers'][$channel])
                    ? $singletons['loggers'][$channel] : null;
            }
            $singletons['loggers'][$channel] = $logger;
        } elseif ($provider instanceof LegacySpi) {
            if (!isset($this->loggers[$channel])) {
                $this->loggers[$channel] = isset($singletons[$channel]) ? $singletons[$channel] : null;
            }
            $singletons[$channel] = $logger;
        } else {
            throw new LogicException(__METHOD__ . ': setting a logger for ' . get_class($provider)
                . ' is not implemented');
        }
        $wrappedProvider->singletons = $singletons;
    }

    /**
     * Restores loggers replaced by setLogger().
     * @since 1.27
     */
    private function restoreLoggers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     * @since 1.18
     */
    public function dbPrefix()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     * @since 1.18
     */
    public function needsDB()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Insert a new page.
     *
     * Should be called from addDBData().
     *
     * @since 1.25 ($namespace in 1.28)
     * @param string|title $pageName Page name or title
     * @param string $text Page's content
     * @param int $namespace Namespace id (name cannot already contain namespace)
     * @return array Title object and page id
     */
    protected function insertPage(
        $pageName,
        $text = 'Sample page for unit test.',
        $namespace = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Stub. If a test suite needs to add additional data to the database, it should
     * implement this method and do so. This method is called once per test suite
     * (i.e. once per class).
     *
     * Note data added by this method may be removed by resetDB() depending on
     * the contents of $tablesUsed.
     *
     * To add additional data between test function runs, override prepareDB().
     *
     * @see addDBData()
     * @see resetDB()
     *
     * @since 1.27
     */
    public function addDBDataOnce()
    {
    }

    /**
     * Stub. Subclasses may override this to prepare the database.
     * Called before every test run (test function or data set).
     *
     * @see addDBDataOnce()
     * @see resetDB()
     *
     * @since 1.18
     */
    public function addDBData()
    {
    }

    private function addCoreDBData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Restores MediaWiki to using the table set (table prefix) it was using before
     * setupTestDB() was called. Useful if we need to perform database operations
     * after the test run has finished (such as saving logs or profiling info).
     *
     * @since 1.21
     */
    public static function teardownTestDB()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Setups a database with the given prefix.
     *
     * If reuseDB is true and certain conditions apply, it will just change the prefix.
     * Otherwise, it will clone the tables and change the prefix.
     *
     * Clones all tables in the given database (whatever database that connection has
     * open), to versions with the test prefix.
     *
     * @param Database $db Database to use
     * @param string $prefix Prefix to use for test tables
     * @return bool True if tables were cloned, false if only the prefix was changed
     */
    protected static function setupDatabaseWithTestPrefix(Database $db, $prefix)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set up all test DBs
     */
    public function setupAllTestDBs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates an empty skeleton of the wiki database by cloning its structure
     * to equivalent tables using the given $prefix. Then sets MediaWiki to
     * use the new set of tables (aka schema) instead of the original set.
     *
     * This is used to generate a dummy table set, typically consisting of temporary
     * tables, that will be used by tests instead of the original wiki database tables.
     *
     * @since 1.21
     *
     * @note the original table prefix is stored in self::$oldTablePrefix. This is used
     * by teardownTestDB() to return the wiki to using the original table set.
     *
     * @note this method only works when first called. Subsequent calls have no effect,
     * even if using different parameters.
     *
     * @param Database $db The database connection
     * @param string $prefix The prefix to use for the new table set (aka schema).
     *
     * @throws MWException If the database table prefix is already $prefix
     */
    public static function setupTestDB(Database $db, $prefix)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clones the External Store database(s) for testing
     *
     * @param string $testPrefix Prefix for test tables
     */
    protected static function setupExternalStoreTestDBs($testPrefix)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets master database connections for all of the ExternalStoreDB
     * stores configured in $wgDefaultExternalStore.
     *
     * @return Database[] Array of Database master connections
     */

    protected static function getExternalStoreDatabaseConnections()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check whether ExternalStoreDB is being used
     *
     * @return bool True if it's being used
     */
    protected static function isUsingExternalStoreDB()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Empty all tables so they can be repopulated for tests
     *
     * @param Database $db|null Database to reset
     * @param array $tablesUsed Tables to reset
     */
    private function resetDB($db, $tablesUsed)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.18
     *
     * @param string $func
     * @param array $args
     *
     * @return mixed
     * @throws MWException
     */
    public function __call($func, $args)
    {
        static $compatibility = [
            'assertEmpty' => 'assertEmpty2', // assertEmpty was added in phpunit 3.7.32
        ];

        if (isset($compatibility[$func])) {
            return call_user_func_array([ $this, $compatibility[$func] ], $args);
        } else {
            throw new MWException("Called non-existent $func method on "
                . get_class($this));
        }
    }

    /**
     * Used as a compatibility method for phpunit < 3.7.32
     * @param string $value
     * @param string $msg
     */
    private function assertEmpty2($value, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private static function unprefixTable(&$tableName, $ind, $prefix)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private static function isNotUnittest($table)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.18
     *
     * @param Database $db
     *
     * @return array
     */
    public static function listTables(Database $db)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @throws MWException
     * @since 1.18
     */
    protected function checkDbIsSupported()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.18
     * @param string $offset
     * @return mixed
     */
    public function getCliArg($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.18
     * @param string $offset
     * @param mixed $value
     */
    public function setCliArg($offset, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Don't throw a warning if $function is deprecated and called later
     *
     * @since 1.19
     *
     * @param string $function
     */
    public function hideDeprecated($function)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the given database query yields the rows given by $expectedRows.
     * The expected rows should be given as indexed (not associative) arrays, with
     * the values given in the order of the columns in the $fields parameter.
     * Note that the rows are sorted by the columns given in $fields.
     *
     * @since 1.20
     *
     * @param string|array $table The table(s) to query
     * @param string|array $fields The columns to include in the result (and to sort by)
     * @param string|array $condition "where" condition(s)
     * @param array $expectedRows An array of arrays giving the expected rows.
     *
     * @throws MWException If this test cases's needsDB() method doesn't return true.
     *         Test cases can use "@group Database" to enable database test support,
     *         or list the tables under testing in $this->tablesUsed, or override the
     *         needsDB() method.
     */
    protected function assertSelect($table, $fields, $condition, array $expectedRows)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Utility method taking an array of elements and wrapping
     * each element in its own array. Useful for data providers
     * that only return a single argument.
     *
     * @since 1.20
     *
     * @param array $elements
     *
     * @return array
     */
    protected function arrayWrap(array $elements)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Assert that two arrays are equal. By default this means that both arrays need to hold
     * the same set of values. Using additional arguments, order and associated key can also
     * be set as relevant.
     *
     * @since 1.20
     *
     * @param array $expected
     * @param array $actual
     * @param bool $ordered If the order of the values should match
     * @param bool $named If the keys should match
     */
    protected function assertArrayEquals(
        array $expected,
        array $actual,
        $ordered = false,
        $named = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Put each HTML element on its own line and then equals() the results
     *
     * Use for nicely formatting of PHPUnit diff output when comparing very
     * simple HTML
     *
     * @since 1.20
     *
     * @param string $expected HTML on oneline
     * @param string $actual HTML on oneline
     * @param string $msg Optional message
     */
    protected function assertHTMLEquals($expected, $actual, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Does an associative sort that works for objects.
     *
     * @since 1.20
     *
     * @param array $array
     */
    protected function objectAssociativeSort(array &$array)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Utility function for eliminating all string keys from an array.
     * Useful to turn a database result row as returned by fetchRow() into
     * a pure indexed array.
     *
     * @since 1.20
     *
     * @param mixed $r The array to remove string keys from.
     */
    protected static function stripStringKeys(&$r)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the provided variable is of the specified
     * internal type or equals the $value argument. This is useful
     * for testing return types of functions that return a certain
     * type or *value* when not set or on error.
     *
     * @since 1.20
     *
     * @param string $type
     * @param mixed $actual
     * @param mixed $value
     * @param string $message
     */
    protected function assertTypeOrValue($type, $actual, $value = false, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts the type of the provided value. This can be either
     * in internal type such as boolean or integer, or a class or
     * interface the value extends or implements.
     *
     * @since 1.20
     *
     * @param string $type
     * @param mixed $actual
     * @param string $message
     */
    protected function assertType($type, $actual, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns true if the given namespace defaults to Wikitext
     * according to $wgNamespaceContentModels
     *
     * @param int $ns The namespace ID to check
     *
     * @return bool
     * @since 1.21
     */
    protected function isWikitextNS($ns)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the ID of a namespace that defaults to Wikitext.
     *
     * @throws MWException If there is none.
     * @return int The ID of the wikitext Namespace
     * @since 1.21
     */
    protected function getDefaultWikitextNS()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check, if $wgDiff3 is set and ready to merge
     * Will mark the calling test as skipped, if not ready
     *
     * @since 1.21
     */
    protected function markTestSkippedIfNoDiff3()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if $extName is a loaded PHP extension, will skip the
     * test whenever it is not loaded.
     *
     * @since 1.21
     * @param string $extName
     * @return bool
     */
    protected function checkPHPExtension($extName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the given string is a valid HTML snippet.
     * Wraps the given string in the required top level tags and
     * then calls assertValidHtmlDocument().
     * The snippet is expected to be HTML 5.
     *
     * @since 1.23
     *
     * @note Will mark the test as skipped if the "tidy" module is not installed.
     * @note This ignores $wgUseTidy, so we can check for valid HTML even (and especially)
     *        when automatic tidying is disabled.
     *
     * @param string $html An HTML snippet (treated as the contents of the body tag).
     */
    protected function assertValidHtmlSnippet($html)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the given string is valid HTML document.
     *
     * @since 1.23
     *
     * @note Will mark the test as skipped if the "tidy" module is not installed.
     * @note This ignores $wgUseTidy, so we can check for valid HTML even (and especially)
     *        when automatic tidying is disabled.
     *
     * @param string $html A complete HTML document
     */
    protected function assertValidHtmlDocument($html)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $matcher
     * @param string $actual
     * @param bool $isHtml
     *
     * @return bool
     */
    private static function tagMatch($matcher, $actual, $isHtml = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Note: we are overriding this method to remove the deprecated error
     * @see https://phabricator.wikimedia.org/T71505
     * @see https://github.com/sebastianbergmann/phpunit/issues/1292
     * @deprecated
     *
     * @param array $matcher
     * @param string $actual
     * @param string $message
     * @param bool $isHtml
     */
    public static function assertTag($matcher, $actual, $message = '', $isHtml = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @see MediaWikiTestCase::assertTag
     * @deprecated
     *
     * @param array $matcher
     * @param string $actual
     * @param string $message
     * @param bool $isHtml
     */
    public static function assertNotTag($matcher, $actual, $message = '', $isHtml = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Used as a marker to prevent wfResetOutputBuffers from breaking PHPUnit.
     * @return string
     */
    public static function wfResetOutputBuffersBarrier($buffer)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a temporary hook handler which will be reset by tearDown.
     * This replaces other handlers for the same hook.
     * @param string $hookName Hook name
     * @param mixed $handler Value suitable for a hook handler
     * @since 1.28
     */
    protected function setTemporaryHook($hookName, $handler)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
