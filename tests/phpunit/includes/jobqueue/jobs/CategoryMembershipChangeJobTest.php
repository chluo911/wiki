<?php

/**
 * @covers CategoryMembershipChangeJob
 *
 * @group JobQueue
 * @group Database
 *
 * @licence GNU GPL v2+
 * @author Addshore
 */
class CategoryMembershipChangeJobTest extends MediaWikiTestCase
{
    const TITLE_STRING = 'UTCatChangeJobPage';

    /**
     * @var Title
     */
    private $title;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function runJobs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $text new page text
     *
     * @return int|null
     */
    private function editPageText($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param int $revId
     *
     * @return RecentChange|null
     */
    private function getCategorizeRecentChangeForRevId($revId)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testRun_normalCategoryAddedAndRemoved()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
