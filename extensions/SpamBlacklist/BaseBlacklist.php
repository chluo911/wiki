<?php

/**
 * Base class for different kinds of blacklists
 */
abstract class BaseBlacklist
{
    /**
     * Array of blacklist sources
     *
     * @var array
     */
    public $files = array();

    /**
     * Array containing regexes to test against
     *
     * @var bool|array
     */
    protected $regexes = false;

    /**
     * Chance of receiving a warning when the filter is hit
     *
     * @var int
     */
    public $warningChance = 100;

    /**
     * @var int
     */
    public $warningTime = 600;

    /**
     * @var int
     */
    public $expiryTime = 900;

    /**
     * Array containing blacklists that extend BaseBlacklist
     *
     * @var array
     */
    private static $blacklistTypes = array(
        'spam' => 'SpamBlacklist',
        'email' => 'EmailBlacklist',
    );

    /**
     * Array of blacklist instances
     *
     * @var array
     */
    private static $instances = array();

    /**
     * Constructor
     *
     * @param array $settings
     */
    public function __construct($settings = array())
    {
        foreach ($settings as $name => $value) {
            $this->$name = $value;
        }
    }

    /**
     * @param array $links
     * @param Title $title
     * @param bool $preventLog
     * @return mixed
     */
    abstract public function filter(array $links, Title $title, $preventLog = false);

    /**
     * Adds a blacklist class to the registry
     *
     * @param $type string
     * @param $class string
     */
    public static function addBlacklistType($type, $class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return the array of blacklist types currently defined
     *
     * @return array
     */
    public static function getBlacklistTypes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns an instance of the given blacklist
     *
     * @param $type string Code for the blacklist
     * @return BaseBlacklist
     * @throws Exception
     */
    public static function getInstance($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the code for the blacklist implementation
     *
     * @return string
     */
    abstract protected function getBlacklistType();

    /**
     * Check if the given local page title is a spam regex source.
     *
     * @param Title $title
     * @return bool
     */
    public static function isLocalSource(Title $title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the type of blacklist from the given title
     *
     * @param Title $title
     * @return bool|string
     */
    public static function getTypeFromTitle(Title $title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Fetch local and (possibly cached) remote blacklists.
     * Will be cached locally across multiple invocations.
     * @return array set of regular expressions, potentially empty.
     */
    public function getBlacklists()
    {
        if ($this->regexes === false) {
            $this->regexes = array_merge(
                $this->getLocalBlacklists(),
                $this->getSharedBlacklists()
            );
        }
        return $this->regexes;
    }

    /**
     * Returns the local blacklist
     *
     * @return array Regular expressions
     */
    public function getLocalBlacklists()
    {
        $that = $this;
        $type = $this->getBlacklistType();

        return ObjectCache::getMainWANInstance()->getWithSetCallback(
            wfMemcKey('spamblacklist', $type, 'blacklist-regex'),
            $this->expiryTime,
            function () use ($that, $type) {
                return SpamRegexBatch::regexesFromMessage("{$type}-blacklist", $that);
            }
        );
    }

    /**
     * Returns the (local) whitelist
     *
     * @return array Regular expressions
     */
    public function getWhitelists()
    {
        $that = $this;
        $type = $this->getBlacklistType();

        return ObjectCache::getMainWANInstance()->getWithSetCallback(
            wfMemcKey('spamblacklist', $type, 'whitelist-regex'),
            $this->expiryTime,
            function () use ($that, $type) {
                return SpamRegexBatch::regexesFromMessage("{$type}-whitelist", $that);
            }
        );
    }

    /**
     * Fetch (possibly cached) remote blacklists.
     * @return array
     */
    public function getSharedBlacklists()
    {
        $listType = $this->getBlacklistType();

        wfDebugLog('SpamBlacklist', "Loading $listType regex...");

        if (count($this->files) == 0) {
            # No lists
            wfDebugLog('SpamBlacklist', "no files specified\n");
            return array();
        }

        $miss = false;

        $that = $this;
        $regexes = ObjectCache::getMainWANInstance()->getWithSetCallback(
            // This used to be cached per-site, but that could be bad on a shared
            // server where not all wikis have the same configuration.
            wfMemcKey('spamblacklist', $listType, 'shared-blacklist-regex'),
            $this->expiryTime,
            function () use ($that, &$miss) {
                $miss = true;
                return $that->buildSharedBlacklists();
            }
        );

        if (!$miss) {
            wfDebugLog('SpamBlacklist', "Got shared spam regexes from cache\n");
        }

        return $regexes;
    }

    /**
     * Clear all primary blacklist cache keys
     *
     * @note: this method is unused atm
     */
    public function clearCache()
    {
        $listType = $this->getBlacklistType();

        $cache = ObjectCache::getMainWANInstance();
        $cache->delete(wfMemcKey('spamblacklist', $listType, 'shared-blacklist-regex'));
        $cache->delete(wfMemcKey('spamblacklist', $listType, 'blacklist-regex'));
        $cache->delete(wfMemcKey('spamblacklist', $listType, 'whitelist-regex'));

        wfDebugLog('SpamBlacklist', "$listType blacklist local cache cleared.\n");
    }

    public function buildSharedBlacklists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getHttpText($fileName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Fetch an article from this or another local MediaWiki database.
     * This is probably *very* fragile, and shouldn't be used perhaps.
     *
     * @param string $wiki
     * @param string $article
     * @return string
     */
    public function getArticleText($wiki, $article)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the start of the regex for matches
     *
     * @return string
     */
    public function getRegexStart()
    {
        return '/[a-z0-9_\-.]*';
    }

    /**
     * Returns the end of the regex for matches
     *
     * @param $batchSize
     * @return string
     */
    public function getRegexEnd($batchSize)
    {
        return ($batchSize > 0) ? '/Sim' : '/im';
    }

    /**
     * @param Title $title
     * @param string[] $entries
     */
    public function warmCachesForFilter(Title $title, array $entries)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
