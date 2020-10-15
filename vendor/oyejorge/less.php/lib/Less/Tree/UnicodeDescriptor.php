<?php

/**
 * UnicodeDescriptor
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_UnicodeDescriptor extends Less_Tree{

	public $value;
	public $type = 'UnicodeDescriptor';

	public function __construct($value){
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
		$output->add( $this->value );
	}

	public function compile(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}

