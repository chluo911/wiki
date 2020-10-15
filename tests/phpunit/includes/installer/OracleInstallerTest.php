<?php

/**
 * Tests for OracleInstaller
 *
 * @group Database
 * @group Installer
 */

class OracleInstallerTest extends MediaWikiTestCase
{

    /**
     * @dataProvider provideOracleConnectStrings
     * @covers OracleInstaller::checkConnectStringFormat
     */
    public function testCheckConnectStringFormat($expected, $connectString, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider to test OracleInstaller::checkConnectStringFormat()
     */
    public function provideOracleConnectStrings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
