<?php

class ComposerLockTest extends MediaWikiTestCase
{
    private $lock;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ComposerLock::__construct
     * @covers ComposerLock::getInstalledDependencies
     */
    public function testGetInstalledDependencies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
