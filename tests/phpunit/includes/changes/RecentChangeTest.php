<?php
use Wikimedia\ScopedCallback;

/**
 * @group Database
 */
class RecentChangeTest extends MediaWikiTestCase
{
    protected $title;
    protected $target;
    protected $user;
    protected $user_comment;
    protected $context;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers RecentChange::newFromRow
     * @covers RecentChange::loadFromRow
     */
    public function testNewFromRow()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers RecentChange::parseParams
     */
    public function testParseParams()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $expectedParseParams
     * @param string|null $rawRcParams
     */
    protected function assertParseParams($expectedParseParams, $rawRcParams)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * 50 mins and 100 mins are used here as the tests never take that long!
     * @return array
     */
    public function provideIsInRCLifespan()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers RecentChange::isInRCLifespan
     * @dataProvider provideIsInRCLifespan
     */
    public function testIsInRCLifespan($maxAge, $timestamp, $tolerance, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideRCTypes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideRCTypes
     * @covers RecentChange::parseFromRCType
     */
    public function testParseFromRCType($rcType, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideRCTypes
     * @covers RecentChange::parseToRCType
     */
    public function testParseToRCType($rcType, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return PHPUnit_Framework_MockObject_MockObject|PageProps
     */
    private function getMockPageProps()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideCategoryContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCategoryContent
     * @covers RecentChange::newForCategorization
     */
    public function testHiddenCategoryChange($isHidden)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
