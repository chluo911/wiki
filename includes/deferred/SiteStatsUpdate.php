<?php
/**
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
 */
use Wikimedia\Assert\Assert;

/**
 * Class for handling updates to the site_stats table
 */
class SiteStatsUpdate implements DeferrableUpdate, MergeableUpdate
{
    /** @var int */
    protected $edits = 0;
    /** @var int */
    protected $pages = 0;
    /** @var int */
    protected $articles = 0;
    /** @var int */
    protected $users = 0;
    /** @var int */
    protected $images = 0;

    private static $counters = [ 'edits', 'pages', 'articles', 'users', 'images' ];

    // @todo deprecate this constructor
    public function __construct($views, $edits, $good, $pages = 0, $users = 0)
    {
        $this->edits = $edits;
        $this->articles = $good;
        $this->pages = $pages;
        $this->users = $users;
    }

    public function merge(MergeableUpdate $update)
    {
        /** @var SiteStatsUpdate $update */
        Assert::parameterType(__CLASS__, $update, '$update');

        foreach (self::$counters as $field) {
            $this->$field += $update->$field;
        }
    }

    /**
     * @param array $deltas
     * @return SiteStatsUpdate
     */
    public static function factory(array $deltas)
    {
        $update = new self(0, 0, 0);

        foreach (self::$counters as $field) {
            if (isset($deltas[$field]) && $deltas[$field]) {
                $update->$field = $deltas[$field];
            }
        }

        return $update;
    }

    public function doUpdate()
    {
        global $wgSiteStatsAsyncFactor;

        $this->doUpdateContextStats();

        $rate = $wgSiteStatsAsyncFactor; // convenience
        // If set to do so, only do actual DB updates 1 every $rate times.
        // The other times, just update "pending delta" values in memcached.
        if ($rate && ($rate < 0 || mt_rand(0, $rate - 1) != 0)) {
            $this->doUpdatePendingDeltas();
        } else {
            // Need a separate transaction because this a global lock
            DeferredUpdates::addCallableUpdate([ $this, 'tryDBUpdateInternal' ]);
        }
    }

    /**
     * Do not call this outside of SiteStatsUpdate
     */
    public function tryDBUpdateInternal()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param IDatabase $dbw
     * @return bool|mixed
     */
    public static function cacheUpdate($dbw)
    {
        global $wgActiveUserDays;
        $dbr = wfGetDB(DB_REPLICA, 'vslow');
        # Get non-bot users than did some recent action other than making accounts.
        # If account creation is included, the number gets inflated ~20+ fold on enwiki.
        $activeUsers = $dbr->selectField(
            'recentchanges',
            'COUNT( DISTINCT rc_user_text )',
            [
                'rc_user != 0',
                'rc_bot' => 0,
                'rc_log_type != ' . $dbr->addQuotes('newusers') . ' OR rc_log_type IS NULL',
                'rc_timestamp >= ' . $dbr->addQuotes($dbr->timestamp(wfTimestamp(TS_UNIX)
                    - $wgActiveUserDays * 24 * 3600)),
            ],
            __METHOD__
        );
        $dbw->update(
            'site_stats',
            [ 'ss_active_users' => intval($activeUsers) ],
            [ 'ss_row_id' => 1 ],
            __METHOD__
        );

        // Invalid cache used by parser functions
        SiteStats::unload();

        return $activeUsers;
    }

    protected function doUpdateContextStats()
    {
        $stats = RequestContext::getMain()->getStats();
        foreach ([ 'edits', 'articles', 'pages', 'users', 'images' ] as $type) {
            $delta = $this->$type;
            if ($delta !== 0) {
                $stats->updateCount("site.$type", $delta);
            }
        }
    }

    protected function doUpdatePendingDeltas()
    {
        $this->adjustPending('ss_total_edits', $this->edits);
        $this->adjustPending('ss_good_articles', $this->articles);
        $this->adjustPending('ss_total_pages', $this->pages);
        $this->adjustPending('ss_users', $this->users);
        $this->adjustPending('ss_images', $this->images);
    }

    /**
     * @param string $sql
     * @param string $field
     * @param int $delta
     */
    protected function appendUpdate(&$sql, $field, $delta)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $type
     * @param string $sign ('+' or '-')
     * @return string
     */
    private function getTypeCacheKey($type, $sign)
    {
        return wfMemcKey('sitestatsupdate', 'pendingdelta', $type, $sign);
    }

    /**
     * Adjust the pending deltas for a stat type.
     * Each stat type has two pending counters, one for increments and decrements
     * @param string $type
     * @param int $delta Delta (positive or negative)
     */
    protected function adjustPending($type, $delta)
    {
        $cache = ObjectCache::getMainStashInstance();
        if ($delta < 0) { // decrement
            $key = $this->getTypeCacheKey($type, '-');
        } else { // increment
            $key = $this->getTypeCacheKey($type, '+');
        }

        $magnitude = abs($delta);
        $cache->incrWithInit($key, 0, $magnitude, $magnitude);
    }

    /**
     * Get pending delta counters for each stat type
     * @return array Positive and negative deltas for each type
     */
    protected function getPendingDeltas()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Reduce pending delta counters after updates have been applied
     * @param array $pd Result of getPendingDeltas(), used for DB update
     */
    protected function removePendingDeltas(array $pd)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
