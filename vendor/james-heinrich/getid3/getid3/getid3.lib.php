<?php
/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
//                                                             //
// getid3.lib.php - part of getID3()                           //
// See readme.txt for more details                             //
//                                                            ///
/////////////////////////////////////////////////////////////////


class getid3_lib
{

	public static function PrintHexBytes($string, $hex=true, $spaces=true, $htmlencoding='UTF-8') {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function trunc($floatnumber) {
		// truncates a floating-point number at the decimal point
		// returns int (if possible, otherwise float)
		if ($floatnumber >= 1) {
			$truncatednumber = floor($floatnumber);
		} elseif ($floatnumber <= -1) {
			$truncatednumber = ceil($floatnumber);
		} else {
			$truncatednumber = 0;
		}
		if (self::intValueSupported($truncatednumber)) {
			$truncatednumber = (int) $truncatednumber;
		}
		return $truncatednumber;
	}


	public static function safe_inc(&$variable, $increment=1) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function CastAsInt($floatnum) {
		// convert to float if not already
		$floatnum = (float) $floatnum;

		// convert a float to type int, only if possible
		if (self::trunc($floatnum) == $floatnum) {
			// it's not floating point
			if (self::intValueSupported($floatnum)) {
				// it's within int range
				$floatnum = (int) $floatnum;
			}
		}
		return $floatnum;
	}

	public static function intValueSupported($num) {
		// check if integers are 64-bit
		static $hasINT64 = null;
		if ($hasINT64 === null) { // 10x faster than is_null()
			$hasINT64 = is_int(pow(2, 31)); // 32-bit int are limited to (2^31)-1
			if (!$hasINT64 && !defined('PHP_INT_MIN')) {
				define('PHP_INT_MIN', ~PHP_INT_MAX);
			}
		}
		// if integers are 64-bit - no other check required
		if ($hasINT64 || (($num <= PHP_INT_MAX) && ($num >= PHP_INT_MIN))) {
			return true;
		}
		return false;
	}

	public static function DecimalizeFraction($fraction) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function DecimalBinary2Float($binarynumerator) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function NormalizeBinaryPoint($binarypointnumber, $maxbits=52) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function Float2BinaryDecimal($floatvalue) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function Float2String($floatvalue, $bits) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function LittleEndian2Float($byteword) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function BigEndian2Float($byteword) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function BigEndian2Int($byteword, $synchsafe=false, $signed=false) {
		$intvalue = 0;
		$bytewordlen = strlen($byteword);
		if ($bytewordlen == 0) {
			return false;
		}
		for ($i = 0; $i < $bytewordlen; $i++) {
			if ($synchsafe) { // disregard MSB, effectively 7-bit bytes
				//$intvalue = $intvalue | (ord($byteword{$i}) & 0x7F) << (($bytewordlen - 1 - $i) * 7); // faster, but runs into problems past 2^31 on 32-bit systems
				$intvalue += (ord($byteword{$i}) & 0x7F) * pow(2, ($bytewordlen - 1 - $i) * 7);
			} else {
				$intvalue += ord($byteword{$i}) * pow(256, ($bytewordlen - 1 - $i));
			}
		}
		if ($signed && !$synchsafe) {
			// synchsafe ints are not allowed to be signed
			if ($bytewordlen <= PHP_INT_SIZE) {
				$signMaskBit = 0x80 << (8 * ($bytewordlen - 1));
				if ($intvalue & $signMaskBit) {
					$intvalue = 0 - ($intvalue & ($signMaskBit - 1));
				}
			} else {
				throw new Exception('ERROR: Cannot have signed integers larger than '.(8 * PHP_INT_SIZE).'-bits ('.strlen($byteword).') in self::BigEndian2Int()');
			}
		}
		return self::CastAsInt($intvalue);
	}


	public static function LittleEndian2Int($byteword, $signed=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function BigEndian2Bin($byteword) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function BigEndian2String($number, $minbytes=1, $synchsafe=false, $signed=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function Dec2Bin($number) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function Bin2Dec($binstring, $signed=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function Bin2String($binstring) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function LittleEndian2String($number, $minbytes=1, $synchsafe=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function array_merge_clobber($array1, $array2) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function array_merge_noclobber($array1, $array2) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function flipped_array_merge_noclobber($array1, $array2) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function ksort_recursive(&$theArray) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function fileextension($filename, $numextensions=1) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function PlaytimeString($seconds) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function DateMac2Unix($macdate) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function FixedPoint8_8($rawdata) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function FixedPoint16_16($rawdata) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function FixedPoint2_30($rawdata) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function CreateDeepArray($ArrayPath, $Separator, $Value) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function array_max($arraydata, $returnkey=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function array_min($arraydata, $returnkey=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function XML2array($XMLstring) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function SimpleXMLelement2array($XMLobject) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	// Allan Hansen <ahØartemis*dk>
	// self::md5_data() - returns md5sum for a file from startuing position to absolute end position
	public static function hash_data($file, $offset, $end, $algorithm) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function CopyFileParts($filename_source, $filename_dest, $offset, $length) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function iconv_fallback_int_utf8($charval) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// ISO-8859-1 => UTF-8
	public static function iconv_fallback_iso88591_utf8($string, $bom=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// ISO-8859-1 => UTF-16BE
	public static function iconv_fallback_iso88591_utf16be($string, $bom=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// ISO-8859-1 => UTF-16LE
	public static function iconv_fallback_iso88591_utf16le($string, $bom=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// ISO-8859-1 => UTF-16LE (BOM)
	public static function iconv_fallback_iso88591_utf16($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-8 => ISO-8859-1
	public static function iconv_fallback_utf8_iso88591($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-8 => UTF-16BE
	public static function iconv_fallback_utf8_utf16be($string, $bom=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-8 => UTF-16LE
	public static function iconv_fallback_utf8_utf16le($string, $bom=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-8 => UTF-16LE (BOM)
	public static function iconv_fallback_utf8_utf16($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-16BE => UTF-8
	public static function iconv_fallback_utf16be_utf8($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-16LE => UTF-8
	public static function iconv_fallback_utf16le_utf8($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-16BE => ISO-8859-1
	public static function iconv_fallback_utf16be_iso88591($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-16LE => ISO-8859-1
	public static function iconv_fallback_utf16le_iso88591($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-16 (BOM) => ISO-8859-1
	public static function iconv_fallback_utf16_iso88591($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	// UTF-16 (BOM) => UTF-8
	public static function iconv_fallback_utf16_utf8($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function iconv_fallback($in_charset, $out_charset, $string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function recursiveMultiByteCharString2HTML($data, $charset='ISO-8859-1') {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function MultiByteCharString2HTML($string, $charset='ISO-8859-1') {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}



	public static function RGADnameLookup($namecode) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function RGADoriginatorLookup($originatorcode) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function RGADadjustmentLookup($rawadjustment, $signbit) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function RGADgainString($namecode, $originatorcode, $replaygain) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function RGADamplitude2dB($amplitude) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function GetDataImageSize($imgData, &$imageinfo=array()) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function ImageExtFromMime($mime_type) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function ImageTypesLookup($imagetypeid) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function CopyTagsToComments(&$ThisFileInfo) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	public static function EmbeddedLookup($key, $begin, $end, $file, $name) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function IncludeDependency($filename, $sourcefile, $DieOnFailure=false) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function trimNullByte($string) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public static function getFileSizeSyscall($path) {
		$filesize = false;

		if (GETID3_OS_ISWINDOWS) {
			if (class_exists('COM')) { // From PHP 5.3.15 and 5.4.5, COM and DOTNET is no longer built into the php core.you have to add COM support in php.ini:
				$filesystem = new COM('Scripting.FileSystemObject');
				$file = $filesystem->GetFile($path);
				$filesize = $file->Size();
				unset($filesystem, $file);
			} else {
				$commandline = 'for %I in ('.escapeshellarg($path).') do @echo %~zI';
			}
		} else {
			$commandline = 'ls -l '.escapeshellarg($path).' | awk \'{print $5}\'';
		}
		if (isset($commandline)) {
			$output = trim(`$commandline`);
			if (ctype_digit($output)) {
				$filesize = (float) $output;
			}
		}
		return $filesize;
	}


	/**
	* Workaround for Bug #37268 (https://bugs.php.net/bug.php?id=37268)
	* @param string $path A path.
	* @param string $suffix If the name component ends in suffix this will also be cut off.
	* @return string
	*/
	public static function mb_basename($path, $suffix = null) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
