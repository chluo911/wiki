<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
// See readme.txt for more details                             //
/////////////////////////////////////////////////////////////////
//                                                             //
// module.archive.gzip.php                                     //
// module for analyzing GZIP files                             //
// dependencies: NONE                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////
//                                                             //
// Module originally written by                                //
//      Mike Mozolin <teddybearØmail*ru>                       //
//                                                             //
/////////////////////////////////////////////////////////////////


class getid3_gzip extends getid3_handler {

	// public: Optional file list - disable for speed.
	public $option_gzip_parse_contents = false; // decode gzipped files, if possible, and parse recursively (.tar.gz for example)

	public function Analyze() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// Converts the OS type
	public function get_os_type($key) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// Converts the eXtra FLags
	public function get_xflag_type($key) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}

