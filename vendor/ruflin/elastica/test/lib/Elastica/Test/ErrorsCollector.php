<?php

namespace Elastica\Test;

/**
 * Errors collector for testing.
 *
 * @author Evgeniy Sokolov <ewgraf@gmail.com>
 */
class ErrorsCollector
{
    private $errors = array();

    /**
     * @var \PHPUnit_Framework_TestCase
     */
    private $testCase;

    public function __construct(\PHPUnit_Framework_TestCase $testCase = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function add($error)
    {
        $this->errors[] = $error;
    }

    public function getCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function assertOnlyOneDeprecatedError($deprecationMessage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function assertOnlyDeprecatedErrors(array $deprecationMessages)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getDeprecatedCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getType($index)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getMessage($index)
    {
        return $this->errors[$index][1];
    }
}
