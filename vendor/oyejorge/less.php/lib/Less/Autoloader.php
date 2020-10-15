<?php

/**
 * Autoloader
 *
 * @package Less
 * @subpackage autoload
 */
class Less_Autoloader {

	/**
	 * Registered flag
	 *
	 * @var boolean
	 */
	protected static $registered = false;

	/**
	 * Library directory
	 *
	 * @var string
	 */
	protected static $libDir;

	/**
	 * Register the autoloader in the spl autoloader
	 *
	 * @return void
	 * @throws Exception If there was an error in registration
	 */
	public static function register(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Unregisters the autoloader
	 *
	 * @return void
	 */
	public static function unregister(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Loads the class
	 *
	 * @param string $className The class to load
	 */
	public static function loadClass($className){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
