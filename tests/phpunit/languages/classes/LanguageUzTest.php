<?php
/**
 * PHPUnit tests for the Uzbek language.
 * The language can be represented using two scripts:
 *  - Latin (uz-latn)
 *  - Cyrillic (uz-cyrl)
 *
 * @author Robin Pepermans
 * @author Antoine Musso <hashar at free dot fr>
 * @copyright Copyright © 2012, Robin Pepermans
 * @copyright Copyright © 2011, Antoine Musso <hashar at free dot fr>
 * @file
 *
 * @todo methods in test class should be tidied:
 *  - Should be split into separate test methods and data providers
 *  - Tests for LanguageConverter and Language should probably be separate..
 */

/** Tests for MediaWiki languages/LanguageUz.php */
class LanguageUzTest extends LanguageClassesTestCase
{

    /**
     * @author Nikola Smolenski
     * @covers LanguageConverter::convertTo
     */
    public function testConversionToCyrillic()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::convertTo
     */
    public function testConversionToLatin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # #### HELPERS #####################################################
    /**
     * Wrapper to verify text stay the same after applying conversion
     * @param string $text Text to convert
     * @param string $variant Language variant 'uz-cyrl' or 'uz-latn'
     * @param string $msg Optional message
     */
    protected function assertUnConverted($text, $variant, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Wrapper to verify a text is different once converted to a variant.
     * @param string $text Text to convert
     * @param string $variant Language variant 'uz-cyrl' or 'uz-latn'
     * @param string $msg Optional message
     */
    protected function assertConverted($text, $variant, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verifiy the given Cyrillic text is not converted when using
     * using the cyrillic variant and converted to Latin when using
     * the Latin variant.
     * @param string $text Text to convert
     * @param string $msg Optional message
     */
    protected function assertCyrillic($text, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verifiy the given Latin text is not converted when using
     * using the Latin variant and converted to Cyrillic when using
     * the Cyrillic variant.
     * @param string $text Text to convert
     * @param string $msg Optional message
     */
    protected function assertLatin($text, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** Wrapper for converter::convertTo() method*/
    protected function convertTo($text, $variant)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function convertToCyrillic($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function convertToLatin($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
