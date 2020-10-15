<?php

/**
 * Unit tests for the HTMLCheckMatrix
 * @covers HTMLCheckMatrix
 */
class HtmlCheckMatrixTest extends MediaWikiTestCase
{
    private static $defaultOptions = [
        'rows' => [ 'r1', 'r2' ],
        'columns' => [ 'c1', 'c2' ],
        'fieldname' => 'test',
    ];

    public function testPlainInstantiation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testInstantiationWithMinimumRequiredParameters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testValidateCallsUserDefinedValidationCallback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testValidateRequiresArrayInput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testValidateAllowsOnlyKnownTags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testValidateAcceptsPartialTagList()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This form object actually has no visibility into what happens later on, but essentially
     * if the data submitted by the user passes validate the following is run:
     * foreach ( $field->filterDataForSubmit( $data ) as $k => $v ) {
     *     $user->setOption( $k, $v );
     * }
     */
    public function testValuesForcedOnRemainOn()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testValuesForcedOffRemainOff()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function validate(HTMLFormField $field, $submitted)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
