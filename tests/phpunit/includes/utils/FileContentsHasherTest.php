<?php

/**
 * @covers FileContentsHasherTest
 */
class FileContentsHasherTest extends PHPUnit_Framework_TestCase
{
    public function provideSingleFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideMultipleFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers FileContentsHasher::getFileContentsHash
     * @covers FileContentsHasher::getFileContentsHashInternal
     * @dataProvider provideSingleFile
     */
    public function testSingleFileHash($fileName, $contents)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers FileContentsHasher::getFileContentsHash
     * @covers FileContentsHasher::getFileContentsHashInternal
     * @dataProvider provideMultipleFiles
     */
    public function testMultipleFileHash($files)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
