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
// module.audio.dts.php                                        //
// module for analyzing DTS Audio files                        //
// dependencies: NONE                                          //
//                                                             //
/////////////////////////////////////////////////////////////////


/**
* @tutorial http://wiki.multimedia.cx/index.php?title=DTS
*/
class getid3_dts extends getid3_handler
{
	/**
	* Default DTS syncword used in native .cpt or .dts formats
	*/
    const syncword = "\x7F\xFE\x80\x01";

	private $readBinDataOffset = 0;

    /**
    * Possible syncwords indicating bitstream encoding
    */
    public static $syncwords = array(
    	0 => "\x7F\xFE\x80\x01",  // raw big-endian
    	1 => "\xFE\x7F\x01\x80",  // raw little-endian
    	2 => "\x1F\xFF\xE8\x00",  // 14-bit big-endian
    	3 => "\xFF\x1F\x00\xE8"); // 14-bit little-endian

	public function Analyze() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	private function readBinData($bin, $length) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function bitrateLookup($index) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function sampleRateLookup($index) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function bitPerSampleLookup($index) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function numChannelsLookup($index) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function channelArrangementLookup($index) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function dialogNormalization($index, $version) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
