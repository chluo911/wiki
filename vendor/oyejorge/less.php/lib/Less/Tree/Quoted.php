<?php

/**
 * Quoted
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Quoted extends Less_Tree{
	public $escaped;
	public $value;
	public $quote;
	public $index;
	public $currentFileInfo;
	public $type = 'Quoted';

	/**
	 * @param string $str
	 */
	public function __construct($str, $content = '', $escaped = false, $index = false, $currentFileInfo = null ){
		$this->escaped = $escaped;
		$this->value = $content;
		if( $str ){
			$this->quote = $str[0];
		}
		$this->index = $index;
		$this->currentFileInfo = $currentFileInfo;
	}

    /**
     * @see Less_Tree::genCSS
     */
    public function genCSS( $output ){
		if( !$this->escaped ){
			$output->add( $this->quote, $this->currentFileInfo, $this->index );
        }
        $output->add( $this->value );
        if( !$this->escaped ){
			$output->add( $this->quote );
        }
    }

	public function compile($env){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function compare($x) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}
