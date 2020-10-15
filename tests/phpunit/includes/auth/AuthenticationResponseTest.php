<?php

namespace MediaWiki\Auth;

/**
 * @group AuthManager
 * @covers MediaWiki\Auth\AuthenticationResponse
 */
class AuthenticationResponseTest extends \MediaWikiTestCase
{
    /**
     * @dataProvider provideConstructors
     * @param string $constructor
     * @param array $args
     * @param array|Exception $expect
     */
    public function testConstructors($constructor, $args, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideConstructors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
