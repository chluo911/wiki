<?php
/**
 * Tests for page dumps of BackupDumper
 *
 * @group Database
 * @group Dump
 * @covers BackupDumper
 */

class BackupDumperPageTest extends DumpTestCase
{

    // We'll add several pages, revision and texts. The following variables hold the
    // corresponding ids.
    private $pageId1;
    private $pageId2;
    private $pageId3;
    private $pageId4;
    private $pageId5;
    private $pageTitle1;
    private $pageTitle2;
    private $pageTitle3;
    private $pageTitle4;
    private $pageTitle5;
    private $revId1_1;
    private $textId1_1;
    private $revId2_1;
    private $textId2_1;
    private $revId2_2;
    private $textId2_2;
    private $revId2_3;
    private $textId2_3;
    private $revId2_4;
    private $textId2_4;
    private $revId3_1;
    private $textId3_1;
    private $revId3_2;
    private $textId3_2;
    private $revId4_1;
    private $textId4_1;
    private $namespace;
    private $talk_namespace;

    public function addDBData()
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

    public function testFullTextPlain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testFullStubPlain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCurrentStubPlain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCurrentStubGzip()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * xmldumps-backup typically performs a single dump that that writes
     * out three files
     * - gzipped stubs of everything (meta-history)
     * - gzipped stubs of latest revisions of all pages (meta-current)
     * - gzipped stubs of latest revisions of all pages of namespage 0
     *   (articles)
     *
     * We reproduce such a setup with our mini fixture, although we omit
     * chunks, and all the other gimmicks of xmldumps-backup.
     */
    public function testXmlDumpsBackupUseCase()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
