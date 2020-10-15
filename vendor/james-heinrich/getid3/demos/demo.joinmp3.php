<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
//                                                             //
// /demo/demo.joinmp3.php - part of getID3()                   //
// Sample script for splicing two or more MP3s together into   //
// one file. Does not attempt to fix VBR header frames.        //
// Can also be used to extract portion from single file.       //
// See readme.txt for more details                             //
//                                                            ///
/////////////////////////////////////////////////////////////////


// sample usage:
//   $FilenameOut   = 'combined.mp3';
//   $FilenamesIn[] = 'first.mp3';                    // filename with no start/length parameters
//   $FilenamesIn[] = array('second.mp3',   0,   0);  // filename with zero for start/length is the same as not specified (start = beginning, length = full duration)
//   $FilenamesIn[] = array('third.mp3',    0,  10);  // extract first 10 seconds of audio
//   $FilenamesIn[] = array('fourth.mp3', -10,   0);  // extract last 10 seconds of audio
//   $FilenamesIn[] = array('fifth.mp3',   10,   0);  // extract everything except first 10 seconds of audio
//   $FilenamesIn[] = array('sixth.mp3',    0, -10);  // extract everything except last 10 seconds of audio
//   if (CombineMultipleMP3sTo($FilenameOut, $FilenamesIn)) {
//       echo 'Successfully copied '.implode(' + ', $FilenamesIn).' to '.$FilenameOut;
//   } else {
//       echo 'Failed to copy '.implode(' + ', $FilenamesIn).' to '.$FilenameOut;
//   }
//
// Could also be called like this to extract portion from single file:
//   CombineMultipleMP3sTo('sample.mp3', array(array('input.mp3', 0, 30))); // extract first 30 seconds of audio


function CombineMultipleMP3sTo($FilenameOut, $FilenamesIn) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
