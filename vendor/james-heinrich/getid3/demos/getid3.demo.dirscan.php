<?php
/////////////////////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>                               //
//  available at http://getid3.sourceforge.net                                 //
//            or http://www.getid3.org                                         //
//          also https://github.com/JamesHeinrich/getID3                       //
/////////////////////////////////////////////////////////////////////////////////
///                                                                            //
// getid3.dirscan.php - tool for batch media file processing with getID3()     //
//                                                                            ///
/////////////////////////////////////////////////////////////////////////////////
///                                                                            //
//  Directory Scanning and Caching CLI tool by Karl G. Holz <newaeonØmac*com>  //
//                                                                            ///
/////////////////////////////////////////////////////////////////////////////////
/**
* This is a directory scanning and caching cli tool for getID3().
*
* use like so for the default sqlite3 database, which is hidden:
*
* cd <path you want to start scanning from>
* php <path to getid3 files>/getid3.dirscan.php
*
* or
*
* php <path to getid3 files>/getid3.dirscan.php <dir to scan> <file ext in csv list>
*
* Supported Cache Types    (this extension)
*
*   SQL Databases:
*
*   cache_type
*   -------------------------------------------------------------------
*    mysql

$cache='mysql';
$database['host']='';
$database['database']='';
$database['username']='';
$database['password']='';
$database['table']='';

*    sqlite3

$cache='sqlite3';
$database['table']='getid3_cache';
$database['hide']=true;

*/
$dir      = $_SERVER['PWD'];
$media    = array('mp4', 'm4v', 'mov', 'mp3', 'm4a', 'jpg', 'png', 'gif');
$database = array();
/**
* configure the database bellow
*/
// sqlite3
$cache             = 'sqlite3';
$database['table'] = 'getid3_cache';
$database['hide']  = true;
/**
 * mysql
$cache                = 'mysql';
$database['host']     = '';
$database['database'] = '';
$database['username'] = '';
$database['password'] = '';
$database['table']    = '';
*/

/**
* id3 tags class file
*/
require_once(dirname(__FILE__).'/getid3.php');
/**
* dirscan scans all directories for files that match your selected filetypes into the cache database
* this is useful for a lot of media files
*
*
* @package dirscan
* @author Karl Holz
*
*/

class dirscan {
	/**
	* type_brace()  * Might not work on Solaris and other non GNU systems *
	*
	* Configures a filetype list for use with glob searches,
	* will match uppercase or lowercase extensions only, no mixing
	* @param string $dir directory to use
	* @param mixed cvs list of extentions or an array
	* @return string or null if checks fail
	*/
	private function type_brace($dir, $search=array()) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* this function will search 4 levels deep for directories
	* will return null on failure
	* @param string $root
	* @return array return an array of dirs under root
	* @todo figure out how to block tabo directories with ease
	*/
	private function getDirs($root) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	*  file_check() check the number of file that are found that match the brace search
	*
	* @param string $search
	* @return mixed
	*/
	private function file_check($search) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	function getTime() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	/**
	*
	* @param type $dir
	* @param type $match  search type name extentions, can be an array or csv list
	* @param type $cache caching extention, select one of sqlite3, mysql, dbm
	* @param array $opt database options,
	*/
	function scan_files($dir, $match, $cache='sqlite3', $opt=array('table'=>'getid3_cache', 'hide'=>true)) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}

if (PHP_SAPI === 'cli') {
	if (count($argv) == 2) {
		if (is_dir($argv[1])) {
			$dir = $argv[1];
		}
		if (count(explode(',', $argv[2])) > 0) {
			$media = $arg[2];
		}
	}
	echo ' * Starting to scan directory: '.$dir."\n";
	echo ' * Using default media types: '.implode(',', $media)."\n";
	dirscan::scan_files($dir, $media, $cache, $database);
}
