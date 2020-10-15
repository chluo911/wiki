<?php

class FileRepoTest extends MediaWikiTestCase
{

    /**
     * @expectedException MWException
     * @covers FileRepo::__construct
     */
    public function testFileRepoConstructionOptionCanNotBeNull()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException MWException
     * @covers FileRepo::__construct
     */
    public function testFileRepoConstructionOptionCanNotBeAnEmptyArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException MWException
     * @covers FileRepo::__construct
     */
    public function testFileRepoConstructionOptionNeedNameKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException MWException
     * @covers FileRepo::__construct
     */
    public function testFileRepoConstructionOptionNeedBackendKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers FileRepo::__construct
     */
    public function testFileRepoConstructionWithRequiredOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
