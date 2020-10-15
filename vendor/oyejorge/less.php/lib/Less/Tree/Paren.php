<?php

/**
 * Paren
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Paren extends Less_Tree{

	public $value;
	public $type = 'Paren';

	public function __construct($value) {
		$this->value = $value;
	}

    public function accept($visitor){
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
		$output->add( '(' );
		$this->value->genCSS( $output );
		$output->add( ')' );
	}

	public function compile($env) {
		return new Less_Tree_Paren($this->value->compile($env));
	}

}
