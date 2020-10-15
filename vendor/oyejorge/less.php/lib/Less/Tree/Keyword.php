<?php

/**
 * Keyword
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Keyword extends Less_Tree{

	public $value;
	public $type = 'Keyword';

	/**
	 * @param string $value
	 */
	public function __construct($value){
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

    /**
     * @see Less_Tree::genCSS
     */
	public function genCSS( $output ){

		if( $this->value === '%') {
			throw new Less_Exception_Compiler("Invalid % without number");
		}

		$output->add( $this->value );
	}

	public function compare($other) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}
