<?php

/**
 * Extend Finder Visitor
 *
 * @package Less
 * @subpackage visitor
 */
class Less_Visitor_extendFinder extends Less_Visitor{

	public $contexts = array();
	public $allExtendsStack;
	public $foundExtends;

	public function __construct(){
		$this->contexts = array();
		$this->allExtendsStack = array(array());
		parent::__construct();
	}

	/**
	 * @param Less_Tree_Ruleset $root
	 */
    public function run($root){
		$root = $this->visitObj($root);
		$root->allExtends =& $this->allExtendsStack[0];
		return $root;
	}

    public function visitRule($ruleNode, &$visitDeeper ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function visitMixinDefinition( $mixinDefinitionNode, &$visitDeeper ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function visitRuleset($rulesetNode){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function allExtendsStackPush($rulesetNode, $selectorPath, $extend, &$j){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


    public function visitRulesetOut( $rulesetNode ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function visitMedia( $mediaNode ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function visitMediaOut(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function visitDirective( $directiveNode ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function visitDirectiveOut(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}


