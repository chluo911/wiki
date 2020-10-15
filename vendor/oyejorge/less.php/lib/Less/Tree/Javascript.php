<?php

/**
 * Javascript
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Javascript extends Less_Tree{

	public $type = 'Javascript';
	public $escaped;
	public $expression;
	public $index;

	/**
	 * @param boolean $index
	 * @param boolean $escaped
	 */
	public function __construct($string, $index, $escaped){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function compile(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
