<?php

/**
 * DetachedRuleset
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_DetachedRuleset extends Less_Tree{

	public $ruleset;
	public $frames;
	public $type = 'DetachedRuleset';

    public function __construct( $ruleset, $frames = null ){
		$this->ruleset = $ruleset;
		$this->frames = $frames;
	}

    public function accept($visitor) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function compile($env){
		if( $this->frames ){
			$frames = $this->frames;
		}else{
			$frames = $env->frames;
		}
		return new Less_Tree_DetachedRuleset($this->ruleset, $frames);
	}

    public function callEval($env) {
		if( $this->frames ){
			return $this->ruleset->compile( $env->copyEvalEnv( array_merge($this->frames,$env->frames) ) );
		}
		return $this->ruleset->compile( $env );
	}
}

