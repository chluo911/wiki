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
// write.apetag.php                                            //
// module for writing APE tags                                 //
// dependencies: module.tag.apetag.php                         //
//                                                            ///
/////////////////////////////////////////////////////////////////


getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.apetag.php', __FILE__, true);

class getid3_write_apetag
{

	public $filename;
	public $tag_data;
	public $always_preserve_replaygain = true;    // ReplayGain / MP3gain tags will be copied from old tag even if not passed in data
	public $warnings                   = array(); // any non-critical errors will be stored here
	public $errors                     = array(); // any critical errors will be stored here

	public function __construct() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function WriteAPEtag() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function DeleteAPEtag() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public function GenerateAPEtag() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function GenerateAPEtagHeaderFooter(&$items, $isheader=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function GenerateAPEtagFlags($header=true, $footer=true, $isheader=false, $encodingid=0, $readonly=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function CleanAPEtagItemKey($itemkey) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
