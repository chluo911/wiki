<?php

/**
 * @group Database
 */
class LogFormatterTest extends MediaWikiLangTestCase
{

    /**
     * @var User
     */
    protected $user;

    /**
     * @var Title
     */
    protected $title;

    /**
     * @var RequestContext
     */
    protected $context;

    /**
     * @var Title
     */
    protected $target;

    /**
     * @var string
     */
    protected $user_comment;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function newLogEntry($action, $params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     */
    public function testNormalLogParams()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     * @covers LogFormatter::getActionText
     */
    public function testLogParamsTypeRaw()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     * @covers LogFormatter::getActionText
     */
    public function testLogParamsTypeMsg()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     * @covers LogFormatter::getActionText
     */
    public function testLogParamsTypeMsgContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     * @covers LogFormatter::getActionText
     */
    public function testLogParamsTypeNumber()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     * @covers LogFormatter::getActionText
     */
    public function testLogParamsTypeUserLink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     * @covers LogFormatter::getActionText
     */
    public function testLogParamsTypeTitleLink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     * @covers LogFormatter::getActionText
     */
    public function testLogParamsTypePlain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::newFromEntry
     * @covers LogFormatter::getComment
     */
    public function testLogComment()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideApiParamFormatting
     * @covers LogFormatter::formatParametersForApi
     * @covers LogFormatter::formatParameterValueForApi
     */
    public function testApiParamFormatting($key, $value, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideApiParamFormatting()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The testIrcMsgForAction* tests are supposed to cover the hacky
     * LogFormatter::getIRCActionText / bug 34508
     *
     * Third parties bots listen to those messages. They are clever enough
     * to fetch the i18n messages from the wiki and then analyze the IRC feed
     * to reverse engineer the $1, $2 messages.
     * One thing bots can not detect is when MediaWiki change the meaning of
     * a message like what happened when we deployed 1.19. $1 became the user
     * performing the action which broke basically all bots around.
     *
     * Should cover the following log actions (which are most commonly used by bots):
     * - block/block
     * - block/unblock
     * - block/reblock
     * - delete/delete
     * - delete/restore
     * - newusers/create
     * - newusers/create2
     * - newusers/autocreate
     * - move/move
     * - move/move_redir
     * - protect/protect
     * - protect/modifyprotect
     * - protect/unprotect
     * - protect/move_prot
     * - upload/upload
     * - merge/merge
     * - import/upload
     * - import/interwiki
     *
     * As well as the following Auto Edit Summaries:
     * - blank
     * - replace
     * - rollback
     * - undo
     */

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypeBlock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypeDelete()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypeNewusers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypeMove()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypePatrol()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypeProtect()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypeUpload()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypeMerge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LogFormatter::getIRCActionComment
     * @covers LogFormatter::getIRCActionText
     */
    public function testIrcMsgForLogTypeImport()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $expected Expected IRC text without colors codes
     * @param string $type Log type (move, delete, suppress, patrol ...)
     * @param string $action A log type action
     * @param array $params
     * @param string $comment (optional) A comment for the log action
     * @param string $msg (optional) A message for PHPUnit :-)
     */
    protected function assertIRCComment(
        $expected,
        $type,
        $action,
        $params,
        $comment = null,
        $msg = '',
        $legacy = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
