<?php

/**
 * Url
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Url extends Less_Tree{

	public $attrs;
	public $value;
	public $currentFileInfo;
	public $isEvald;
	public $type = 'Url';

	public function __construct($value, $currentFileInfo = null, $isEvald = null){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function accept( $visitor ){
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
		$output->add( 'url(' );
		$this->value->genCSS( $output );
		$output->add( ')' );
	}

	/**
	 * @param Less_Functions $ctx
	 */
	public function compile($ctx){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
