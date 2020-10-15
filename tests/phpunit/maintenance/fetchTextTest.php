<?php

require_once __DIR__ . "/../../../maintenance/fetchText.php";

/**
 * Mock for the input/output of FetchText
 *
 * FetchText internally tries to access stdin and stdout. We mock those aspects
 * for testing.
 */
class SemiMockedFetchText extends FetchText
{

    /**
     * @var string|null Text to pass as stdin
     */
    private $mockStdinText = null;

    /**
     * @var bool Whether or not a text for stdin has been provided
     */
    private $mockSetUp = false;

    /**
     * @var array Invocation counters for the mocked aspects
     */
    private $mockInvocations = [ 'getStdin' => 0 ];

    /**
     * Data for the fake stdin
     *
     * @param string $stdin The string to be used instead of stdin
     */
    public function mockStdin($stdin)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets invocation counters for mocked methods.
     *
     * @return array An array, whose keys are function names. The corresponding values
     * denote the number of times the function has been invoked.
     */
    public function mockGetInvocations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // -----------------------------------------------------------------
    // Mocked functions from FetchText follow.

    public function getStdin($len = null)
    {
        $this->mockInvocations['getStdin']++;
        if ($len !== null) {
            throw new PHPUnit_Framework_ExpectationFailedException(
                "Tried to get stdin with non null parameter"
            );
        }

        if (!$this->mockSetUp) {
            throw new PHPUnit_Framework_ExpectationFailedException(
                "Tried to get stdin before setting up rerouting"
            );
        }

        return fopen('data://text/plain,' . $this->mockStdinText, 'r');
    }
}

/**
 * TestCase for FetchText
 *
 * @group Database
 * @group Dump
 * @covers FetchText
 */
class FetchTextTest extends MediaWikiTestCase
{

    // We add 5 Revisions for this test. Their corresponding text id's
    // are stored in the following 5 variables.
    private $textId1;
    private $textId2;
    private $textId3;
    private $textId4;
    private $textId5;

    /**
     * @var Exception|null As the current MediaWikiTestCase::run is not
     * robust enough to recover from thrown exceptions directly, we cannot
     * throw frow within addDBData, although it would be appropriate. Hence,
     * we catch the exception and store it until we are in setUp and may
     * finally rethrow the exception without crashing the test suite.
     */
    private $exceptionFromAddDBData;

    /**
     * @var FetchText The (mocked) FetchText that is to test
     */
    private $fetchText;

    /**
     * Adds a revision to a page, while returning the resuting text's id
     *
     * @param WikiPage $page The page to add the revision to
     * @param string $text The revisions text
     * @param string $summary The revisions summare
     * @return int
     * @throws MWException
     */
    private function addRevision($page, $text, $summary)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

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

    /**
     * Helper to relate FetchText's input and output
     * @param string $input
     * @param string $expectedOutput
     */
    private function assertFilter($input, $expectedOutput)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // Instead of the following functions, a data provider would be great.
    // However, as data providers are evaluated /before/ addDBData, a data
    // provider would not know the required ids.

    public function testExistingSimple()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testExistingSimpleWithNewline()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testExistingSeveral()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testNonExisting()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testNegativeInteger()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testFloatingPointNumberExisting()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testFloatingPointNumberNonExisting()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCharacters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testMix()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
