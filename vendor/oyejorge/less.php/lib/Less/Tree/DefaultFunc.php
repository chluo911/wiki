<?php

/**
 * DefaultFunc
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_DefaultFunc{

	static $error_;
	static $value_;

    public static function compile(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public static function value( $v ){
		self::$value_ = $v;
	}

    public static function error( $e ){
		self::$error_ = $e;
	}

    public static function reset(){
		self::$value_ = self::$error_ = null;
	}
}
