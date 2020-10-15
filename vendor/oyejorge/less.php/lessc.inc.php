<?php
/**
 * This file provides the part of lessphp API (https://github.com/leafo/lessphp)
 * to be a drop-in replacement for following products:
 *  - Drupal 7, by the less module v3.0+ (https://drupal.org/project/less)
 *  - Symfony 2
 */

// Register autoloader for non-composer installations
if ( !class_exists( 'Less_Parser' ) ) {
	require_once __DIR__ . '/lib/Less/Autoloader.php';
	Less_Autoloader::register();
}

class lessc {

	static public $VERSION = Less_Version::less_version;

	public $importDir = '';
	protected $allParsedFiles = array();
	protected $libFunctions = array();
	protected $registeredVars = array();
	private $formatterName;
	private $options = array();

	public function __construct( $lessc=null, $sourceName=null ) {}

	public function setImportDir( $dirs ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function addImportDir( $dir ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function setFormatter( $name ) {
		$this->formatterName = $name;
	}

	public function setPreserveComments( $preserve ) {}

	public function registerFunction( $name, $func ) {
		$this->libFunctions[$name] = $func;
	}

	public function unregisterFunction( $name ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function setVariables( $variables ){
		foreach ( $variables as $name => $value ) {
			$this->setVariable( $name, $value );
		}
	}

	public function setVariable( $name, $value ) {
		$this->registeredVars[$name] = $value;
	}

	public function unsetVariable( $name ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function setOptions( $options ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
	
	public function setOption( $name, $value ) {
		$this->options[$name] = $value;
	}
	
	public function parse( $buffer, $presets = array() ) {

		$this->setVariables( $presets );

		$parser = new Less_Parser( $this->getOptions() );
		$parser->setImportDirs( $this->getImportDirs() );
		foreach ( $this->libFunctions as $name => $func ) {
			$parser->registerFunction( $name, $func );
		}
		$parser->parse($buffer);
		if ( count( $this->registeredVars ) ) {
			$parser->ModifyVars( $this->registeredVars );
		}

		return $parser->getCss();
	}

	protected function getOptions() {
		$options = array( 'relativeUrls'=>false );
		switch( $this->formatterName ) {
			case 'compressed':
				$options['compress'] = true;
				break;
		}
		if (is_array($this->options))
		{
			$options = array_merge($options, $this->options);
		}
		return $options;
	}

	protected function getImportDirs() {
		$dirs_ = (array)$this->importDir;
		$dirs = array();
		foreach ( $dirs_ as $dir ) {
			$dirs[$dir] = '';
		}
		return $dirs;
	}

	public function compile( $string, $name = null ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function compileFile( $fname, $outFname = null ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function checkedCompile( $in, $out ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	/**
	 * Execute lessphp on a .less file or a lessphp cache structure
	 *
	 * The lessphp cache structure contains information about a specific
	 * less file having been parsed. It can be used as a hint for future
	 * calls to determine whether or not a rebuild is required.
	 *
	 * The cache structure contains two important keys that may be used
	 * externally:
	 *
	 * compiled: The final compiled CSS
	 * updated: The time (in seconds) the CSS was last compiled
	 *
	 * The cache structure is a plain-ol' PHP associative array and can
	 * be serialized and unserialized without a hitch.
	 *
	 * @param mixed $in Input
	 * @param bool $force Force rebuild?
	 * @return array lessphp cache structure
	 */
	public function cachedCompile( $in, $force = false ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ccompile( $in, $out, $less = null ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function cexecute( $in, $force = false, $less = null ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function allParsedFiles() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	protected function addParsedFile( $file ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}
