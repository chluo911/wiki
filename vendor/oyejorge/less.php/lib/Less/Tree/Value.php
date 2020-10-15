<?php

/**
 * Value
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Value extends Less_Tree{

	public $type = 'Value';
	public $value;

	public function __construct($value){
		$this->value = $value;
	}

    public function accept($visitor) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function compile($env){

		$ret = array();
		$i = 0;
		foreach($this->value as $i => $v){
			$ret[] = $v->compile($env);
		}
		if( $i > 0 ){
			return new Less_Tree_Value($ret);
		}
		return $ret[0];
	}

    /**
     * @see Less_Tree::genCSS
     */
	function genCSS( $output ){
		$len = count($this->value);
		for($i = 0; $i < $len; $i++ ){
			$this->value[$i]->genCSS( $output );
			if( $i+1 < $len ){
				$output->add( Less_Environment::$_outputMap[','] );
			}
		}
	}

}
