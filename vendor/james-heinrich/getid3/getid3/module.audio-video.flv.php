<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
//                                                             //
//  FLV module by Seth Kaufman <sethØwhirl-i-gig*com>          //
//                                                             //
//  * version 0.1 (26 June 2005)                               //
//                                                             //
//                                                             //
//  * version 0.1.1 (15 July 2005)                             //
//  minor modifications by James Heinrich <info@getid3.org>    //
//                                                             //
//  * version 0.2 (22 February 2006)                           //
//  Support for On2 VP6 codec and meta information             //
//    by Steve Webster <steve.websterØfeaturecreep*com>        //
//                                                             //
//  * version 0.3 (15 June 2006)                               //
//  Modified to not read entire file into memory               //
//    by James Heinrich <info@getid3.org>                      //
//                                                             //
//  * version 0.4 (07 December 2007)                           //
//  Bugfixes for incorrectly parsed FLV dimensions             //
//    and incorrect parsing of onMetaTag                       //
//    by Evgeny Moysevich <moysevichØgmail*com>                //
//                                                             //
//  * version 0.5 (21 May 2009)                                //
//  Fixed parsing of audio tags and added additional codec     //
//    details. The duration is now read from onMetaTag (if     //
//    exists), rather than parsing whole file                  //
//    by Nigel Barnes <ngbarnesØhotmail*com>                   //
//                                                             //
//  * version 0.6 (24 May 2009)                                //
//  Better parsing of files with h264 video                    //
//    by Evgeny Moysevich <moysevichØgmail*com>                //
//                                                             //
//  * version 0.6.1 (30 May 2011)                              //
//    prevent infinite loops in expGolombUe()                  //
//                                                             //
//  * version 0.7.0 (16 Jul 2013)                              //
//  handle GETID3_FLV_VIDEO_VP6FLV_ALPHA                       //
//  improved AVCSequenceParameterSetReader::readData()         //
//    by Xander Schouwerwou <schouwerwouØgmail*com>            //
//                                                             //
/////////////////////////////////////////////////////////////////
//                                                             //
// module.audio-video.flv.php                                  //
// module for analyzing Shockwave Flash Video files            //
// dependencies: NONE                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

define('GETID3_FLV_TAG_AUDIO',          8);
define('GETID3_FLV_TAG_VIDEO',          9);
define('GETID3_FLV_TAG_META',          18);

define('GETID3_FLV_VIDEO_H263',         2);
define('GETID3_FLV_VIDEO_SCREEN',       3);
define('GETID3_FLV_VIDEO_VP6FLV',       4);
define('GETID3_FLV_VIDEO_VP6FLV_ALPHA', 5);
define('GETID3_FLV_VIDEO_SCREENV2',     6);
define('GETID3_FLV_VIDEO_H264',         7);

define('H264_AVC_SEQUENCE_HEADER',          0);
define('H264_PROFILE_BASELINE',            66);
define('H264_PROFILE_MAIN',                77);
define('H264_PROFILE_EXTENDED',            88);
define('H264_PROFILE_HIGH',               100);
define('H264_PROFILE_HIGH10',             110);
define('H264_PROFILE_HIGH422',            122);
define('H264_PROFILE_HIGH444',            144);
define('H264_PROFILE_HIGH444_PREDICTIVE', 244);

class getid3_flv extends getid3_handler {

	const magic = 'FLV';

	public $max_frames = 100000; // break out of the loop if too many frames have been scanned; only scan this many if meta frame does not contain useful duration

	public function Analyze() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function audioFormatLookup($id) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function audioRateLookup($id) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function audioBitDepthLookup($id) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function videoCodecLookup($id) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}

class AMFStream {
	public $bytes;
	public $pos;

	public function __construct(&$bytes) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readByte() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readInt() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readLong() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readDouble() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readUTF() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readLongUTF() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function read($length) {
		$val = substr($this->bytes, $this->pos, $length);
		$this->pos += $length;
		return $val;
	}

	public function peekByte() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function peekInt() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function peekLong() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function peekDouble() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function peekUTF() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function peekLongUTF() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}

class AMFReader {
	public $stream;

	public function __construct(&$stream) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readData() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readDouble() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readBoolean() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readString() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readObject() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readMixedArray() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readArray() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readDate() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readLongString() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readXML() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readTypedObject() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}

class AVCSequenceParameterSetReader {
	public $sps;
	public $start = 0;
	public $currentBytes = 0;
	public $currentBits = 0;
	public $width;
	public $height;

	public function __construct($sps) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function readData() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function skipBits($bits) {
		$newBits = $this->currentBits + $bits;
		$this->currentBytes += (int)floor($newBits / 8);
		$this->currentBits = $newBits % 8;
	}

	public function getBit() {
		$result = (getid3_lib::BigEndian2Int(substr($this->sps, $this->currentBytes, 1)) >> (7 - $this->currentBits)) & 0x01;
		$this->skipBits(1);
		return $result;
	}

	public function getBits($bits) {
		$result = 0;
		for ($i = 0; $i < $bits; $i++) {
			$result = ($result << 1) + $this->getBit();
		}
		return $result;
	}

	public function expGolombUe() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function expGolombSe() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function getWidth() {
		return $this->width;
	}

	public function getHeight() {
		return $this->height;
	}
}
