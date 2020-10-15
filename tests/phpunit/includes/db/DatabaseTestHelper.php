<?php

/**
 * Helper for testing the methods from the Database class
 * @since 1.22
 */
class DatabaseTestHelper extends Database
{

    /**
     * __CLASS__ of the test suite,
     * used to determine, if the function name is passed every time to query()
     */
    protected $testName = [];

    /**
     * Array of lastSqls passed to query(),
     * This is an array since some methods in Database can do more than one
     * query. Cleared when calling getLastSqls().
     */
    protected $lastSqls = [];

    /** @var array List of row arrays */
    protected $nextResult = [];

    /**
     * Array of tables to be considered as existing by tableExist()
     * Use setExistingTables() to alter.
     */
    protected $tablesExists;

    public function __construct($testName, array $opts = [])
    {
        $this->testName = $testName;

        $this->profiler = new ProfilerStub([]);
        $this->trxProfiler = new TransactionProfiler();
        $this->cliMode = isset($opts['cliMode']) ? $opts['cliMode'] : true;
        $this->connLogger = new \Psr\Log\NullLogger();
        $this->queryLogger = new \Psr\Log\NullLogger();
        $this->errorLogger = function (Exception $e) {
            wfWarn(get_class($e) . ": {$e->getMessage()}");
        };
        $this->currentDomain = DatabaseDomain::newUnspecified();
    }

    /**
     * Returns SQL queries grouped by '; '
     * Clear the list of queries that have been done so far.
     */
    public function getLastSqls()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setExistingTables($tablesExists)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param mixed $res Use an array of row arrays to set row result
     */
    public function forceNextResult($res)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function addSql($sql)
    {
        // clean up spaces before and after some words and the whole string
        $this->lastSqls[] = trim(preg_replace(
            '/\s{2,}(?=FROM|WHERE|GROUP BY|ORDER BY|LIMIT)|(?<=SELECT|INSERT|UPDATE)\s{2,}/',
            ' ',
            $sql
        ));
    }

    protected function checkFunctionName($fname)
    {
        if (substr($fname, 0, strlen($this->testName)) !== $this->testName) {
            throw new MWException('function name does not start with test class. ' .
                $fname . ' vs. ' . $this->testName . '. ' .
                'Please provide __METHOD__ to database methods.');
        }
    }

    public function strencode($s)
    {
        // Choose apos to avoid handling of escaping double quotes in quoted text
        return str_replace("'", "\'", $s);
    }

    public function addIdentifierQuotes($s)
    {
        // no escaping to avoid handling of double quotes in quoted text
        return $s;
    }

    public function query($sql, $fname = '', $tempIgnore = false)
    {
        $this->checkFunctionName($fname);
        $this->addSql($sql);

        return parent::query($sql, $fname, $tempIgnore);
    }

    public function tableExists($table, $fname = __METHOD__)
    {
        $tableRaw = $this->tableName($table, 'raw');
        if (isset($this->mSessionTempTables[$tableRaw])) {
            return true; // already known to exist
        }

        $this->checkFunctionName($fname);

        return in_array($table, (array)$this->tablesExists);
    }

    // Redeclare parent method to make it public
    public function nativeReplace($table, $rows, $fname)
    {
        return parent::nativeReplace($table, $rows, $fname);
    }

    public function getType()
    {
        return 'test';
    }

    public function open($server, $user, $password, $dbName)
    {
        return false;
    }

    public function fetchObject($res)
    {
        return false;
    }

    public function fetchRow($res)
    {
        return false;
    }

    public function numRows($res)
    {
        return -1;
    }

    public function numFields($res)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function fieldName($res, $n)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function insertId()
    {
        return -1;
    }

    public function dataSeek($res, $row)
    {
        /* nop */
    }

    public function lastErrno()
    {
        return -1;
    }

    public function lastError()
    {
        return 'test';
    }

    public function fieldInfo($table, $field)
    {
        return false;
    }

    public function indexInfo($table, $index, $fname = 'Database::indexInfo')
    {
        return false;
    }

    public function affectedRows()
    {
        return -1;
    }

    public function getSoftwareLink()
    {
        return 'test';
    }

    public function getServerVersion()
    {
        return 'test';
    }

    public function getServerInfo()
    {
        return 'test';
    }

    public function isOpen()
    {
        return true;
    }

    public function ping(&$rtt = null)
    {
        $rtt = 0.0;
        return true;
    }

    protected function closeConnection()
    {
        return false;
    }

    protected function doQuery($sql)
    {
        $res = $this->nextResult;
        $this->nextResult = [];

        return new FakeResultWrapper($res);
    }
}
