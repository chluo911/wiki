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
// module.tag.xmp.php                                          //
// module for analyzing XMP metadata (e.g. in JPEG files)      //
// dependencies: NONE                                          //
//                                                             //
/////////////////////////////////////////////////////////////////
//                                                             //
// Module originally written [2009-Mar-26] by                  //
//      Nigel Barnes <ngbarnesØhotmail*com>                    //
// Bundled into getID3 with permission                         //
//   called by getID3 in module.graphic.jpg.php                //
//                                                            ///
/////////////////////////////////////////////////////////////////

/**************************************************************************************************
 * SWISScenter Source                                                              Nigel Barnes
 *
 * 	Provides functions for reading information from the 'APP1' Extensible Metadata
 *	Platform (XMP) segment of JPEG format files.
 *	This XMP segment is XML based and contains the Resource Description Framework (RDF)
 *	data, which itself can contain the Dublin Core Metadata Initiative (DCMI) information.
 *
 * 	This code uses segments from the JPEG Metadata Toolkit project by Evan Hunter.
 *************************************************************************************************/
class Image_XMP
{
	/**
	* @var string
	* The name of the image file that contains the XMP fields to extract and modify.
	* @see Image_XMP()
	*/
	public $_sFilename = null;

	/**
	* @var array
	* The XMP fields that were extracted from the image or updated by this class.
	* @see getAllTags()
	*/
	public $_aXMP = array();

	/**
	* @var boolean
	* True if an APP1 segment was found to contain XMP metadata.
	* @see isValid()
	*/
	public $_bXMPParse = false;

	/**
	* Returns the status of XMP parsing during instantiation
	*
	* You'll normally want to call this method before trying to get XMP fields.
	*
	* @return boolean
	* Returns true if an APP1 segment was found to contain XMP metadata.
	*/
	public function isValid()
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* Get a copy of all XMP tags extracted from the image
	*
	* @return array - An array of XMP fields as it extracted by the XMPparse() function
	*/
	public function getAllTags()
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* Reads all the JPEG header segments from an JPEG image file into an array
	*
	* @param string $filename - the filename of the JPEG file to read
	* @return array $headerdata - Array of JPEG header segments
	* @return boolean FALSE - if headers could not be read
	*/
	public function _get_jpeg_header_data($filename)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	/**
	* Retrieves XMP information from an APP1 JPEG segment and returns the raw XML text as a string.
	*
	* @param string $filename - the filename of the JPEG file to read
	* @return string $xmp_data - the string of raw XML text
	* @return boolean FALSE - if an APP 1 XMP segment could not be found, or if an error occured
	*/
	public function _get_XMP_text($filename)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	* Parses a string containing XMP data (XML), and returns an array
	* which contains all the XMP (XML) information.
	*
	* @param string $xml_text - a string containing the XMP data (XML) to be parsed
	* @return array $xmp_array - an array containing all xmp details retrieved.
	* @return boolean FALSE - couldn't parse the XMP data
	*/
	public function read_XMP_array_from_text($xmltext)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}


	/**
	* Constructor
	*
	* @param string - Name of the image file to access and extract XMP information from.
	*/
	public function __construct($sFilename)
	{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}

