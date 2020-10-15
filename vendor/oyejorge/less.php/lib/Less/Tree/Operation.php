<?php

/**
 * Operation
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Operation extends Less_Tree{

	public $op;
	public $operands;
	public $isSpaced;
	public $type = 'Operation';

	/**
	 * @param string $op
	 */
	public function __construct($op, $operands, $isSpaced = false){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function accept($visitor) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function compile($env){
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
		$this->operands[0]->genCSS( $output );
		if( $this->isSpaced ){
			$output->add( " " );
		}
		$output->add( $this->op );
		if( $this->isSpaced ){
			$output->add( ' ' );
		}
		$this->operands[1]->genCSS( $output );
	}

}
