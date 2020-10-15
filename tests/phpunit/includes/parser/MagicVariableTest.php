<?php
/**
 * This file is intended to test magic variables in the parser
 * It was inspired by Raymond & Matěj Grabovský commenting about r66200
 *
 * As of february 2011, it only tests some revisions and date related
 * magic variables.
 *
 * @author Antoine Musso
 * @copyright Copyright © 2011, Antoine Musso
 * @file
 * @todo covers tags
 *
 * @group Database
 */

class MagicVariableTest extends MediaWikiTestCase
{
    /**
     * @var Parser
     */
    private $testParser = null;

    /**
     * An array of magicword returned as type integer by the parser
     * They are usually returned as a string for i18n since we support
     * persan numbers for example, but some magic explicitly return
     * them as integer.
     * @see MagicVariableTest::assertMagic()
     */
    private $expectedAsInteger = [
        'revisionday',
        'revisionmonth1',
    ];

    /** setup a basic parser object */
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param int $num Upper limit for numbers
     * @return array Array of numbers from 1 up to $num
     */
    private static function createProviderUpTo($num)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array Array of months numbers (as an integer)
     */
    public static function provideMonths()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array Array of days numbers (as an integer)
     */
    public static function provideDays()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # ############## TESTS #############################################
    # @todo FIXME:
    #  - those got copy pasted, we can probably make them cleaner
    #  - tests are lacking useful messages

    # day

    /** @dataProvider provideDays */
    public function testCurrentdayIsUnPadded($day)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @dataProvider provideDays */
    public function testCurrentdaytwoIsZeroPadded($day)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @dataProvider provideDays */
    public function testLocaldayIsUnPadded($day)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @dataProvider provideDays */
    public function testLocaldaytwoIsZeroPadded($day)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # month

    /** @dataProvider provideMonths */
    public function testCurrentmonthIsZeroPadded($month)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @dataProvider provideMonths */
    public function testCurrentmonthoneIsUnPadded($month)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @dataProvider provideMonths */
    public function testLocalmonthIsZeroPadded($month)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @dataProvider provideMonths */
    public function testLocalmonthoneIsUnPadded($month)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # revision day

    /** @dataProvider provideDays */
    public function testRevisiondayIsUnPadded($day)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @dataProvider provideDays */
    public function testRevisiondaytwoIsZeroPadded($day)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # revision month

    /** @dataProvider provideMonths */
    public function testRevisionmonthIsZeroPadded($month)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @dataProvider provideMonths */
    public function testRevisionmonthoneIsUnPadded($month)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    # ############## HELPERS ############################################

    /** assertion helper expecting a magic output which is zero padded */
    public function assertZeroPadded($magic, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** assertion helper expecting a magic output which is unpadded */
    public function assertUnPadded($magic, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Main assertion helper for magic variables padding
     * @param string $magic Magic variable name
     * @param mixed $value Month or day
     * @param string $format Sprintf format for $value
     */
    private function assertMagicPadding($magic, $value, $format)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * helper to set the parser timestamp and revision timestamp
     * @param string $ts
     */
    private function setParserTS($ts)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Assertion helper to test a magic variable output
     * @param string|int $expected
     * @param string $magic
     */
    private function assertMagic($expected, $magic)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
