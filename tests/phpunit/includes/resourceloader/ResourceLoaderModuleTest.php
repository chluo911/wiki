<?php

class ResourceLoaderModuleTest extends ResourceLoaderTestCase
{

    /**
     * @covers ResourceLoaderModule::getVersionHash
     */
    public function testGetVersionHash()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderModule::validateScriptFile
     */
    public function testValidateScriptFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderModule::getRelativePaths
     * @covers ResourceLoaderModule::expandRelativePaths
     */
    public function testPlaceholderize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
