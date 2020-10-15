<?php
/**
 * Methods for validating XMP properties.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Media
 */

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerAwareInterface;

/**
 * This contains some static methods for
 * validating XMP properties. See XMPInfo and XMPReader classes.
 *
 * Each of these functions take the same parameters
 * * an info array which is a subset of the XMPInfo::items array
 * * A value (passed as reference) to validate. This can be either a
 *    simple value or an array
 * * A boolean to determine if this is validating a simple or complex values
 *
 * It should be noted that when an array is being validated, typically the validation
 * function is called once for each value, and then once at the end for the entire array.
 *
 * These validation functions can also be used to modify the data. See the gps and flash one's
 * for example.
 *
 * @see http://www.adobe.com/devnet/xmp/pdfs/XMPSpecificationPart1.pdf starting at pg 28
 * @see http://www.adobe.com/devnet/xmp/pdfs/XMPSpecificationPart2.pdf starting at pg 11
 */
class XMPValidate implements LoggerAwareInterface
{

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->setLogger($logger);
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * Function to validate boolean properties ( True or False )
     *
     * @param array $info Information about current property
     * @param mixed &$val Current value to validate
     * @param bool $standalone If this is a simple property or array
     */
    public function validateBoolean($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * function to validate rational properties ( 12/10 )
     *
     * @param array $info Information about current property
     * @param mixed &$val Current value to validate
     * @param bool $standalone If this is a simple property or array
     */
    public function validateRational($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * function to validate rating properties -1, 0-5
     *
     * if its outside of range put it into range.
     *
     * @see MWG spec
     * @param array $info Information about current property
     * @param mixed &$val Current value to validate
     * @param bool $standalone If this is a simple property or array
     */
    public function validateRating($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * function to validate integers
     *
     * @param array $info Information about current property
     * @param mixed &$val Current value to validate
     * @param bool $standalone If this is a simple property or array
     */
    public function validateInteger($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * function to validate properties with a fixed number of allowed
     * choices. (closed choice)
     *
     * @param array $info Information about current property
     * @param mixed &$val Current value to validate
     * @param bool $standalone If this is a simple property or array
     */
    public function validateClosed($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * function to validate and modify flash structure
     *
     * @param array $info Information about current property
     * @param mixed &$val Current value to validate
     * @param bool $standalone If this is a simple property or array
     */
    public function validateFlash($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * function to validate LangCode properties ( en-GB, etc )
     *
     * This is just a naive check to make sure it somewhat looks like a lang code.
     *
     * @see BCP 47
     * @see https://wwwimages2.adobe.com/content/dam/Adobe/en/devnet/xmp/pdfs/
     *      XMP%20SDK%20Release%20cc-2014-12/XMPSpecificationPart1.pdf page 22 (section 8.2.2.4)
     *
     * @param array $info Information about current property
     * @param mixed &$val Current value to validate
     * @param bool $standalone If this is a simple property or array
     */
    public function validateLangCode($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * function to validate date properties, and convert to (partial) Exif format.
     *
     * Dates can be one of the following formats:
     * YYYY
     * YYYY-MM
     * YYYY-MM-DD
     * YYYY-MM-DDThh:mmTZD
     * YYYY-MM-DDThh:mm:ssTZD
     * YYYY-MM-DDThh:mm:ss.sTZD
     *
     * @param array $info Information about current property
     * @param mixed &$val Current value to validate. Converts to TS_EXIF as a side-effect.
     *    in cases where there's only a partial date, it will give things like
     *    2011:04.
     * @param bool $standalone If this is a simple property or array
     */
    public function validateDate($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** function to validate, and more importantly
     * translate the XMP DMS form of gps coords to
     * the decimal form we use.
     *
     * @see http://www.adobe.com/devnet/xmp/pdfs/XMPSpecificationPart2.pdf
     *        section 1.2.7.4 on page 23
     *
     * @param array $info Unused (info about prop)
     * @param string &$val GPS string in either DDD,MM,SSk or
     *   or DDD,MM.mmk form
     * @param bool $standalone If its a simple prop (should always be true)
     */
    public function validateGPS($info, &$val, $standalone)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
