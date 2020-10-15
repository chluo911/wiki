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
// write.lyrics3.php                                           //
// module for writing Lyrics3 tags                             //
// dependencies: module.tag.lyrics3.php                        //
//                                                            ///
/////////////////////////////////////////////////////////////////


class getid3_write_lyrics3
{
	public $filename;
	public $tag_data;
	//public $lyrics3_version = 2;       // 1 or 2
	public $warnings        = array(); // any non-critical errors will be stored here
	public $errors          = array(); // any critical errors will be stored here

	public function __construct() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function WriteLyrics3() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
	public function DeleteLyrics3() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