/**
* Global Variable: XMP_tag_captions
*
* The Property names of all known XMP fields.
* Note: this is a full list with unrequired properties commented out.
*/
/*
$GLOBALS['XMP_tag_captions'] = array(
// IPTC Core
	'Iptc4xmpCore:CiAdrCity',
	'Iptc4xmpCore:CiAdrCtry',
	'Iptc4xmpCore:CiAdrExtadr',
	'Iptc4xmpCore:CiAdrPcode',
	'Iptc4xmpCore:CiAdrRegion',
	'Iptc4xmpCore:CiEmailWork',
	'Iptc4xmpCore:CiTelWork',
	'Iptc4xmpCore:CiUrlWork',
	'Iptc4xmpCore:CountryCode',
	'Iptc4xmpCore:CreatorContactInfo',
	'Iptc4xmpCore:IntellectualGenre',
	'Iptc4xmpCore:Location',
	'Iptc4xmpCore:Scene',
	'Iptc4xmpCore:SubjectCode',
// Dublin Core Schema
	'dc:contributor',
	'dc:coverage',
	'dc:creator',
	'dc:date',
	'dc:description',
	'dc:format',
	'dc:identifier',
	'dc:language',
	'dc:publisher',
	'dc:relation',
	'dc:rights',
	'dc:source',
	'dc:subject',
	'dc:title',
	'dc:type',
// XMP Basic Schema
	'xmp:Advisory',
	'xmp:BaseURL',
	'xmp:CreateDate',
	'xmp:CreatorTool',
	'xmp:Identifier',
	'xmp:Label',
	'xmp:MetadataDate',
	'xmp:ModifyDate',
	'xmp:Nickname',
	'xmp:Rating',
	'xmp:Thumbnails',
	'xmpidq:Scheme',
// XMP Rights Management Schema
	'xmpRights:Certificate',
	'xmpRights:Marked',
	'xmpRights:Owner',
	'xmpRights:UsageTerms',
	'xmpRights:WebStatement',
// These are not in spec but Photoshop CS seems to use them
	'xap:Advisory',
	'xap:BaseURL',
	'xap:CreateDate',
	'xap:CreatorTool',
	'xap:Identifier',
	'xap:MetadataDate',
	'xap:ModifyDate',
	'xap:Nickname',
	'xap:Rating',
	'xap:Thumbnails',
	'xapidq:Scheme',
	'xapRights:Certificate',
	'xapRights:Copyright',
	'xapRights:Marked',
	'xapRights:Owner',
	'xapRights:UsageTerms',
	'xapRights:WebStatement',
// XMP Media Management Schema
	'xapMM:DerivedFrom',
	'xapMM:DocumentID',
	'xapMM:History',
	'xapMM:InstanceID',
	'xapMM:ManagedFrom',
	'xapMM:Manager',
	'xapMM:ManageTo',
	'xapMM:ManageUI',
	'xapMM:ManagerVariant',
	'xapMM:RenditionClass',
	'xapMM:RenditionParams',
	'xapMM:VersionID',
	'xapMM:Versions',
	'xapMM:LastURL',
	'xapMM:RenditionOf',
	'xapMM:SaveID',
// XMP Basic Job Ticket Schema
	'xapBJ:JobRef',
// XMP Paged-Text Schema
	'xmpTPg:MaxPageSize',
	'xmpTPg:NPages',
	'xmpTPg:Fonts',
	'xmpTPg:Colorants',
	'xmpTPg:PlateNames',
// Adobe PDF Schema
	'pdf:Keywords',
	'pdf:PDFVersion',
	'pdf:Producer',
// Photoshop Schema
	'photoshop:AuthorsPosition',
	'photoshop:CaptionWriter',
	'photoshop:Category',
	'photoshop:City',
	'photoshop:Country',
	'photoshop:Credit',
	'photoshop:DateCreated',
	'photoshop:Headline',
	'photoshop:History',
// Not in XMP spec
	'photoshop:Instructions',
	'photoshop:Source',
	'photoshop:State',
	'photoshop:SupplementalCategories',
	'photoshop:TransmissionReference',
	'photoshop:Urgency',
// EXIF Schemas
	'tiff:ImageWidth',
	'tiff:ImageLength',
	'tiff:BitsPerSample',
	'tiff:Compression',
	'tiff:PhotometricInterpretation',
	'tiff:Orientation',
	'tiff:SamplesPerPixel',
	'tiff:PlanarConfiguration',
	'tiff:YCbCrSubSampling',
	'tiff:YCbCrPositioning',
	'tiff:XResolution',
	'tiff:YResolution',
	'tiff:ResolutionUnit',
	'tiff:TransferFunction',
	'tiff:WhitePoint',
	'tiff:PrimaryChromaticities',
	'tiff:YCbCrCoefficients',
	'tiff:ReferenceBlackWhite',
	'tiff:DateTime',
	'tiff:ImageDescription',
	'tiff:Make',
	'tiff:Model',
	'tiff:Software',
	'tiff:Artist',
	'tiff:Copyright',
	'exif:ExifVersion',
	'exif:FlashpixVersion',
	'exif:ColorSpace',
	'exif:ComponentsConfiguration',
	'exif:CompressedBitsPerPixel',
	'exif:PixelXDimension',
	'exif:PixelYDimension',
	'exif:MakerNote',
	'exif:UserComment',
	'exif:RelatedSoundFile',
	'exif:DateTimeOriginal',
	'exif:DateTimeDigitized',
	'exif:ExposureTime',
	'exif:FNumber',
	'exif:ExposureProgram',
	'exif:SpectralSensitivity',
	'exif:ISOSpeedRatings',
	'exif:OECF',
	'exif:ShutterSpeedValue',
	'exif:ApertureValue',
	'exif:BrightnessValue',
	'exif:ExposureBiasValue',
	'exif:MaxApertureValue',
	'exif:SubjectDistance',
	'exif:MeteringMode',
	'exif:LightSource',
	'exif:Flash',
	'exif:FocalLength',
	'exif:SubjectArea',
	'exif:FlashEnergy',
	'exif:SpatialFrequencyResponse',
	'exif:FocalPlaneXResolution',
	'exif:FocalPlaneYResolution',
	'exif:FocalPlaneResolutionUnit',
	'exif:SubjectLocation',
	'exif:SensingMethod',
	'exif:FileSource',
	'exif:SceneType',
	'exif:CFAPattern',
	'exif:CustomRendered',
	'exif:ExposureMode',
	'exif:WhiteBalance',
	'exif:DigitalZoomRatio',
	'exif:FocalLengthIn35mmFilm',
	'exif:SceneCaptureType',
	'exif:GainControl',
	'exif:Contrast',
	'exif:Saturation',
	'exif:Sharpness',
	'exif:DeviceSettingDescription',
	'exif:SubjectDistanceRange',
	'exif:ImageUniqueID',
	'exif:GPSVersionID',
	'exif:GPSLatitude',
	'exif:GPSLongitude',
	'exif:GPSAltitudeRef',
	'exif:GPSAltitude',
	'exif:GPSTimeStamp',
	'exif:GPSSatellites',
	'exif:GPSStatus',
	'exif:GPSMeasureMode',
	'exif:GPSDOP',
	'exif:GPSSpeedRef',
	'exif:GPSSpeed',
	'exif:GPSTrackRef',
	'exif:GPSTrack',
	'exif:GPSImgDirectionRef',
	'exif:GPSImgDirection',
	'exif:GPSMapDatum',
	'exif:GPSDestLatitude',
	'exif:GPSDestLongitude',
	'exif:GPSDestBearingRef',
	'exif:GPSDestBearing',
	'exif:GPSDestDistanceRef',
	'exif:GPSDestDistance',
	'exif:GPSProcessingMethod',
	'exif:GPSAreaInformation',
	'exif:GPSDifferential',
	'stDim:w',
	'stDim:h',
	'stDim:unit',
	'xapGImg:height',
	'xapGImg:width',
	'xapGImg:format',
	'xapGImg:image',
	'stEvt:action',
	'stEvt:instanceID',
	'stEvt:parameters',
	'stEvt:softwareAgent',
	'stEvt:when',
	'stRef:instanceID',
	'stRef:documentID',
	'stRef:versionID',
	'stRef:renditionClass',
	'stRef:renditionParams',
	'stRef:manager',
	'stRef:managerVariant',
	'stRef:manageTo',
	'stRef:manageUI',
	'stVer:comments',
	'stVer:event',
	'stVer:modifyDate',
	'stVer:modifier',
	'stVer:version',
	'stJob:name',
	'stJob:id',
	'stJob:url',
// Exif Flash
	'exif:Fired',
	'exif:Return',
	'exif:Mode',
	'exif:Function',
	'exif:RedEyeMode',
// Exif OECF/SFR
	'exif:Columns',
	'exif:Rows',
	'exif:Names',
	'exif:Values',
// Exif CFAPattern
	'exif:Columns',
	'exif:Rows',
	'exif:Values',
// Exif DeviceSettings
	'exif:Columns',
	'exif:Rows',
	'exif:Settings',
);
*/

