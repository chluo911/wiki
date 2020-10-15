<?php
use Wikimedia\ScopedCallback;

/**
 * This is the TestCase subclass for running a single parser test via the
 * ParserTestRunner integration test system.
 *
 * Note: the following groups are not used by PHPUnit.
 * The list in ParserTestFileSuite::__construct() is used instead.
 *
 * @group Database
 * @group Parser
 * @group ParserTests
 *
 * @todo covers tags
 */
class ParserIntegrationTest extends PHPUnit_Framework_TestCase
{
    /** @var array */
    private $ptTest;

    /** @var ParserTestRunner */
    private $ptRunner;

    /** @var ScopedCallback */
    private $ptTeardownScope;

    public function __construct($runner, $fileName, $test)
    {
        parent::__construct(
            'testParse',
            [ '[details omitted]' ],
            basename($fileName) . ': ' . $test['desc']
        );
        $this->ptTest = $test;
        $this->ptRunner = $runner;
    }

    public function testParse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
