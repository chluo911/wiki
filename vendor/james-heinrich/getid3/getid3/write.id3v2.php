<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
// See readme.txt for more details                             //
/////////////////////////////////////////////////////////////////
///                                                            //
// write.id3v2.php                                             //
// module for writing ID3v2 tags                               //
// dependencies: module.tag.id3v2.php                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.id3v2.php', __FILE__, true);

class getid3_write_id3v2
{
	public $filename;
	public $tag_data;
	public $fread_buffer_size           = 32768;    // read buffer size in bytes
	public $paddedlength                = 4096;     // minimum length of ID3v2 tag in bytes
	public $majorversion                = 3;        // ID3v2 major version (2, 3 (recommended), 4)
	public $minorversion                = 0;        // ID3v2 minor version - always 0
	public $merge_existing_data         = false;    // if true, merge new data with existing tags; if false, delete old tag data and only write new tags
	public $id3v2_default_encodingid    = 0;        // default text encoding (ISO-8859-1) if not explicitly passed
	public $id3v2_use_unsynchronisation = false;    // the specs say it should be TRUE, but most other ID3v2-aware programs are broken if unsynchronization is used, so by default don't use it.
	public $warnings                    = array();  // any non-critical errors will be stored here
	public $errors                      = array();  // any critical errors will be stored here

	public function __construct() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function WriteID3v2() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function RemoveID3v2() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public function GenerateID3v2TagFlags($flags) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public function GenerateID3v2FrameFlags($TagAlter=false, $FileAlter=false, $ReadOnly=false, $Compression=false, $Encryption=false, $GroupingIdentity=false, $Unsynchronisation=false, $DataLengthIndicator=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function GenerateID3v2FrameData($frame_name, $source_data_array) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2FrameIsAllowed($frame_name, $source_data_array) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function GenerateID3v2Tag($noerrorsonly=true) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidPriceString($pricestring) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2FrameFlagsLookupTagAlter($framename) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2FrameFlagsLookupFileAlter($framename) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidETCOevent($eventid) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidSYLTtype($contenttype) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidRVA2channeltype($channeltype) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidAPICpicturetype($picturetype) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidAPICimageformat($imageformat) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidCOMRreceivedAs($receivedas) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidRGADname($RGADname) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidRGADoriginator($RGADoriginator) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function ID3v2IsValidTextEncoding($textencodingbyte) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function Unsynchronise($data) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function is_hash($var) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function array_join_merge($arr1, $arr2) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function IsValidMIMEstring($mimestring) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function IsWithinBitRange($number, $maxbits, $signed=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function safe_parse_url($url) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function IsValidURL($url, $allowUserPass=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function ID3v2ShortFrameNameLookup($majorversion, $long_description) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}

