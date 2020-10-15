<?php

/**
 * Class FakeDiffOp used to test abstract class DiffOp
 */
class FakeDiffOp extends DiffOp
{
    public function reverse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
