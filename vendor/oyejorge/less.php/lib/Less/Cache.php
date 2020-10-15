<?php

require_once( dirname(__FILE__).'/Version.php');

/**
 * Utility for handling the generation and caching of css files
 *
 * @package Less
 * @subpackage cache
 *
 */
class Less_Cache{

	// directory less.php can use for storing data
	public static $cache_dir	= false;

	// prefix for the storing data
	public static $prefix		= 'lessphp_';

	// prefix for the storing vars
	public static $prefix_vars	= 'lessphpvars_';

	// specifies the number of seconds after which data created by less.php will be seen as 'garbage' and potentially cleaned up
	public static $gc_lifetime	= 604800;


	/**
	 * Save and reuse the results of compiled less files.
	 * The first call to Get() will generate css and save it.
	 * Subsequent calls to Get() with the same arguments will return the same css filename
	 *
	 * @param array $less_files Array of .less files to compile
	 * @param array $parser_options Array of compiler options
	 * @param array $modify_vars Array of variables
	 * @return string Name of the css file
	 */
	public static function Get( $less_files, $parser_options = array(), $modify_vars = array() ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Force the compiler to regenerate the cached css file
	 *
	 * @param array $less_files Array of .less files to compile
	 * @param array $parser_options Array of compiler options
	 * @param array $modify_vars Array of variables
	 * @return string Name of the css file
	 */
	public static function Regen( $less_files, $parser_options = array(), $modify_vars = array() ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function Cache( &$less_files, $parser_options = array() ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	private static function OutputFile( $compiled_name, $parser_options ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	private static function CompiledName( $files, $extrahash ){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function SetCacheDir( $dir ){
		Less_Cache::$cache_dir = $dir;
	}

	public static function CheckCacheDir(){

		Less_Cache::$cache_dir = str_replace('\\','/',Less_Cache::$cache_dir);
		Less_Cache::$cache_dir = rtrim(Less_Cache::$cache_dir,'/').'/';

		if( !file_exists(Less_Cache::$cache_dir) ){
			if( !mkdir(Less_Cache::$cache_dir) ){
				throw new Less_Exception_Parser('Less.php cache directory couldn\'t be created: '.Less_Cache::$cache_dir);
			}

		}elseif( !is_dir(Less_Cache::$cache_dir) ){
			throw new Less_Exception_Parser('Less.php cache directory doesn\'t exist: '.Less_Cache::$cache_dir);

		}elseif( !is_writable(Less_Cache::$cache_dir) ){
			throw new Less_Exception_Parser('Less.php cache directory isn\'t writable: '.Less_Cache::$cache_dir);

		}

	}


	/**
	 * Delete unused less.php files
	 *
	 */
	public static function CleanCache(){
		static $clean = false;

		if( $clean ){
			return;
		}

		$files = scandir(Less_Cache::$cache_dir);
		if( $files ){
			$check_time = time() - self::$gc_lifetime;
			foreach($files as $file){

				// don't delete if the file wasn't created with less.php
				if( strpos($file,Less_Cache::$prefix) !== 0 ){
					continue;
				}

				$full_path = Less_Cache::$cache_dir . $file;

				// make sure the file still exists
				// css files may have already been deleted
				if( !file_exists($full_path) ){
					continue;
				}
				$mtime = filemtime($full_path);

				// don't delete if it's a relatively new file
				if( $mtime > $check_time ){
					continue;
				}

				$parts = explode('.',$file);
				$type = array_pop($parts);


				// delete css files based on the list files
				if( $type === 'css' ){
					continue;
				}


				// delete the list file and associated css file
				if( $type === 'list' ){
					self::ListFiles($full_path, $list, $css_file_name);
					if( $css_file_name ){
						$css_file = Less_Cache::$cache_dir . $css_file_name;
						if( file_exists($css_file) ){
							unlink($css_file);
						}
					}
				}

				unlink($full_path);
			}
		}

		$clean = true;
	}


	/**
	 * Get the list of less files and generated css file from a list file
	 *
	 */
	static function ListFiles($list_file, &$list, &$css_file_name ){

		$list = explode("\n",file_get_contents($list_file));

		//pop the cached name that should match $compiled_name
		$css_file_name = array_pop($list);

		if( !preg_match('/^' . Less_Cache::$prefix . '[a-f0-9]+\.css$/',$css_file_name) ){
			$list[] = $css_file_name;
			$css_file_name = false;
		}

	}

}
