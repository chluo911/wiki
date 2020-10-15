<?php

namespace MediaWiki\Auth;

/**
 * @group AuthManager
 */
abstract class AuthenticationRequestTestCase extends \MediaWikiTestCase
{
    abstract protected function getInstance(array $args = []);

    /**
     * @dataProvider provideGetFieldInfo
     */
    public function testGetFieldInfo(array $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetFieldInfo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideLoadFromSubmission
     * @param array $args
     * @param array $data
     * @param array|bool $expectState
     */
    public function testLoadFromSubmission(array $args, array $data, $expectState)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    abstract public function provideLoadFromSubmission();
}
