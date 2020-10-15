<?php

/**
 * Comment
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Comment extends Less_Tree{

	public $value;
	public $silent;
	public $isReferenced;
	public $currentFileInfo;
	public $type = 'Comment';

	public function __construct($value, $silent, $index = null, $currentFileInfo = null ){
		$this->value = $value;
		$this->silent = !! $silent;
		$this->currentFileInfo = $currentFileInfo;
	}

    /**
     * @see Less_Tree::genCSS
     */
	public function genCSS( $output ){
		//if( $this->debugInfo ){
			//$output->add( tree.debugInfo($env, $this), $this->currentFileInfo, $this->index);
		//}
		$output->add( trim($this->value) );//TODO shouldn't need to trim, we shouldn't grab the \n
	}

	public function toCSS(){
		return Less_Parser::$options['compress'] ? '' : $this->value;
	}

	public function isSilent(){
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

	public function markReferenced(){
		$this->isReferenced = true;
	}

}
