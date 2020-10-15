<?php

/**
 * This is the suite class for running tests within a single .txt source file.
 * It is not invoked directly. Use --filter to select files, or
 * use parserTests.php.
 */
class ParserTestFileSuite extends PHPUnit_Framework_TestSuite
{
    private $ptRunner;
    private $ptFileName;
    private $ptFileInfo;

    public function __construct($runner, $name, $fileName)
    {
        parent::__construct($name);
        $this->ptRunner = $runner;
        $this->ptFileName = $fileName;
        $this->ptFileInfo = TestFileReader::read($this->ptFileName);

        foreach ($this->ptFileInfo['tests'] as $test) {
            $this->addTest(
                new ParserIntegrationTest($runner, $fileName, $test),
                [ 'Database', 'Parser', 'ParserTests' ]
            );
        }
    }

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
