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
// module.misc.cue.php                                         //
// module for analyzing CUEsheet files                         //
// dependencies: NONE                                          //
//                                                             //
/////////////////////////////////////////////////////////////////
//                                                             //
// Module originally written [2009-Mar-25] by                  //
//      Nigel Barnes <ngbarnesØhotmail*com>                    //
// Minor reformatting and similar small changes to integrate   //
//   into getID3 by James Heinrich <info@getid3.org>           //
//                                                            ///
/////////////////////////////////////////////////////////////////

/*
 * CueSheet parser by Nigel Barnes.
 *
 * This is a PHP conversion of CueSharp 0.5 by Wyatt O'Day (wyday.com/cuesharp)
 */

/**
 * A CueSheet class used to open and parse cuesheets.
 *
 */
class getid3_cue extends getid3_handler
{
	public $cuesheet = array();

	public function Analyze() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}



	public function readCueSheetFilename($filename)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
	/**
	* Parses a cue sheet file.
	*
	* @param string $filename - The filename for the cue sheet to open.
	*/
	public function readCueSheet(&$filedata)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* Parses the cue sheet array.
	*
	* @param array $file - The cuesheet as an array of each line.
	*/
	public function parseCueSheet($file)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* Parses the REM command.
	*
	* @param string $line - The line in the cue file that contains the TRACK command.
	* @param integer $track_on - The track currently processing.
	*/
	public function parseComment($line, $track_on)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* Parses the FILE command.
	*
	* @param string $line - The line in the cue file that contains the FILE command.
	* @return array - Array of FILENAME and TYPE of file..
	*/
	public function parseFile($line)
	{
		$line =            substr($line, strpos($line, ' ') + 1);
		$type = strtolower(substr($line, strrpos($line, ' ')));

		//remove type
		$line = substr($line, 0, strrpos($line, ' ') - 1);

		//if quotes around it, remove them.
		$line = trim($line, '"');

		return array('filename'=>$line, 'type'=>$type);
	}

	/**
	* Parses the FLAG command.
	*
	* @param string $line - The line in the cue file that contains the TRACK command.
	* @param integer $track_on - The track currently processing.
	*/
	public function parseFlags($line, $track_on)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* Collect any unidentified data.
	*
	* @param string $line - The line in the cue file that contains the TRACK command.
	* @param integer $track_on - The track currently processing.
	*/
	public function parseGarbage($line, $track_on)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* Parses the INDEX command of a TRACK.
	*
	* @param string $line - The line in the cue file that contains the TRACK command.
	* @param integer $track_on - The track currently processing.
	*/
	public function parseIndex($line, $track_on)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function parseString($line, $track_on)
	{
		$category = strtolower(substr($line, 0, strpos($line, ' ')));
		$line     =            substr($line, strpos($line, ' ') + 1);

		//get rid of the quotes
		$line = trim($line, '"');

		switch ($category)
		{
			case 'catalog':
			case 'cdtextfile':
			case 'isrc':
			case 'performer':
			case 'songwriter':
			case 'title':
				if ($track_on == -1)
				{
					$this->cuesheet[$category] = $line;
				}
				else
				{
					$this->cuesheet['tracks'][$track_on][$category] = $line;
				}
				break;
			default:
				break;
		}
	}

	/**
	* Parses the TRACK command.
	*
	* @param string $line - The line in the cue file that contains the TRACK command.
	* @param integer $track_on - The track currently processing.
	*/
	public function parseTrack($line, $track_on)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}

