<?php

// +----------------------------------------------------------------------+
// | PHP version 4.1.0                                                    |
// +----------------------------------------------------------------------+
// | Placed in public domain by Allan Hansen, 2002. Share and enjoy!      |
// +----------------------------------------------------------------------+
// | /demo/demo.audioinfo.class.php                                       |
// |                                                                      |
// | Example wrapper class to extract information from audio files        |
// | through getID3().                                                    |
// |                                                                      |
// | getID3() returns a lot of information. Much of this information is   |
// | not needed for the end-application. It is also possible that some    |
// | users want to extract specific info. Modifying getID3() files is a   |
// | bad idea, as modifications needs to be done to future versions of    |
// | getID3().                                                            |
// |                                                                      |
// | Modify this wrapper class instead. This example extracts certain     |
// | fields only and adds a new root value - encoder_options if possible. |
// | It also checks for mp3 files with wave headers.                      |
// +----------------------------------------------------------------------+
// | Example code:                                                        |
// |   $au = new AudioInfo();                                             |
// |   print_r($au->Info('file.flac');                                    |
// +----------------------------------------------------------------------+
// | Authors: Allan Hansen <ahØartemis*dk>                                |
// +----------------------------------------------------------------------+
//



/**
* getID3() settings
*/

require_once('../getid3/getid3.php');




/**
* Class for extracting information from audio files with getID3().
*/

class AudioInfo {

	/**
	* Private variables
	*/
	var $result = NULL;
	var $info   = NULL;




	/**
	* Constructor
	*/

	function AudioInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}




	/**
	* Extract information - only public function
	*
	* @access   public
	* @param    string  file    Audio file to extract info from.
	*/

	function Info($file) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}




	/**
	* post-getID3() data handling for AAC files.
	*
	* @access   private
	*/

	function aacInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}




	/**
	* post-getID3() data handling for Wave files.
	*
	* @access   private
	*/

	function riffInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}




	/**
	* * post-getID3() data handling for FLAC files.
	*
	* @access   private
	*/

	function flacInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}





	/**
	* post-getID3() data handling for Monkey's Audio files.
	*
	* @access   private
	*/

	function macInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}





	/**
	* post-getID3() data handling for Lossless Audio files.
	*
	* @access   private
	*/

	function laInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}





	/**
	* post-getID3() data handling for Ogg Vorbis files.
	*
	* @access   private
	*/

	function oggInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}




	/**
	* post-getID3() data handling for Musepack files.
	*
	* @access   private
	*/

	function mpcInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}




	/**
	* post-getID3() data handling for MPEG files.
	*
	* @access   private
	*/

	function mp3Info() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}




	/**
	* post-getID3() data handling for MPEG files.
	*
	* @access   private
	*/

	function mp2Info() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}





	/**
	* post-getID3() data handling for MPEG files.
	*
	* @access   private
	*/

	function mp1Info() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}




	/**
	* post-getID3() data handling for WMA files.
	*
	* @access   private
	*/

	function asfInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}



	/**
	* post-getID3() data handling for Real files.
	*
	* @access   private
	*/

	function realInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}





	/**
	* post-getID3() data handling for VQF files.
	*
	* @access   private
	*/

	function vqfInfo() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
