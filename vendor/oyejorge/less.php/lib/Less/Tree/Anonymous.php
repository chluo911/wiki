<?php

/**
 * Anonymous
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Anonymous extends Less_Tree{
	public $value;
	public $quote;
	public $index;
	public $mapLines;
	public $currentFileInfo;
	public $type = 'Anonymous';

	/**
	 * @param integer $index
	 * @param boolean $mapLines
	 */
	public function __construct($value, $index = null, $currentFileInfo = null, $mapLines = null ){
		$this->value = $value;
		$this->index = $index;
		$this->mapLines = $mapLines;
		$this->currentFileInfo = $currentFileInfo;
	}

	public function compile(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function compare($x){
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
		$output->add( $this->value, $this->currentFileInfo, $this->index, $this->mapLines );
	}

	public function toCSS(){
		return $this->value;
	}

}
