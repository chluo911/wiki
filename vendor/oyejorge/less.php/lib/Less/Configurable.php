<?php

/**
 * Configurable
 *
 * @package Less
 * @subpackage Core
 */
abstract class Less_Configurable {

	/**
	 * Array of options
	 *
	 * @var array
	 */
	protected $options = array();

	/**
	 * Array of default options
	 *
	 * @var array
	 */
	protected $defaultOptions = array();


	/**
	 * Set options
	 *
	 * If $options is an object it will be converted into an array by called
	 * it's toArray method.
	 *
	 * @throws Exception
	 * @param array|object $options
	 *
	 */
	public function setOptions($options){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	/**
	 * Get an option value by name
	 *
	 * If the option is empty or not set a NULL value will be returned.
	 *
	 * @param string $name
	 * @param mixed $default Default value if confiuration of $name is not present
	 * @return mixed
	 */
	public function getOption($name, $default = null){
		if(isset($this->options[$name])){
			return $this->options[$name];
		}
		return $default;
	}


	/**
	 * Set an option
	 *
	 * @param string $name
	 * @param mixed $value
	 */
	public function setOption($name, $value){
		$this->options[$name] = $value;
	}

}
