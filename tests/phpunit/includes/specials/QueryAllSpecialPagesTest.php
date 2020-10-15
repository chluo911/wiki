<?php
/**
 * Test class to run the query of most of all our special pages
 *
 * Copyright © 2011, Antoine Musso
 *
 * @author Antoine Musso
 * @group Database
 */

/**
 * @covers QueryPage<extended>
 */
class QueryAllSpecialPagesTest extends MediaWikiTestCase
{

    /** List query pages that can not be tested automatically */
    protected $manualTest = [
        'LinkSearchPage'
    ];

    /**
     * Pages whose query use the same DB table more than once.
     * This is used to skip testing those pages when run against a MySQL backend
     * which does not support reopening a temporary table. See upstream bug:
     * http://bugs.mysql.com/bug.php?id=10327
     */
    protected $reopensTempTable = [
        'BrokenRedirects',
    ];

    /**
     * Initialize all query page objects
     */
    public function __construct()
    {
        parent::__construct();

        foreach (QueryPage::getPages() as $page) {
            $class = $page[0];
            if (!in_array($class, $this->manualTest)) {
                $this->queryPages[$class] = new $class;
            }
        }
    }

    /**
     * Test SQL for each of our QueryPages objects
     * @group Database
     */
    public function testQuerypageSqlQuery()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
