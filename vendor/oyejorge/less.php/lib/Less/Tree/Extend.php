<?php

/**
 * Extend
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Extend extends Less_Tree{

	public $selector;
	public $option;
	public $index;
	public $selfSelectors = array();
	public $allowBefore;
	public $allowAfter;
	public $firstExtendOnThisSelectorPath;
	public $type = 'Extend';
	public $ruleset;


	public $object_id;
	public $parent_ids = array();

	/**
	 * @param integer $index
	 */
    public function __construct($selector, $option, $index){
		static $i = 0;
		$this->selector = $selector;
		$this->option = $option;
		$this->index = $index;

		switch($option){
			case "all":
				$this->allowBefore = true;
				$this->allowAfter = true;
			break;
			default:
				$this->allowBefore = false;
				$this->allowAfter = false;
			break;
		}

		$this->object_id = $i++;
		$this->parent_ids = array($this->object_id);
	}

    public function accept( $visitor ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function compile( $env ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function findSelfSelectors( $selectors ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