/**
* Global Variable: JPEG_Segment_Names
*
* The names of the JPEG segment markers, indexed by their marker number
*/
$GLOBALS['JPEG_Segment_Names'] = array(
	0x01 => 'TEM',
	0x02 => 'RES',
	0xC0 => 'SOF0',
	0xC1 => 'SOF1',
	0xC2 => 'SOF2',
	0xC3 => 'SOF4',
	0xC4 => 'DHT',
	0xC5 => 'SOF5',
	0xC6 => 'SOF6',
	0xC7 => 'SOF7',
	0xC8 => 'JPG',
	0xC9 => 'SOF9',
	0xCA => 'SOF10',
	0xCB => 'SOF11',
	0xCC => 'DAC',
	0xCD => 'SOF13',
	0xCE => 'SOF14',
	0xCF => 'SOF15',
	0xD0 => 'RST0',
	0xD1 => 'RST1',
	0xD2 => 'RST2',
	0xD3 => 'RST3',
	0xD4 => 'RST4',
	0xD5 => 'RST5',
	0xD6 => 'RST6',
	0xD7 => 'RST7',
	0xD8 => 'SOI',
	0xD9 => 'EOI',
	0xDA => 'SOS',
	0xDB => 'DQT',
	0xDC => 'DNL',
	0xDD => 'DRI',
	0xDE => 'DHP',
	0xDF => 'EXP',
	0xE0 => 'APP0',
	0xE1 => 'APP1',
	0xE2 => 'APP2',
	0xE3 => 'APP3',
	0xE4 => 'APP4',
	0xE5 => 'APP5',
	0xE6 => 'APP6',
	0xE7 => 'APP7',
	0xE8 => 'APP8',
	0xE9 => 'APP9',
	0xEA => 'APP10',
	0xEB => 'APP11',
	0xEC => 'APP12',
	0xED => 'APP13',
	0xEE => 'APP14',
	0xEF => 'APP15',
	0xF0 => 'JPG0',
	0xF1 => 'JPG1',
	0xF2 => 'JPG2',
	0xF3 => 'JPG3',
	0xF4 => 'JPG4',
	0xF5 => 'JPG5',
	0xF6 => 'JPG6',
	0xF7 => 'JPG7',
	0xF8 => 'JPG8',
	0xF9 => 'JPG9',
	0xFA => 'JPG10',
	0xFB => 'JPG11',
	0xFC => 'JPG12',
	0xFD => 'JPG13',
	0xFE => 'COM',
);
