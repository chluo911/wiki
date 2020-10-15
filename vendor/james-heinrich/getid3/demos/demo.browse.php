<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
//                                                             //
// /demo/demo.browse.php - part of getID3()                     //
// Sample script for browsing/scanning files and displaying    //
// information returned by getID3()                            //
// See readme.txt for more details                             //
//                                                            ///
/////////////////////////////////////////////////////////////////

die('For security reasons, this demo has been disabled. It can be enabled by removing line '.__LINE__.' in demos/'.basename(__FILE__));
define('GETID3_DEMO_BROWSE_ALLOW_EDIT_LINK',   false);
define('GETID3_DEMO_BROWSE_ALLOW_DELETE_LINK', false);
define('GETID3_DEMO_BROWSE_ALLOW_MD5_LINK',    false);

/////////////////////////////////////////////////////////////////
// die if magic_quotes_runtime or magic_quotes_gpc are set
if (function_exists('get_magic_quotes_runtime') && get_magic_quotes_runtime()) {
	die('magic_quotes_runtime is enabled, getID3 will not run.');
}
if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
	die('magic_quotes_gpc is enabled, getID3 will not run.');
}
if (!defined('ENT_SUBSTITUTE')) { // defined in PHP v5.4.0
	define('ENT_SUBSTITUTE', ENT_QUOTES);
}
/////////////////////////////////////////////////////////////////

$PageEncoding = 'UTF-8';

$writescriptfilename = 'demo.write.php';

require_once('../getid3/getid3.php');

// Needed for windows only. Leave commented-out to auto-detect, only define here if auto-detection does not work properly
//define('GETID3_HELPERAPPSDIR', 'C:\\helperapps\\');

// Initialize getID3 engine
$getID3 = new getID3;
$getID3->setOption(array('encoding' => $PageEncoding));

$getID3checkColor_Head           = 'CCCCDD';
$getID3checkColor_DirectoryLight = 'FFCCCC';
$getID3checkColor_DirectoryDark  = 'EEBBBB';
$getID3checkColor_FileLight      = 'EEEEEE';
$getID3checkColor_FileDark       = 'DDDDDD';
$getID3checkColor_UnknownLight   = 'CCCCFF';
$getID3checkColor_UnknownDark    = 'BBBBDD';


///////////////////////////////////////////////////////////////////////////////


header('Content-Type: text/html; charset='.$PageEncoding);
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
echo '<html><head>';
echo '<title>getID3() - /demo/demo.browse.php (sample script)</title>';
echo '<link rel="stylesheet" href="getid3.css" type="text/css">';
echo '<meta http-equiv="Content-Type" content="text/html;charset='.$PageEncoding.'" />';
echo '</head><body>';

if (isset($_REQUEST['deletefile'])) {
	if (file_exists($_REQUEST['deletefile'])) {
		if (unlink($_REQUEST['deletefile'])) {
			$deletefilemessage = 'Successfully deleted '.addslashes($_REQUEST['deletefile']);
		} else {
			$deletefilemessage = 'FAILED to delete '.addslashes($_REQUEST['deletefile']).' - error deleting file';
		}
	} else {
		$deletefilemessage = 'FAILED to delete '.addslashes($_REQUEST['deletefile']).' - file does not exist';
	}
	if (isset($_REQUEST['noalert'])) {
		echo '<b><font color="'.(($deletefilemessage{0} == 'F') ? '#FF0000' : '#008000').'">'.$deletefilemessage.'</font></b><hr>';
	} else {
		echo '<script type="text/javascript">alert("'.$deletefilemessage.'");</script>';
	}
}


