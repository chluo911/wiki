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
// module.audio-video.mpeg.php                                 //
// module for analyzing MPEG files                             //
// dependencies: module.audio.mp3.php                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.mp3.php', __FILE__, true);

class getid3_mpeg extends getid3_handler {

	const START_CODE_BASE       = "\x00\x00\x01";
	const VIDEO_PICTURE_START   = "\x00\x00\x01\x00";
	const VIDEO_USER_DATA_START = "\x00\x00\x01\xB2";
	const VIDEO_SEQUENCE_HEADER = "\x00\x00\x01\xB3";
	const VIDEO_SEQUENCE_ERROR  = "\x00\x00\x01\xB4";
	const VIDEO_EXTENSION_START = "\x00\x00\x01\xB5";
	const VIDEO_SEQUENCE_END    = "\x00\x00\x01\xB7";
	const VIDEO_GROUP_START     = "\x00\x00\x01\xB8";
	const AUDIO_START           = "\x00\x00\x01\xC0";


	public function Analyze() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	private function readBitsFromStream(&$bitstream, &$bitstreamoffset, $bits_to_read, $return_singlebit_as_boolean=true) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function systemNonOverheadPercentage($VideoBitrate, $AudioBitrate) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function videoFramerateLookup($rawframerate) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function videoAspectRatioLookup($rawaspectratio) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function videoAspectRatioTextLookup($rawaspectratio) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function videoFormatTextLookup($video_format) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function scalableModeTextLookup($scalable_mode) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function pictureStructureTextLookup($picture_structure) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function chromaFormatTextLookup($chroma_format) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
