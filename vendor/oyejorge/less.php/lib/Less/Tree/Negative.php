<?php

/**
 * Negative
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Negative extends Less_Tree{

	public $value;
	public $type = 'Negative';

    public function __construct($node){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	//function accept($visitor) {
	//	$this->value = $visitor->visit($this->value);
	//}

    /**
     * @see Less_Tree::genCSS
     */
    public function genCSS( $output ){
		$output->add( '-' );
		$this->value->genCSS( $output );
	}

    public function compile($env) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}
