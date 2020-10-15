<?php

/**
 * @group Database
 * @group Blocking
 */
class BlockTest extends MediaWikiLangTestCase
{

    /** @var Block */
    private $block;
    private $madeAt;

    /* variable used to save up the blockID we insert in this test suite */
    private $blockId;

    public function addDBData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * debug function : dump the ipblocks table
     */
    public function dumpBlocks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Block::newFromTarget
     */
    public function testINewFromTargetReturnsCorrectBlock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Block::newFromID
     */
    public function testINewFromIDReturnsCorrectBlock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * per bug 26425
     */
    public function testBug26425BlockTimestampDefaultsToTime()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * CheckUser since being changed to use Block::newFromTarget started failing
     * because the new function didn't accept empty strings like Block::load()
     * had. Regression bug 29116.
     *
     * @dataProvider provideBug29116Data
     * @covers Block::newFromTarget
     */
    public function testBug29116NewFromTargetWithEmptyIp($vagueTarget)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideBug29116Data()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Block::prevents
     */
    public function testBlockedUserCanNotCreateAccount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Block::insert
     */
    public function testCrappyCrossWikiBlocks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function addXffBlocks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providerXff()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providerXff
     * @covers Block::getBlocksForIPList
     * @covers Block::chooseBlock
     */
    public function testBlocksOnXff($xff, $exCount, $exResult)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDeprecatedConstructor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
