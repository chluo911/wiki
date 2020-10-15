<?php

/**
 * RulesetCall
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_RulesetCall extends Less_Tree{

	public $variable;
	public $type = "RulesetCall";

    public function __construct($variable){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function accept($visitor) {}

    public function compile( $env ){
		$variable = new Less_Tree_Variable($this->variable);
		$detachedRuleset = $variable->compile($env);
		return $detachedRuleset->callEval($env);
	}
}

