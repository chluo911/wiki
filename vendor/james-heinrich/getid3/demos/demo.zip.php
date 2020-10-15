<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
//                                                             //
// /demo/demo.zip.php - part of getID3()                       //
// Sample script how to use getID3() to decompress zip files   //
// See readme.txt for more details                             //
//                                                            ///
/////////////////////////////////////////////////////////////////


function UnzipFileContents($filename, &$errors) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
