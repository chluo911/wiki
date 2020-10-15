<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
//                                                             //
// /demo/demo.mimeonly.php - part of getID3()                  //
// Sample script for scanning a single file and returning only //
// the MIME information                                        //
// See readme.txt for more details                             //
//                                                            ///
/////////////////////////////////////////////////////////////////

die('Due to a security issue, this demo has been disabled. It can be enabled by removing line '.__LINE__.' in '.$_SERVER['PHP_SELF']);


echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
echo '<html><head><title>getID3 demos - MIME type only</title><style type="text/css">BODY, TD, TH { font-family: sans-serif; font-size: 10pt; }</style></head><body>';

if (!empty($_REQUEST['filename'])) {

	echo 'The file "'.htmlentities($_REQUEST['filename']).'" has a MIME type of "'.htmlentities(GetMIMEtype($_REQUEST['filename'])).'"';

} else {

	echo 'Usage: <span style="font-family: monospace;">'.htmlentities($_SERVER['PHP_SELF']).'?filename=<i>filename.ext</i></span>';

}


function GetMIMEtype($filename) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

echo '</body></html>';
