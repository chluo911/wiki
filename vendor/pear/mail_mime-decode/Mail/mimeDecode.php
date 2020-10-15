<?php
//
// +----------------------------------------------------------------------+
// | PHP version 4.0                                                      |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2001 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.02 of the PHP license,      |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Richard Heyes <richard@phpguru.org>                         |
// +----------------------------------------------------------------------+

    require_once('PEAR.php');

/**
*  +----------------------------- IMPORTANT ------------------------------+
*  | Usage of this class compared to native php extensions such as        |
*  | mailparse or imap, is slow and may be feature deficient. If available|
*  | you are STRONGLY recommended to use the php extensions.              |
*  +----------------------------------------------------------------------+
*
* Mime Decoding class
*
* This class will parse a raw mime email and return
* the structure. Returned structure is similar to 
* that returned by imap_fetchstructure().
*
* USAGE: (assume $input is your raw email)
*
* $decode = new Mail_mimeDecode($input, "\r\n");
* $structure = $decode->decode();
* print_r($structure);
*
* Or statically:
*
* $params['input'] = $input;
* $structure = Mail_mimeDecode::decode($params);
* print_r($structure);
*
* TODO:
*  - Implement further content types, eg. multipart/parallel,
*    perhaps even message/partial.
*
* @author  Richard Heyes <richard@phpguru.org>
* @version $Revision$
* @package Mail
*/

class Mail_mimeDecode extends PEAR{

    /**
     * The raw email to decode
     * @var    string
     */
    var $_input;

    /**
     * The header part of the input
     * @var    string
     */
    var $_header;

    /**
     * The body part of the input
     * @var    string
     */
    var $_body;

    /**
     * If an error occurs, this is used to store the message
     * @var    string
     */
    var $_error;

    /**
     * Flag to determine whether to include bodies in the
     * returned object.
     * @var    boolean
     */
    var $_include_bodies;

    /**
     * Flag to determine whether to decode bodies
     * @var    boolean
     */
    var $_decode_bodies;

    /**
     * Flag to determine whether to decode headers
     * @var    boolean
     */
    var $_decode_headers;

    /**
     * Variable to hold the line end type.
     * @var    string
     */
    var $_crlf;

    /**
     * Constructor.
     * 
     * Sets up the object, initialise the variables, and splits and
     * stores the header and body of the input.
     *
     * @param string The input to decode
     * @param string CRLF type to use (CRLF/LF/CR)
     * @access public
     */
    function Mail_mimeDecode($input, $crlf = "\r\n")
    {

        $this->_crlf = $crlf;
        list($header, $body) = $this->_splitBodyHeader($input);

        $this->_input          = $input;
        $this->_header         = $header;
        $this->_body           = $body;
        $this->_decode_bodies  = false;
        $this->_include_bodies = true;
    }

    /**
     * Begins the decoding process. If called statically
     * it will create an object and call the decode() method
     * of it.
     * 
     * @param array An array of various parameters that determine
     *              various things:
     *              include_bodies - Whether to include the body in the returned
     *                               object.
     *              decode_bodies  - Whether to decode the bodies
     *                               of the parts. (Transfer encoding)
     *              decode_headers - Whether to decode headers
     *              input          - If called statically, this will be treated
     *                               as the input
     *              crlf           - If called statically, this will be used as
     *                               the crlf value.
     * @return object Decoded results
     * @access public
     */
    function decode($params = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Performs the decoding. Decodes the body string passed to it
     * If it finds certain content-types it will call itself in a
     * recursive fashion
     * 
     * @param string Header section
     * @param string Body section
     * @return object Results of decoding process
     * @access private
     */
    function _decode($headers, $body, $default_ctype = 'text/plain')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given a string containing a header and body
     * section, this function will split them (at the first
     * blank line) and return them.
     * 
     * @param string Input to split apart
     * @return array Contains header and body section
     * @access private
     */
    function _splitBodyHeader($input)
    {

        $pos = strpos($input, $this->_crlf . $this->_crlf);
        if ($pos === false) {
            $this->_error = 'Could not split header and body';
            return false;
        }

        $header = substr($input, 0, $pos);
        $body   = substr($input, $pos+(2*strlen($this->_crlf)));

        return array($header, $body);
    }

    /**
     * Parse headers given in $input and return
     * as assoc array.
     * 
     * @param string Headers to parse
     * @return array Contains parsed headers
     * @access private
     */
    function _parseHeaders($input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Function to parse a header value,
     * extract first part, and any secondary
     * parts (after ;) This function is not as
     * robust as it could be. Eg. header comments
     * in the wrong place will probably break it.
     * 
     * @param string Header value to parse
     * @return array Contains parsed result
     * @access private
     */
    function _parseHeaderValue($input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This function splits the input based
     * on the given boundary
     * 
     * @param string Input to parse
     * @return array Contains array of resulting mime parts
     * @access private
     */
    function _boundarySplit($input, $boundary)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given a header, this function will decode it
     * according to RFC2047. Probably not *exactly*
     * conformant, but it does pass all the given
     * examples (in RFC2047).
     *
     * @param string Input header value to decode
     * @return string Decoded header value
     * @access private
     */
    function _decodeHeader($input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given a body string and an encoding type, 
     * this function will decode and return it.
     *
     * @param  string Input body to decode
     * @param  string Encoding type to use.
     * @return string Decoded body
     * @access private
     */
    function _decodeBody($input, $encoding = '7bit')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given a quoted-printable string, this
     * function will decode and return it.
     *
     * @param  string Input body to decode
     * @return string Decoded body
     * @access private
     */
    function _quotedPrintableDecode($input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks the input for uuencoded files and returns
     * an array of them. Can be called statically, eg:
     *
     * $files =& Mail_mimeDecode::uudecode($some_text);
     *
     * It will check for the begin 666 ... end syntax
     * however and won't just blindly decode whatever you
     * pass it.
     *
     * @param  string Input body to look for attahcments in
     * @return array  Decoded bodies, filenames and permissions
     * @access public
     * @author Unknown
     */
    function &uudecode($input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a xml copy of the output of
     * Mail_mimeDecode::decode. Pass the output in as the
     * argument. This function can be called statically. Eg:
     *
     * $output = $obj->decode();
     * $xml    = Mail_mimeDecode::getXML($output);
     *
     * The DTD used for this should have been in the package. Or
     * alternatively you can get it from cvs, or here:
     * http://www.phpguru.org/xmail/xmail.dtd.
     *
     * @param  object Input to convert to xml. This should be the
     *                output of the Mail_mimeDecode::decode function
     * @return string XML version of input
     * @access public
     */
    function getXML($input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Function that does the actual conversion to xml. Does a single
     * mimepart at a time.
     *
     * @param  object  Input to convert to xml. This is a mimepart object.
     *                 It may or may not contain subparts.
     * @param  integer Number of tabs to indent
     * @return string  XML version of input
     * @access private
     */
    function _getXML($input, $indent = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Helper function to _getXML(). Returns xml of a header.
     *
     * @param  string  Name of header
     * @param  string  Value of header
     * @param  integer Number of tabs to indent
     * @return string  XML version of input
     * @access private
     */
    function _getXML_helper($hdr_name, $hdr_value, $indent)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }    

} // End of class
?>
