<?php


/**
 * Call
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Call extends Less_Tree{
    public $value;

    protected $name;
    protected $args;
    protected $index;
    protected $currentFileInfo;
    public $type = 'Call';

	public function __construct($name, $args, $index, $currentFileInfo = null ){
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

    //
    // When evaluating a function call,
    // we either find the function in `tree.functions` [1],
    // in which case we call it, passing the  evaluated arguments,
    // or we simply print it out as it appeared originally [2].
    //
    // The *functions.js* file contains the built-in functions.
    //
    // The reason why we evaluate the arguments, is in the case where
    // we try to pass a variable to a function, like: `saturate(@color)`.
    // The function should receive the value, not the variable.
    //
    public function compile($env=null){
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

		$output->add( $this->name . '(', $this->currentFileInfo, $this->index );
		$args_len = count($this->args);
		for($i = 0; $i < $args_len; $i++ ){
			$this->args[$i]->genCSS( $output );
			if( $i + 1 < $args_len ){
				$output->add( ', ' );
			}
		}

		$output->add( ')' );
	}


    //public function toCSS(){
    //    return $this->compile()->toCSS();
    //}

}
