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
// write.real.php                                              //
// module for writing RealAudio/RealVideo tags                 //
// dependencies: module.tag.real.php                           //
//                                                            ///
/////////////////////////////////////////////////////////////////

class getid3_write_real
{
	public $filename;
	public $tag_data          = array();
	public $fread_buffer_size = 32768;   // read buffer size in bytes
	public $warnings          = array(); // any non-critical errors will be stored here
	public $errors            = array(); // any critical errors will be stored here
	public $paddedlength      = 512;     // minimum length of CONT tag in bytes

	public function __construct() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function WriteReal() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function GenerateRMFchunk(&$chunks) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function GeneratePROPchunk(&$chunks, &$new_CONT_tag_data) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function GenerateCONTchunk() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function RemoveReal() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
