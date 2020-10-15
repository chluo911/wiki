<?php
/**
 * Holds tests for DatabaseMysqlBase MediaWiki class.
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
 * @author Antoine Musso
 * @author Bryan Davis
 * @copyright © 2013 Antoine Musso
 * @copyright © 2013 Bryan Davis
 * @copyright © 2013 Wikimedia Foundation Inc.
 */

/**
 * Fake class around abstract class so we can call concrete methods.
 */
class FakeDatabaseMysqlBase extends DatabaseMysqlBase
{
    // From Database
    public function __construct()
    {
        $this->profiler = new ProfilerStub([]);
        $this->trxProfiler = new TransactionProfiler();
        $this->cliMode = true;
        $this->connLogger = new \Psr\Log\NullLogger();
        $this->queryLogger = new \Psr\Log\NullLogger();
        $this->errorLogger = function (Exception $e) {
            wfWarn(get_class($e) . ": {$e->getMessage()}");
        };
        $this->currentDomain = DatabaseDomain::newUnspecified();
    }

    protected function closeConnection()
    {
    }

    protected function doQuery($sql)
    {
    }

    // From DatabaseMysql
    protected function mysqlConnect($realServer)
    {
    }

    protected function mysqlSetCharset($charset)
    {
    }

    protected function mysqlFreeResult($res)
    {
    }

    protected function mysqlFetchObject($res)
    {
    }

    protected function mysqlFetchArray($res)
    {
    }

    protected function mysqlNumRows($res)
    {
    }

    protected function mysqlNumFields($res)
    {
    }

    protected function mysqlFieldName($res, $n)
    {
    }

    protected function mysqlFieldType($res, $n)
    {
    }

    protected function mysqlDataSeek($res, $row)
    {
    }

    protected function mysqlError($conn = null)
    {
    }

    protected function mysqlFetchField($res, $n)
    {
    }

    protected function mysqlRealEscapeString($s)
    {
    }

    public function insertId()
    {
    }

    public function lastErrno()
    {
    }

    public function affectedRows()
    {
    }

    public function getServerVersion()
    {
    }
}

class DatabaseMysqlBaseTest extends MediaWikiTestCase
{
    /**
     * @dataProvider provideDiapers
     * @covers DatabaseMysqlBase::addIdentifierQuotes
     */
    public function testAddIdentifierQuotes($expected, $in)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Feeds testAddIdentifierQuotes
     *
     * Named per bug 20281 convention.
     */
    public function provideDiapers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private static function createUnicodeString($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getMockForViews()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    /**
     * @covers DatabaseMysqlBase::listViews
     */
    public function testListviews()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideComparePositions
     */
    public function testHasReached(MySQLMasterPos $lowerPos, MySQLMasterPos $higherPos, $match)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideComparePositions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideChannelPositions
     */
    public function testChannelsMatch(MySQLMasterPos $pos1, MySQLMasterPos $pos2, $matches)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideChannelPositions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideLagAmounts
     */
    public function testPtHeartbeat($lag)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideLagAmounts()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
