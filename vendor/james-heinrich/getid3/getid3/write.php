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
// write.php                                                   //
// module for writing tags (APEv2, ID3v1, ID3v2)               //
// dependencies: getid3.lib.php                                //
//               write.apetag.php (optional)                   //
//               write.id3v1.php (optional)                    //
//               write.id3v2.php (optional)                    //
//               write.vorbiscomment.php (optional)            //
//               write.metaflac.php (optional)                 //
//               write.lyrics3.php (optional)                  //
//                                                            ///
/////////////////////////////////////////////////////////////////

if (!defined('GETID3_INCLUDEPATH')) {
	throw new Exception('getid3.php MUST be included before calling getid3_writetags');
}
if (!include_once(GETID3_INCLUDEPATH.'getid3.lib.php')) {
	throw new Exception('write.php depends on getid3.lib.php, which is missing.');
}


// NOTES:
//
// You should pass data here with standard field names as follows:
// * TITLE
// * ARTIST
// * ALBUM
// * TRACKNUMBER
// * COMMENT
// * GENRE
// * YEAR
// * ATTACHED_PICTURE (ID3v2 only)
//
// http://www.personal.uni-jena.de/~pfk/mpp/sv8/apekey.html
// The APEv2 Tag Items Keys definition says "TRACK" is correct but foobar2000 uses "TRACKNUMBER" instead
// Pass data here as "TRACKNUMBER" for compatability with all formats


class getid3_writetags
{
	// public
	public $filename;                            // absolute filename of file to write tags to
	public $tagformats         = array();        // array of tag formats to write ('id3v1', 'id3v2.2', 'id2v2.3', 'id3v2.4', 'ape', 'vorbiscomment', 'metaflac', 'real')
	public $tag_data           = array(array()); // 2-dimensional array of tag data (ex: $data['ARTIST'][0] = 'Elvis')
	public $tag_encoding       = 'ISO-8859-1';   // text encoding used for tag data ('ISO-8859-1', 'UTF-8', 'UTF-16', 'UTF-16LE', 'UTF-16BE', )
	public $overwrite_tags     = true;          // if true will erase existing tag data and write only passed data; if false will merge passed data with existing tag data
	public $remove_other_tags  = false;          // if true will erase remove all existing tags and only write those passed in $tagformats; if false will ignore any tags not mentioned in $tagformats

	public $id3v2_tag_language = 'eng';          // ISO-639-2 3-character language code needed for some ID3v2 frames (http://www.id3.org/iso639-2.html)
	public $id3v2_paddedlength = 4096;           // minimum length of ID3v2 tags (will be padded to this length if tag data is shorter)

	public $warnings           = array();        // any non-critical errors will be stored here
	public $errors             = array();        // any critical errors will be stored here

	// private
	private $ThisFileInfo; // analysis of file before writing

	public function __construct() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public function WriteTags() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public function DeleteTags($TagFormatsToDelete) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public function MergeExistingTagData($TagFormat, &$tag_data) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function FormatDataForAPE() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public function FormatDataForID3v1() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function FormatDataForID3v2($id3v2_majorversion) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function FormatDataForVorbisComment() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function FormatDataForMetaFLAC() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function FormatDataForReal() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
