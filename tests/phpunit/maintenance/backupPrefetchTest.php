<?php

require_once __DIR__ . "/../../../maintenance/backupPrefetch.inc";

/**
 * Tests for BaseDump
 *
 * @group Dump
 * @covers BaseDump
 */
class BaseDumpTest extends MediaWikiTestCase
{

    /**
     * @var BaseDump The BaseDump instance used within a test.
     *
     * If set, this BaseDump gets automatically closed in tearDown.
     */
    private $dump = null;

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * asserts that a prefetch yields an expected string
     *
     * @param string|null $expected The exepcted result of the prefetch
     * @param int $page The page number to prefetch the text for
     * @param int $revision The revision number to prefetch the text for
     */
    private function assertPrefetchEquals($expected, $page, $revision)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSequential()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSynchronizeRevisionMissToRevision()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSynchronizeRevisionMissToPage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSynchronizePageMiss()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPageMissAtEnd()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testRevisionMissAtEnd()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSynchronizePageMissAtStart()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSynchronizeRevisionMissAtStart()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSequentialAcrossFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSynchronizeSkipAcrossFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSynchronizeMissInWholeFirstFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Constructs a temporary file that can be used for prefetching
     *
     * The temporary file is removed by DumpBackup upon tearDown.
     *
     * @param array $requested_pages The indices of the page parts that should
     *    go into the prefetch file. 1,2,4 are available.
     * @return string The file name of the created temporary file
     */
    private function setUpPrefetch($requested_pages = [ 1, 2, 4 ])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