if (isset($_REQUEST['filename'])) {

	if (!file_exists($_REQUEST['filename']) || !is_file($_REQUEST['filename'])) {
		die(getid3_lib::iconv_fallback('ISO-8859-1', $PageEncoding, $_REQUEST['filename'].' does not exist'));
	}
	$starttime = microtime(true);

	//$getID3->setOption(array(
	//	'option_md5_data'  => $AutoGetHashes,
	//	'option_sha1_data' => $AutoGetHashes,
	//));
	$ThisFileInfo = $getID3->analyze($_REQUEST['filename']);
	$AutoGetHashes = (bool) (isset($ThisFileInfo['filesize']) && ($ThisFileInfo['filesize'] > 0) && ($ThisFileInfo['filesize'] < (50 * 1048576))); // auto-get md5_data, md5_file, sha1_data, sha1_file if filesize < 50MB, and NOT zero (which may indicate a file>2GB)
	$AutoGetHashes = ($AutoGetHashes && GETID3_DEMO_BROWSE_ALLOW_MD5_LINK);
	if ($AutoGetHashes) {
		$ThisFileInfo['md5_file']  = md5_file($_REQUEST['filename']);
		$ThisFileInfo['sha1_file'] = sha1_file($_REQUEST['filename']);
	}


	getid3_lib::CopyTagsToComments($ThisFileInfo);

	$listdirectory = dirname($_REQUEST['filename']);
	$listdirectory = realpath($listdirectory); // get rid of /../../ references

	if (GETID3_OS_ISWINDOWS) {
		// this mostly just gives a consistant look to Windows and *nix filesystems
		// (windows uses \ as directory seperator, *nix uses /)
		$listdirectory = str_replace(DIRECTORY_SEPARATOR, '/', $listdirectory.'/');
	}

	if (strstr($_REQUEST['filename'], 'http://') || strstr($_REQUEST['filename'], 'ftp://')) {
		echo '<i>Cannot browse remote filesystems</i><br>';
	} else {
		echo 'Browse: <a href="'.htmlentities($_SERVER['PHP_SELF'].'?listdirectory='.urlencode($listdirectory), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">'.getid3_lib::iconv_fallback('ISO-8859-1', $PageEncoding, $listdirectory).'</a><br>';
	}

	getid3_lib::ksort_recursive($ThisFileInfo);
	echo table_var_dump($ThisFileInfo, false, $PageEncoding);
	$endtime = microtime(true);
	echo 'File parsed in '.number_format($endtime - $starttime, 3).' seconds.<br>';

} else {

	$listdirectory = (isset($_REQUEST['listdirectory']) ? $_REQUEST['listdirectory'] : '.');
	$listdirectory = realpath($listdirectory); // get rid of /../../ references
	$currentfulldir = $listdirectory.'/';

	if (GETID3_OS_ISWINDOWS) {
		// this mostly just gives a consistant look to Windows and *nix filesystems
		// (windows uses \ as directory seperator, *nix uses /)
		$currentfulldir = str_replace(DIRECTORY_SEPARATOR, '/', $listdirectory.'/');
	}

	ob_start();
	if ($handle = opendir($listdirectory)) {

		ob_end_clean();
		echo str_repeat(' ', 300); // IE buffers the first 300 or so chars, making this progressive display useless - fill the buffer with spaces
		echo 'Processing';

		$starttime = microtime(true);

		$TotalScannedUnknownFiles  = 0;
		$TotalScannedKnownFiles    = 0;
		$TotalScannedPlaytimeFiles = 0;
		$TotalScannedBitrateFiles  = 0;
		$TotalScannedFilesize      = 0;
		$TotalScannedPlaytime      = 0;
		$TotalScannedBitrate       = 0;
		$FilesWithWarnings         = 0;
		$FilesWithErrors           = 0;

		while ($file = readdir($handle)) {
			$currentfilename = $listdirectory.'/'.$file;
			set_time_limit(30); // allocate another 30 seconds to process this file - should go much quicker than this unless intense processing (like bitrate histogram analysis) is enabled
			echo ' .'; // progress indicator dot
			flush();  // make sure the dot is shown, otherwise it's useless

			switch ($file) {
				case '..':
					$ParentDir = realpath($file.'/..').'/';
					if (GETID3_OS_ISWINDOWS) {
						$ParentDir = str_replace(DIRECTORY_SEPARATOR, '/', $ParentDir);
					}
					$DirectoryContents[$currentfulldir]['dir'][$file]['filename'] = $ParentDir;
					continue 2;
					break;

				case '.':
					// ignore
					continue 2;
					break;
			}
			// symbolic-link-resolution enhancements by davidbullock״ech-center*com
			$TargetObject     = realpath($currentfilename);  // Find actual file path, resolve if it's a symbolic link
			$TargetObjectType = filetype($TargetObject);     // Check file type without examining extension

			if ($TargetObjectType == 'dir') {

				$DirectoryContents[$currentfulldir]['dir'][$file]['filename'] = $file;

			} elseif ($TargetObjectType == 'file') {

				$getID3->setOption(array('option_md5_data' => (isset($_REQUEST['ShowMD5']) && GETID3_DEMO_BROWSE_ALLOW_MD5_LINK)));
				$fileinformation = $getID3->analyze($currentfilename);

				getid3_lib::CopyTagsToComments($fileinformation);

				$TotalScannedFilesize += (isset($fileinformation['filesize']) ? $fileinformation['filesize'] : 0);

				if (isset($_REQUEST['ShowMD5']) && GETID3_DEMO_BROWSE_ALLOW_MD5_LINK) {
					$fileinformation['md5_file'] = md5_file($currentfilename);
				}

				if (!empty($fileinformation['fileformat'])) {
					$DirectoryContents[$currentfulldir]['known'][$file] = $fileinformation;
					$TotalScannedPlaytime += (isset($fileinformation['playtime_seconds']) ? $fileinformation['playtime_seconds'] : 0);
					$TotalScannedBitrate  += (isset($fileinformation['bitrate'])          ? $fileinformation['bitrate']          : 0);
					$TotalScannedKnownFiles++;
				} else {
					$DirectoryContents[$currentfulldir]['other'][$file] = $fileinformation;
					$DirectoryContents[$currentfulldir]['other'][$file]['playtime_string'] = '-';
					$TotalScannedUnknownFiles++;
				}
				if (isset($fileinformation['playtime_seconds']) && ($fileinformation['playtime_seconds'] > 0)) {
					$TotalScannedPlaytimeFiles++;
				}
				if (isset($fileinformation['bitrate']) && ($fileinformation['bitrate'] > 0)) {
					$TotalScannedBitrateFiles++;
				}
			}
		}
		$endtime = microtime(true);
		closedir($handle);
		echo 'done<br>';
		echo 'Directory scanned in '.number_format($endtime - $starttime, 2).' seconds.<br>';
		flush();

		$columnsintable = 14;
		echo '<table class="table" cellspacing="0" cellpadding="3">';

		echo '<tr bgcolor="#'.$getID3checkColor_Head.'"><th colspan="'.$columnsintable.'">Files in '.getid3_lib::iconv_fallback('ISO-8859-1', $PageEncoding, $currentfulldir).'</th></tr>';
		$rowcounter = 0;
		foreach ($DirectoryContents as $dirname => $val) {
			if (isset($DirectoryContents[$dirname]['dir']) && is_array($DirectoryContents[$dirname]['dir'])) {
				uksort($DirectoryContents[$dirname]['dir'], 'MoreNaturalSort');
				foreach ($DirectoryContents[$dirname]['dir'] as $filename => $fileinfo) {
					echo '<tr bgcolor="#'.(($rowcounter++ % 2) ? $getID3checkColor_DirectoryLight : $getID3checkColor_DirectoryDark).'">';
					if ($filename == '..') {
						echo '<td colspan="'.$columnsintable.'">';
						echo '<form action="'.htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'" method="get">';
						echo 'Parent directory: ';
						echo '<input type="text" name="listdirectory" size="50" style="background-color: '.$getID3checkColor_DirectoryDark.';" value="';
						if (GETID3_OS_ISWINDOWS) {
							echo htmlentities(str_replace(DIRECTORY_SEPARATOR, '/', realpath($dirname.$filename)), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding);
						} else {
							echo htmlentities(realpath($dirname.$filename), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding);
						}
						echo '"> <input type="submit" value="Go">';
						echo '</form></td>';
					} else {
						$escaped_filename = htmlentities($filename, ENT_SUBSTITUTE, $PageEncoding); // do filesystems always return filenames in ISO-8859-1?
						$escaped_filename = ($escaped_filename ? $escaped_filename : rawurlencode($filename));
						echo '<td colspan="'.$columnsintable.'"><a href="'.htmlentities($_SERVER['PHP_SELF'].'?listdirectory='.urlencode($dirname.$filename), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'"><b>'.$escaped_filename.'</b></a></td>';
					}
					echo '</tr>';
				}
			}

			echo '<tr bgcolor="#'.$getID3checkColor_Head.'">';
			echo '<th>Filename</th>';
			echo '<th>File Size</th>';
			echo '<th>Format</th>';
			echo '<th>Playtime</th>';
			echo '<th>Bitrate</th>';
			echo '<th>Artist</th>';
			echo '<th>Title</th>';
			if (isset($_REQUEST['ShowMD5']) && GETID3_DEMO_BROWSE_ALLOW_MD5_LINK) {
				echo '<th>MD5&nbsp;File (File) (<a href="'.htmlentities($_SERVER['PHP_SELF'].'?listdirectory='.rawurlencode(isset($_REQUEST['listdirectory']) ? $_REQUEST['listdirectory'] : '.'), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">disable</a>)</th>';
				echo '<th>MD5&nbsp;Data (File) (<a href="'.htmlentities($_SERVER['PHP_SELF'].'?listdirectory='.rawurlencode(isset($_REQUEST['listdirectory']) ? $_REQUEST['listdirectory'] : '.'), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">disable</a>)</th>';
				echo '<th>MD5&nbsp;Data (Source) (<a href="'.htmlentities($_SERVER['PHP_SELF'].'?listdirectory='.rawurlencode(isset($_REQUEST['listdirectory']) ? $_REQUEST['listdirectory'] : '.'), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">disable</a>)</th>';
			} else {
				echo '<th colspan="3">MD5&nbsp;Data'.(GETID3_DEMO_BROWSE_ALLOW_MD5_LINK ?' (<a href="'.htmlentities($_SERVER['PHP_SELF'].'?listdirectory='.rawurlencode(isset($_REQUEST['listdirectory']) ? $_REQUEST['listdirectory'] : '.').'&ShowMD5=1', ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">enable</a>)' : '').'</th>';
			}
			echo '<th>Tags</th>';
			echo '<th>Errors &amp; Warnings</th>';
			echo (GETID3_DEMO_BROWSE_ALLOW_EDIT_LINK   ? '<th>Edit</th>'   : '');
			echo (GETID3_DEMO_BROWSE_ALLOW_DELETE_LINK ? '<th>Delete</th>' : '');
			echo '</tr>';

			if (isset($DirectoryContents[$dirname]['known']) && is_array($DirectoryContents[$dirname]['known'])) {
				uksort($DirectoryContents[$dirname]['known'], 'MoreNaturalSort');
				foreach ($DirectoryContents[$dirname]['known'] as $filename => $fileinfo) {
					echo '<tr bgcolor="#'.(($rowcounter++ % 2) ? $getID3checkColor_FileDark : $getID3checkColor_FileLight).'">';
					$escaped_filename = htmlentities($filename, ENT_SUBSTITUTE, $PageEncoding);
					$escaped_filename = ($escaped_filename ? $escaped_filename : rawurlencode($filename));
					echo '<td><a href="'.htmlentities($_SERVER['PHP_SELF'].'?filename='.urlencode($dirname.$filename), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'" title="View detailed analysis">'.$escaped_filename.'</a></td>';
					echo '<td align="right">&nbsp;'.number_format($fileinfo['filesize']).'</td>';
					echo '<td align="right">&nbsp;'.NiceDisplayFiletypeFormat($fileinfo).'</td>';
					echo '<td align="right">&nbsp;'.(isset($fileinfo['playtime_string']) ? $fileinfo['playtime_string'] : '-').'</td>';
					echo '<td align="right">&nbsp;'.(isset($fileinfo['bitrate']) ? BitrateText($fileinfo['bitrate'] / 1000, 0, ((isset($fileinfo['audio']['bitrate_mode']) && ($fileinfo['audio']['bitrate_mode'] == 'vbr')) ? true : false)) : '-').'</td>';
					echo '<td align="left">&nbsp;'.(isset($fileinfo['comments_html']['artist']) ? implode('<br>', $fileinfo['comments_html']['artist']) : ((isset($fileinfo['video']['resolution_x']) && isset($fileinfo['video']['resolution_y'])) ? $fileinfo['video']['resolution_x'].'x'.$fileinfo['video']['resolution_y'] : '')).'</td>';
					echo '<td align="left">&nbsp;'.(isset($fileinfo['comments_html']['title'])  ? implode('<br>', $fileinfo['comments_html']['title'])  :  (isset($fileinfo['video']['frame_rate'])                                                 ? number_format($fileinfo['video']['frame_rate'], 3).'fps'                  : '')).'</td>';
					if (isset($_REQUEST['ShowMD5']) && GETID3_DEMO_BROWSE_ALLOW_MD5_LINK) {
						echo '<td align="left"><tt>'.(isset($fileinfo['md5_file'])        ? $fileinfo['md5_file']        : '&nbsp;').'</tt></td>';
						echo '<td align="left"><tt>'.(isset($fileinfo['md5_data'])        ? $fileinfo['md5_data']        : '&nbsp;').'</tt></td>';
						echo '<td align="left"><tt>'.(isset($fileinfo['md5_data_source']) ? $fileinfo['md5_data_source'] : '&nbsp;').'</tt></td>';
					} else {
						echo '<td align="center" colspan="3">-</td>';
					}
					echo '<td align="left">&nbsp;'.(!empty($fileinfo['tags']) ? implode(', ', array_keys($fileinfo['tags'])) : '').'</td>';

					echo '<td align="left">&nbsp;';
					if (!empty($fileinfo['warning'])) {
						$FilesWithWarnings++;
						echo '<a href="#" onClick="alert(\''.htmlentities(str_replace("'", "\\'", preg_replace('#[\r\n\t]+#', ' ', implode('\\n', $fileinfo['warning']))), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'\'); return false;" title="'.htmlentities(implode("; \n", $fileinfo['warning']), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">warning</a><br>';
					}
					if (!empty($fileinfo['error'])) {
						$FilesWithErrors++;
						echo '<a href="#" onClick="alert(\''.htmlentities(str_replace("'", "\\'", preg_replace('#[\r\n\t]+#', ' ', implode('\\n', $fileinfo['error']))),   ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'\'); return false;" title="'.htmlentities(implode("; \n", $fileinfo['error']),   ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">error</a><br>';
					}
					echo '</td>';

					if (GETID3_DEMO_BROWSE_ALLOW_EDIT_LINK) {
						echo '<td align="left">&nbsp;';
						$fileinfo['fileformat'] = (isset($fileinfo['fileformat']) ? $fileinfo['fileformat'] : '');
						switch ($fileinfo['fileformat']) {
							case 'mp3':
							case 'mp2':
							case 'mp1':
							case 'flac':
							case 'mpc':
							case 'real':
								echo '<a href="'.htmlentities($writescriptfilename.'?Filename='.urlencode($dirname.$filename), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'" title="Edit tags">edit&nbsp;tags</a>';
								break;
							case 'ogg':
								if (isset($fileinfo['audio']['dataformat']) && ($fileinfo['audio']['dataformat'] == 'vorbis')) {
									echo '<a href="'.htmlentities($writescriptfilename.'?Filename='.urlencode($dirname.$filename), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'" title="Edit tags">edit&nbsp;tags</a>';
								}
								break;
							default:
								break;
						}
						echo '</td>';
					}
					if (GETID3_DEMO_BROWSE_ALLOW_DELETE_LINK) {
						echo '<td align="left">&nbsp;<a href="'.htmlentities($_SERVER['PHP_SELF'].'?listdirectory='.urlencode($listdirectory).'&deletefile='.urlencode($dirname.$filename), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'" onClick="return confirm(\'Are you sure you want to delete '.addslashes(htmlentities($dirname.$filename)).'? \n(this action cannot be un-done)\');" title="'.htmlentities('Permanently delete '."\n".$filename."\n".' from'."\n".' '.$dirname, ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">delete</a></td>';
					}
					echo '</tr>';
				}
			}

			if (isset($DirectoryContents[$dirname]['other']) && is_array($DirectoryContents[$dirname]['other'])) {
				uksort($DirectoryContents[$dirname]['other'], 'MoreNaturalSort');
				foreach ($DirectoryContents[$dirname]['other'] as $filename => $fileinfo) {
					echo '<tr bgcolor="#'.(($rowcounter++ % 2) ? $getID3checkColor_UnknownDark : $getID3checkColor_UnknownLight).'">';
					$escaped_filename = htmlentities($filename, ENT_SUBSTITUTE, $PageEncoding);
					$escaped_filename = ($escaped_filename ? $escaped_filename : rawurlencode($filename));
					echo '<td><a href="'.htmlentities($_SERVER['PHP_SELF'].'?filename='.urlencode($dirname.$filename), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'"><i>'.$escaped_filename.'</i></a></td>';
					echo '<td align="right">&nbsp;'.(isset($fileinfo['filesize']) ? number_format($fileinfo['filesize']) : '-').'</td>';
					echo '<td align="right">&nbsp;'.NiceDisplayFiletypeFormat($fileinfo).'</td>';
					echo '<td align="right">&nbsp;'.(isset($fileinfo['playtime_string']) ? $fileinfo['playtime_string'] : '-').'</td>';
					echo '<td align="right">&nbsp;'.(isset($fileinfo['bitrate']) ? BitrateText($fileinfo['bitrate'] / 1000) : '-').'</td>';
					echo '<td align="left">&nbsp;</td>'; // Artist
					echo '<td align="left">&nbsp;</td>'; // Title
					echo '<td align="left" colspan="3">&nbsp;</td>'; // MD5_data
					echo '<td align="left">&nbsp;</td>'; // Tags

					//echo '<td align="left">&nbsp;</td>'; // Warning/Error
					echo '<td align="left">&nbsp;';
					if (!empty($fileinfo['warning'])) {
						$FilesWithWarnings++;
						echo '<a href="#" onClick="alert(\''.htmlentities(implode('\\n', $fileinfo['warning']), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'\'); return false;" title="'.htmlentities(implode("\n", $fileinfo['warning']), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">warning</a><br>';
					}
					if (!empty($fileinfo['error'])) {
						if ($fileinfo['error'][0] != 'unable to determine file format') {
							$FilesWithErrors++;
							echo '<a href="#" onClick="alert(\''.htmlentities(implode('\\n', $fileinfo['error']), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'\'); return false;" title="'.htmlentities(implode("\n", $fileinfo['error']), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'">error</a><br>';
						}
					}
					echo '</td>';

					if (GETID3_DEMO_BROWSE_ALLOW_EDIT_LINK) {
						echo '<td align="left">&nbsp;</td>'; // Edit
					}
					if (GETID3_DEMO_BROWSE_ALLOW_DELETE_LINK) {
						echo '<td align="left">&nbsp;<a href="'.htmlentities($_SERVER['PHP_SELF'].'?listdirectory='.urlencode($listdirectory).'&deletefile='.urlencode($dirname.$filename), ENT_QUOTES | ENT_SUBSTITUTE, $PageEncoding).'" onClick="return confirm(\'Are you sure you want to delete '.addslashes($dirname.$filename).'? \n(this action cannot be un-done)\');" title="Permanently delete '.addslashes($dirname.$filename).'">delete</a></td>';
					}
					echo '</tr>';
				}
			}

			echo '<tr bgcolor="#'.$getID3checkColor_Head.'">';
			echo '<td><b>Average:</b></td>';
			echo '<td align="right">'.number_format($TotalScannedFilesize / max($TotalScannedKnownFiles, 1)).'</td>';
			echo '<td>&nbsp;</td>';
			echo '<td align="right">'.getid3_lib::PlaytimeString($TotalScannedPlaytime / max($TotalScannedPlaytimeFiles, 1)).'</td>';
			echo '<td align="right">'.BitrateText(round(($TotalScannedBitrate / 1000) / max($TotalScannedBitrateFiles, 1))).'</td>';
			echo '<td rowspan="2" colspan="'.($columnsintable - 5).'"><table class="table" border="0" cellspacing="0" cellpadding="2"><tr><th align="right">Identified Files:</th><td align="right">'.number_format($TotalScannedKnownFiles).'</td><td>&nbsp;&nbsp;&nbsp;</td><th align="right">Errors:</th><td align="right">'.number_format($FilesWithErrors).'</td></tr><tr><th align="right">Unknown Files:</th><td align="right">'.number_format($TotalScannedUnknownFiles).'</td><td>&nbsp;&nbsp;&nbsp;</td><th align="right">Warnings:</th><td align="right">'.number_format($FilesWithWarnings).'</td></tr></table>';
			echo '</tr>';
			echo '<tr bgcolor="#'.$getID3checkColor_Head.'">';
			echo '<td><b>Total:</b></td>';
			echo '<td align="right">'.number_format($TotalScannedFilesize).'</td>';
			echo '<td>&nbsp;</td>';
			echo '<td align="right">'.getid3_lib::PlaytimeString($TotalScannedPlaytime).'</td>';
			echo '<td>&nbsp;</td>';
			echo '</tr>';
		}
		echo '</table>';
	} else {
		$errormessage = ob_get_contents();
		ob_end_clean();
		echo '<b>ERROR: Could not open directory: <u>'.$currentfulldir.'</u></b><br>';
	}
}
echo PoweredBygetID3().'<br clear="all">';
echo '</body></html>';


/////////////////////////////////////////////////////////////////


function RemoveAccents($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}


function BitrateColor($bitrate, $BitrateMaxScale=768) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

function BitrateText($bitrate, $decimals=0, $vbr=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

function string_var_dump($variable) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

function table_var_dump($variable, $wrap_in_td=false, $encoding='ISO-8859-1') {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}


function NiceDisplayFiletypeFormat(&$fileinfo) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

function MoreNaturalSort($ar1, $ar2) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

function PoweredBygetID3($string='') {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
