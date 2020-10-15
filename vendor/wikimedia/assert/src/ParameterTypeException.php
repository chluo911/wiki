<?php

namespace Wikimedia\Assert;

/**
 * Exception indicating that a parameter type assertion failed.
 * This generally means a disagreement between the caller and the implementation of a function.
 *
 * @license MIT
 * @author Daniel Kinzler
 * @copyright Wikimedia Deutschland e.V.
 */
class ParameterTypeException extends ParameterAssertionException {

	/**
	 * @var string
	 */
	private $parameterType;

	/**
	 * @param string $parameterName
	 * @param string $parameterType
	 *
	 * @throws ParameterTypeException
	 */
	public function __construct( $parameterName, $parameterType ) {
		if ( !is_string( $parameterType ) ) {
			throw new ParameterTypeException( 'parameterType', 'string' );
		}

		parent::__construct( $parameterName, "must be a $parameterType" );

		$this->parameterType = $parameterType;
	}

	/**
	 * @return string
	 */
	public function getParameterType() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
