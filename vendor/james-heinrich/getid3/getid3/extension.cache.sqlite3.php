<?php
/////////////////////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>                               //
//  available at http://getid3.sourceforge.net                                 //
//            or http://www.getid3.org                                         //
//          also https://github.com/JamesHeinrich/getID3                       //
/////////////////////////////////////////////////////////////////////////////////
///                                                                            //
// extension.cache.sqlite3.php - part of getID3()                              //
// Please see readme.txt for more information                                  //
//                                                                            ///
/////////////////////////////////////////////////////////////////////////////////
///                                                                            //
// MySQL extension written by Allan Hansen <ahØartemis*dk>                     //
// Table name mod by Carlo Capocasa <calroØcarlocapocasa*com>                  //
// MySQL extension was reworked for SQLite3 by Karl G. Holz <newaeonØmac*com>  //
//                                                                            ///
/////////////////////////////////////////////////////////////////////////////////
/**
* This is a caching extension for getID3(). It works the exact same
* way as the getID3 class, but return cached information much faster
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
*       require_once 'getid3/extension.cache.sqlite3.php';
*       // all parameters are optional, defaults are:
*       $getID3 = new getID3_cached_sqlite3($table='getid3_cache', $hide=FALSE);
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
*   sqlite3             table='getid3_cache', hide=false        (PHP5)
*
*
* ***  database file will be stored in the same directory as this script,
* ***  webserver must have write access to that directory!
* ***  set $hide to TRUE to prefix db file with .ht to pervent access from web client
* ***  this is a default setting in the Apache configuration:
*
* The following lines prevent .htaccess and .htpasswd files from being viewed by Web clients.
*
* <Files ~ "^\.ht">
*     Order allow,deny
*     Deny from all
*     Satisfy all
* </Files>
*
********************************************************************************
*
*   -------------------------------------------------------------------
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
* Recommended Cache Types
*
*   Infrequent updates, many reads      any DBM
*   Frequent updates                    mysql
********************************************************************************
*
* IMHO this is still a bit slow, I'm using this with MP4/MOV/ M4v files
* there is a plan to add directory scanning and analyzing to make things work much faster
*
*
*/
class getID3_cached_sqlite3 extends getID3 {

	/**
	* __construct()
	* @param string $table holds name of sqlite table
	* @return type
	*/
	public function __construct($table='getid3_cache', $hide=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* close the database connection
	*/
	public function __destruct() {
		$db=$this->db;
		$db->close();
	}

	/**
	* hold the sqlite db
	* @var SQLite Resource
	*/
	private $db;

	/**
	* table to use for caching
	* @var string $table
	*/
	private $table;

	/**
	* clear the cache
	* @access private
	* @return type
	*/
	private function clear_cache() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* analyze file and cache them, if cached pull from the db
	* @param type $filename
	* @return boolean
	*/
	public function analyze($filename, $filesize=null, $original_filename='') {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* create data base table
	* this is almost the same as MySQL, with the exception of the dirname being added
	* @return type
	*/
	private function create_table() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* get cached directory
	*
	* This function is not in the MySQL extention, it's ment to speed up requesting multiple files
	* which is ideal for podcasting, playlists, etc.
	*
	* @access public
	* @param string $dir directory to search the cache database for
	* @return array return an array of matching id3 data
	*/
	public function get_cached_dir($dir) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* use the magical __get() for sql queries
	*
	* access as easy as $this->{case name}, returns NULL if query is not found
	*/
	public function __get($name) {
		switch($name) {
			case 'version_check':
				return "SELECT val FROM $this->table WHERE filename = :filename AND filesize = '-1' AND filetime = '-1' AND analyzetime = '-1'";
				break;
			case 'delete_cache':
				return "DELETE FROM $this->table";
				break;
			case 'set_version':
				return "INSERT INTO $this->table (filename, dirname, filesize, filetime, analyzetime, val) VALUES (:filename, :dirname, -1, -1, -1, :val)";
				break;
			case 'get_id3_data':
				return "SELECT val FROM $this->table WHERE filename = :filename AND filesize = :filesize AND filetime = :filetime";
				break;
			case 'cache_file':
				return "INSERT INTO $this->table (filename, dirname, filesize, filetime, analyzetime, val) VALUES (:filename, :dirname, :filesize, :filetime, :atime, :val)";
				break;
			case 'make_table':
				//return "CREATE TABLE IF NOT EXISTS $this->table (filename VARCHAR(255) NOT NULL DEFAULT '', dirname VARCHAR(255) NOT NULL DEFAULT '', filesize INT(11) NOT NULL DEFAULT '0', filetime INT(11) NOT NULL DEFAULT '0', analyzetime INT(11) NOT NULL DEFAULT '0', val text not null, PRIMARY KEY (filename, filesize, filetime))";
				return "CREATE TABLE IF NOT EXISTS $this->table (filename VARCHAR(255) DEFAULT '', dirname VARCHAR(255) DEFAULT '', filesize INT(11) DEFAULT '0', filetime INT(11) DEFAULT '0', analyzetime INT(11) DEFAULT '0', val text, PRIMARY KEY (filename, filesize, filetime))";
				break;
			case 'get_cached_dir':
				return "SELECT val FROM $this->table WHERE dirname = :dirname";
				break;
		}
		return null;
	}

}
