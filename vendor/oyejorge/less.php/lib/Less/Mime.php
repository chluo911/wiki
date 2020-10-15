<?php

/**
 * Mime lookup
 *
 * @package Less
 * @subpackage node
 */
class Less_Mime{

	// this map is intentionally incomplete
	// if you want more, install 'mime' dep
	static $_types = array(
	        '.htm' => 'text/html',
	        '.html'=> 'text/html',
	        '.gif' => 'image/gif',
	        '.jpg' => 'image/jpeg',
	        '.jpeg'=> 'image/jpeg',
	        '.png' => 'image/png',
	        '.ttf' => 'application/x-font-ttf',
	        '.otf' => 'application/x-font-otf',
	        '.eot' => 'application/vnd.ms-fontobject',
	        '.woff' => 'application/x-font-woff',
	        '.svg' => 'image/svg+xml',
	        );

	public static function lookup( $filepath ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function charsets_lookup( $type = null ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}
