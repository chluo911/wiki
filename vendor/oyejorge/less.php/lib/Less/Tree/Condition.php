<?php

/**
 * Condition
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Condition extends Less_Tree{

	public $op;
	public $lvalue;
	public $rvalue;
	public $index;
	public $negate;
	public $type = 'Condition';

	public function __construct($op, $l, $r, $i = 0, $negate = false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function accept($visitor){
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

}
