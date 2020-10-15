<?php

require_once __DIR__ . "/../../../maintenance/dumpTextPass.php";

/**
 * Tests for TextPassDumper that rely on the database
 *
 * Some of these tests use the old constuctor for TextPassDumper
 * and the dump() function, while others use the new loadWithArgv( $args )
 * function and execute(). This is to ensure both the old and new methods
 * work properly.
 *
 * @group Database
 * @group Dump
 * @covers TextPassDumper
 */
class TextPassDumperDatabaseTest extends DumpTestCase
{

    // We'll add several pages, revision and texts. The following variables hold the
    // corresponding ids.
    private $pageId1;
    private $pageId2;
    private $pageId3;
    private $pageId4;
    private static $numOfPages = 4;
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
    private static $numOfRevs = 8;

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

    public function testPlain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPrefetchPlain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensures that checkpoint dumps are used and written, by successively increasing the
     * stub size and dumping until the duration crosses a threshold.
     *
     * @param string $checkpointFormat Either "file" for plain text or "gzip" for gzipped
     *   checkpoint files.
     */
    private function checkpointHelper($checkpointFormat = "file")
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Broken per T70653.
     *
     * @group large
     * @group Broken
     */
    public function testCheckpointPlain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * tests for working checkpoint generation in gzip format work.
     *
     * We keep this test in addition to the simpler self::testCheckpointPlain, as there
     * were once problems when the used sinks were DumpPipeOutputs.
     *
     * xmldumps-backup typically uses bzip2 instead of gzip. However, as bzip2 requires
     * PHP extensions, we go for gzip instead, which triggers the same relevant code
     * paths while still being testable on more systems.
     *
     * Broken per T70653.
     *
     * @group large
     * @group Broken
     */
    public function testCheckpointGzip()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates a stub file that is used for testing the text pass of dumps
     *
     * @param string $fname (Optional) Absolute name of the file to write
     *   the stub into. If this parameter is null, a new temporary
     *   file is generated that is automatically removed upon tearDown.
     * @param int $iterations (Optional) specifies how often the block
     *   of 3 pages should go into the stub file. The page and
     *   revision id increase further and further, while the text
     *   id of the first iteration is reused. The pages and revision
     *   of iteration > 1 have no corresponding representation in the database.
     * @return string Absolute filename of the stub
     */
    private function setUpStub($fname = null, $iterations = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class BackupTextPassTestModelHandler extends TextContentHandler
{
    public function __construct()
    {
        parent::__construct('BackupTextPassTestModel');
    }

    public function exportTransform($text, $format = null)
    {
        return strtoupper($text);
    }
}

/**
 * Tests for TextPassDumper that do not rely on the database
 *
 * (As the Database group is only detected at class level (not method level), we
 * cannot bring this test case's tests into the above main test case.)
 *
 * @group Dump
 * @covers TextPassDumper
 */
class TextPassDumperDatabaselessTest extends MediaWikiLangTestCase
{
    /**
     * Ensures that setting the buffer size is effective.
     *
     * @dataProvider bufferSizeProvider
     */
    public function testBufferSizeSetting($expected, $size, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensures that setting the buffer size is effective.
     *
     * @dataProvider bufferSizeProvider
     */
    public function bufferSizeProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Accessor for internal state of TextPassDumper
 *
 * Do not warrentless add getters here.
 */
class TextPassDumperAccessor extends TextPassDumper
{
    /**
     * Gets the bufferSize.
     *
     * If bufferSize setting does not work correctly, testCheckpoint... tests
     * fail and point in the wrong direction. To aid in troubleshooting when
     * testCheckpoint... tests break at some point in the future, we test the
     * bufferSize setting, hence need this accessor.
     *
     * (Yes, bufferSize is internal state of the TextPassDumper, but aiding
     * debugging of testCheckpoint... in the future seems to be worth testing
     * against it nonetheless.)
     */
    public function getBufferSize()
    {
        return $this->bufferSize;
    }

    public function dump($history, $text = null)
    {
        return true;
    }
}
