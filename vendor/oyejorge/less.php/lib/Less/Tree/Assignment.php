<?php

/**
 * Assignment
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Assignment extends Less_Tree{

	public $key;
	public $value;
	public $type = 'Assignment';

    public function __construct($key, $val) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function accept( $visitor ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function compile($env) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    /**
     * @see Less_Tree::genCSS
     */
	public function genCSS( $output ){
		$output->add( $this->key . '=' );
		$this->value->genCSS( $output );
	}

	public function toCss(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}
