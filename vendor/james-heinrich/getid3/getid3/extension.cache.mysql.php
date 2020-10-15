<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
//                                                             //
// extension.cache.mysql.php - part of getID3()                //
// Please see readme.txt for more information                  //
//                                                            ///
/////////////////////////////////////////////////////////////////
//                                                             //
// This extension written by Allan Hansen <ahØartemis*dk>      //
// Table name mod by Carlo Capocasa <calroØcarlocapocasa*com>  //
//                                                            ///
/////////////////////////////////////////////////////////////////


/**
* This is a caching extension for getID3(). It works the exact same
* way as the getID3 class, but return cached information very fast
*
* Example:  (see also demo.cache.mysql.php in /demo/)
*
*    Normal getID3 usage (example):
*
*       require_once 'getid3/getid3.php';
*       $getID3 = new getID3;
*       $getID3->encoding = 'UTF-8';
*       $info1 = $getID3->analyze('file1.flac');
*       $info2 = $getID3->analyze('file2.wv');
*
*    getID3_cached usage:
*
*       require_once 'getid3/getid3.php';
*       require_once 'getid3/getid3/extension.cache.mysql.php';
*       // 5th parameter (tablename) is optional, default is 'getid3_cache'
*       $getID3 = new getID3_cached_mysql('localhost', 'database', 'username', 'password', 'tablename');
*       $getID3->encoding = 'UTF-8';
*       $info1 = $getID3->analyze('file1.flac');
*       $info2 = $getID3->analyze('file2.wv');
*
*
* Supported Cache Types    (this extension)
*
*   SQL Databases:
*
*   cache_type          cache_options
*   -------------------------------------------------------------------
*   mysql               host, database, username, password
*
*
*   DBM-Style Databases:    (use extension.cache.dbm)
*
*   cache_type          cache_options
*   -------------------------------------------------------------------
*   gdbm                dbm_filename, lock_filename
*   ndbm                dbm_filename, lock_filename
*   db2                 dbm_filename, lock_filename
*   db3                 dbm_filename, lock_filename
*   db4                 dbm_filename, lock_filename  (PHP5 required)
*
*   PHP must have write access to both dbm_filename and lock_filename.
*
*
* Recommended Cache Types
*
*   Infrequent updates, many reads      any DBM
*   Frequent updates                    mysql
*/


class getID3_cached_mysql extends getID3
{

	// private vars
	private $cursor;
	private $connection;


	// public: constructor - see top of this file for cache type and cache_options
	public function __construct($host, $database, $username, $password, $table='getid3_cache') {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}



	// public: clear cache
	public function clear_cache() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}



	// public: analyze file
	public function analyze($filename, $filesize=null, $original_filename='') {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}



	// private: (re)create sql table
	private function create_table($drop=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}
