<?php
/**
 * Base code for "query" special pages.
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
 * @ingroup SpecialPage
 */

/**
 * This is a class for doing query pages; since they're almost all the same,
 * we factor out some of the functionality into a superclass, and let
 * subclasses derive from it.
 * @ingroup SpecialPage
 */
abstract class QueryPage extends SpecialPage
{
    /** @var bool Whether or not we want plain listoutput rather than an ordered list */
    protected $listoutput = false;

    /** @var int The offset and limit in use, as passed to the query() function */
    protected $offset = 0;

    /** @var int */
    protected $limit = 0;

    /**
     * The number of rows returned by the query. Reading this variable
     * only makes sense in functions that are run after the query has been
     * done, such as preprocessResults() and formatRow().
     */
    protected $numRows;

    protected $cachedTimestamp = null;

    /**
     * Whether to show prev/next links
     */
    protected $shownavigation = true;

    /**
     * Get a list of query page classes and their associated special pages,
     * for periodic updates.
     *
     * DO NOT CHANGE THIS LIST without testing that
     * maintenance/updateSpecialPages.php still works.
     * @return array
     */
    public static function getPages()
    {
        static $qp = null;

        if ($qp === null) {
            // QueryPage subclass, Special page name
            $qp = [
                [ 'AncientPagesPage', 'Ancientpages' ],
                [ 'BrokenRedirectsPage', 'BrokenRedirects' ],
                [ 'DeadendPagesPage', 'Deadendpages' ],
                [ 'DoubleRedirectsPage', 'DoubleRedirects' ],
                [ 'FileDuplicateSearchPage', 'FileDuplicateSearch' ],
                [ 'ListDuplicatedFilesPage', 'ListDuplicatedFiles' ],
                [ 'LinkSearchPage', 'LinkSearch' ],
                [ 'ListredirectsPage', 'Listredirects' ],
                [ 'LonelyPagesPage', 'Lonelypages' ],
                [ 'LongPagesPage', 'Longpages' ],
                [ 'MediaStatisticsPage', 'MediaStatistics' ],
                [ 'MIMEsearchPage', 'MIMEsearch' ],
                [ 'MostcategoriesPage', 'Mostcategories' ],
                [ 'MostimagesPage', 'Mostimages' ],
                [ 'MostinterwikisPage', 'Mostinterwikis' ],
                [ 'MostlinkedCategoriesPage', 'Mostlinkedcategories' ],
                [ 'MostlinkedTemplatesPage', 'Mostlinkedtemplates' ],
                [ 'MostlinkedPage', 'Mostlinked' ],
                [ 'MostrevisionsPage', 'Mostrevisions' ],
                [ 'FewestrevisionsPage', 'Fewestrevisions' ],
                [ 'ShortPagesPage', 'Shortpages' ],
                [ 'UncategorizedCategoriesPage', 'Uncategorizedcategories' ],
                [ 'UncategorizedPagesPage', 'Uncategorizedpages' ],
                [ 'UncategorizedImagesPage', 'Uncategorizedimages' ],
                [ 'UncategorizedTemplatesPage', 'Uncategorizedtemplates' ],
                [ 'UnusedCategoriesPage', 'Unusedcategories' ],
                [ 'UnusedimagesPage', 'Unusedimages' ],
                [ 'WantedCategoriesPage', 'Wantedcategories' ],
                [ 'WantedFilesPage', 'Wantedfiles' ],
                [ 'WantedPagesPage', 'Wantedpages' ],
                [ 'WantedTemplatesPage', 'Wantedtemplates' ],
                [ 'UnwatchedpagesPage', 'Unwatchedpages' ],
                [ 'UnusedtemplatesPage', 'Unusedtemplates' ],
                [ 'WithoutInterwikiPage', 'Withoutinterwiki' ],
            ];
            Hooks::run('wgQueryPages', [ &$qp ]);
        }

        return $qp;
    }

    /**
     * A mutator for $this->listoutput;
     *
     * @param bool $bool
     */
    public function setListoutput($bool)
    {
        $this->listoutput = $bool;
    }

    /**
     * Subclasses return an SQL query here, formatted as an array with the
     * following keys:
     *    tables => Table(s) for passing to Database::select()
     *    fields => Field(s) for passing to Database::select(), may be *
     *    conds => WHERE conditions
     *    options => options
     *    join_conds => JOIN conditions
     *
     * Note that the query itself should return the following three columns:
     * 'namespace', 'title', and 'value'. 'value' is used for sorting.
     *
     * These may be stored in the querycache table for expensive queries,
     * and that cached data will be returned sometimes, so the presence of
     * extra fields can't be relied upon. The cached 'value' column will be
     * an integer; non-numeric values are useful only for sorting the
     * initial query (except if they're timestamps, see usesTimestamps()).
     *
     * Don't include an ORDER or LIMIT clause, they will be added.
     *
     * If this function is not overridden or returns something other than
     * an array, getSQL() will be used instead. This is for backwards
     * compatibility only and is strongly deprecated.
     * @return array
     * @since 1.18
     */
    public function getQueryInfo()
    {
        return null;
    }

    /**
     * For back-compat, subclasses may return a raw SQL query here, as a string.
     * This is strongly deprecated; getQueryInfo() should be overridden instead.
     * @throws MWException
     * @return string
     */
    public function getSQL()
    {
        /* Implement getQueryInfo() instead */
        throw new MWException("Bug in a QueryPage: doesn't implement getQueryInfo() nor "
            . "getQuery() properly");
    }

    /**
     * Subclasses return an array of fields to order by here. Don't append
     * DESC to the field names, that'll be done automatically if
     * sortDescending() returns true.
     * @return array
     * @since 1.18
     */
    public function getOrderFields()
    {
        return [ 'value' ];
    }

    /**
     * Does this query return timestamps rather than integers in its
     * 'value' field? If true, this class will convert 'value' to a
     * UNIX timestamp for caching.
     * NOTE: formatRow() may get timestamps in TS_MW (mysql), TS_DB (pgsql)
     *       or TS_UNIX (querycache) format, so be sure to always run them
     *       through wfTimestamp()
     * @return bool
     * @since 1.18
     */
    public function usesTimestamps()
    {
        return false;
    }

    /**
     * Override to sort by increasing values
     *
     * @return bool
     */
    public function sortDescending()
    {
        return true;
    }

    /**
     * Is this query expensive (for some definition of expensive)? Then we
     * don't let it run in miser mode. $wgDisableQueryPages causes all query
     * pages to be declared expensive. Some query pages are always expensive.
     *
     * @return bool
     */
    public function isExpensive()
    {
        return $this->getConfig()->get('DisableQueryPages');
    }

    /**
     * Is the output of this query cacheable? Non-cacheable expensive pages
     * will be disabled in miser mode and will not have their results written
     * to the querycache table.
     * @return bool
     * @since 1.18
     */
    public function isCacheable()
    {
        return true;
    }

    /**
     * Whether or not the output of the page in question is retrieved from
     * the database cache.
     *
     * @return bool
     */
    public function isCached()
    {
        return $this->isExpensive() && $this->getConfig()->get('MiserMode');
    }

    /**
     * Sometime we don't want to build rss / atom feeds.
     *
     * @return bool
     */
    public function isSyndicated()
    {
        return true;
    }

    /**
     * Formats the results of the query for display. The skin is the current
     * skin; you can use it for making links. The result is a single row of
     * result data. You should be able to grab SQL results off of it.
     * If the function returns false, the line output will be skipped.
     * @param Skin $skin
     * @param object $result Result row
     * @return string|bool String or false to skip
     */
    abstract public function formatResult($skin, $result);

    /**
     * The content returned by this function will be output before any result
     *
     * @return string
     */
    public function getPageHeader()
    {
        return '';
    }

    /**
     * Outputs some kind of an informative message (via OutputPage) to let the
     * user know that the query returned nothing and thus there's nothing to
     * show.
     *
     * @since 1.26
     */
    protected function showEmptyText()
    {
        $this->getOutput()->addWikiMsg('specialpage-empty');
    }

    /**
     * If using extra form wheely-dealies, return a set of parameters here
     * as an associative array. They will be encoded and added to the paging
     * links (prev/next/lengths).
     *
     * @return array
     */
    public function linkParameters()
    {
        return [];
    }

    /**
     * Some special pages (for example SpecialListusers used to) might not return the
     * current object formatted, but return the previous one instead.
     * Setting this to return true will ensure formatResult() is called
     * one more time to make sure that the very last result is formatted
     * as well.
     *
     * @deprecated since 1.27
     *
     * @return bool
     */
    public function tryLastResult()
    {
        return false;
    }

    /**
     * Clear the cache and save new results
     *
     * @param int|bool $limit Limit for SQL statement
     * @param bool $ignoreErrors Whether to ignore database errors
     * @throws DBError|Exception
     * @return bool|int
     */
    public function recache($limit, $ignoreErrors = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a DB connection to be used for slow recache queries
     * @return IDatabase
     */
    public function getRecacheDB()
    {
        return wfGetDB(DB_REPLICA, [ $this->getName(), 'QueryPage::recache', 'vslow' ]);
    }

    /**
     * Run the query and return the result
     * @param int|bool $limit Numerical limit or false for no limit
     * @param int|bool $offset Numerical offset or false for no offset
     * @return ResultWrapper
     * @since 1.18
     */
    public function reallyDoQuery($limit, $offset = false)
    {
        $fname = get_class($this) . "::reallyDoQuery";
        $dbr = $this->getRecacheDB();
        $query = $this->getQueryInfo();
        $order = $this->getOrderFields();

        if ($this->sortDescending()) {
            foreach ($order as &$field) {
                $field .= ' DESC';
            }
        }

        if (is_array($query)) {
            $tables = isset($query['tables']) ? (array)$query['tables'] : [];
            $fields = isset($query['fields']) ? (array)$query['fields'] : [];
            $conds = isset($query['conds']) ? (array)$query['conds'] : [];
            $options = isset($query['options']) ? (array)$query['options'] : [];
            $join_conds = isset($query['join_conds']) ? (array)$query['join_conds'] : [];

            if (count($order)) {
                $options['ORDER BY'] = $order;
            }

            if ($limit !== false) {
                $options['LIMIT'] = intval($limit);
            }

            if ($offset !== false) {
                $options['OFFSET'] = intval($offset);
            }

            $res = $dbr->select(
                $tables,
                $fields,
                $conds,
                $fname,
                $options,
                $join_conds
            );
        } else {
            // Old-fashioned raw SQL style, deprecated
            $sql = $this->getSQL();
            $sql .= ' ORDER BY ' . implode(', ', $order);
            $sql = $dbr->limitResult($sql, $limit, $offset);
            $res = $dbr->query($sql, $fname);
        }

        return $res;
    }

    /**
     * Somewhat deprecated, you probably want to be using execute()
     * @param int|bool $offset
     * @param int|bool $limit
     * @return ResultWrapper
     */
    public function doQuery($offset = false, $limit = false)
    {
        if ($this->isCached() && $this->isCacheable()) {
            return $this->fetchFromCache($limit, $offset);
        } else {
            return $this->reallyDoQuery($limit, $offset);
        }
    }

    /**
     * Fetch the query results from the query cache
     * @param int|bool $limit Numerical limit or false for no limit
     * @param int|bool $offset Numerical offset or false for no offset
     * @return ResultWrapper
     * @since 1.18
     */
    public function fetchFromCache($limit, $offset = false)
    {
        $dbr = wfGetDB(DB_REPLICA);
        $options = [];
        if ($limit !== false) {
            $options['LIMIT'] = intval($limit);
        }
        if ($offset !== false) {
            $options['OFFSET'] = intval($offset);
        }
        if ($this->sortDescending()) {
            $options['ORDER BY'] = 'qc_value DESC';
        } else {
            $options['ORDER BY'] = 'qc_value ASC';
        }
        return $dbr->select(
            'querycache',
            [ 'qc_type',
                'namespace' => 'qc_namespace',
                'title' => 'qc_title',
                'value' => 'qc_value' ],
            [ 'qc_type' => $this->getName() ],
            __METHOD__,
            $options
        );
    }

    public function getCachedTimestamp()
    {
        if (is_null($this->cachedTimestamp)) {
            $dbr = wfGetDB(DB_REPLICA);
            $fname = get_class($this) . '::getCachedTimestamp';
            $this->cachedTimestamp = $dbr->selectField(
                'querycache_info',
                'qci_timestamp',
                [ 'qci_type' => $this->getName() ],
                $fname
            );
        }
        return $this->cachedTimestamp;
    }

    /**
     * Returns limit and offset, as returned by $this->getRequest()->getLimitOffset().
     * Subclasses may override this to further restrict or modify limit and offset.
     *
     * @note Restricts the offset parameter, as most query pages have inefficient paging
     *
     * Its generally expected that the returned limit will not be 0, and the returned
     * offset will be less than the max results.
     *
     * @since 1.26
     * @return int[] list( $limit, $offset )
     */
    protected function getLimitOffset()
    {
        list($limit, $offset) = $this->getRequest()->getLimitOffset();
        if ($this->getConfig()->get('MiserMode')) {
            $maxResults = $this->getMaxResults();
            // Can't display more than max results on a page
            $limit = min($limit, $maxResults);
            // Can't skip over more than the end of $maxResults
            $offset = min($offset, $maxResults + 1);
        }
        return [ $limit, $offset ];
    }

    /**
     * What is limit to fetch from DB
     *
     * Used to make it appear the DB stores less results then it actually does
     * @param int $uiLimit Limit from UI
     * @param int $uiOffset Offset from UI
     * @return int Limit to use for DB (not including extra row to see if at end)
     */
    protected function getDBLimit($uiLimit, $uiOffset)
    {
        $maxResults = $this->getMaxResults();
        if ($this->getConfig()->get('MiserMode')) {
            $limit = min($uiLimit + 1, $maxResults - $uiOffset);
            return max($limit, 0);
        } else {
            return $uiLimit + 1;
        }
    }

    /**
     * Get max number of results we can return in miser mode.
     *
     * Most QueryPage subclasses use inefficient paging, so limit the max amount we return
     * This matters for uncached query pages that might otherwise accept an offset of 3 million
     *
     * @since 1.27
     * @return int
     */
    protected function getMaxResults()
    {
        // Max of 10000, unless we store more than 10000 in query cache.
        return max($this->getConfig()->get('QueryCacheLimit'), 10000);
    }

    /**
     * This is the actual workhorse. It does everything needed to make a
     * real, honest-to-gosh query page.
     * @param string $par
     */
    public function execute($par)
    {
        $user = $this->getUser();
        if (!$this->userCanExecute($user)) {
            $this->displayRestrictionError();
            return;
        }

        $this->setHeaders();
        $this->outputHeader();

        $out = $this->getOutput();

        if ($this->isCached() && !$this->isCacheable()) {
            $out->addWikiMsg('querypage-disabled');
            return;
        }

        $out->setSyndicated($this->isSyndicated());

        if ($this->limit == 0 && $this->offset == 0) {
            list($this->limit, $this->offset) = $this->getLimitOffset();
        }
        $dbLimit = $this->getDBLimit($this->limit, $this->offset);
        // @todo Use doQuery()
        if (!$this->isCached()) {
            # select one extra row for navigation
            $res = $this->reallyDoQuery($dbLimit, $this->offset);
        } else {
            # Get the cached result, select one extra row for navigation
            $res = $this->fetchFromCache($dbLimit, $this->offset);
            if (!$this->listoutput) {

                # Fetch the timestamp of this update
                $ts = $this->getCachedTimestamp();
                $lang = $this->getLanguage();
                $maxResults = $lang->formatNum($this->getConfig()->get('QueryCacheLimit'));

                if ($ts) {
                    $updated = $lang->userTimeAndDate($ts, $user);
                    $updateddate = $lang->userDate($ts, $user);
                    $updatedtime = $lang->userTime($ts, $user);
                    $out->addMeta('Data-Cache-Time', $ts);
                    $out->addJsConfigVars('dataCacheTime', $ts);
                    $out->addWikiMsg('perfcachedts', $updated, $updateddate, $updatedtime, $maxResults);
                } else {
                    $out->addWikiMsg('perfcached', $maxResults);
                }

                # If updates on this page have been disabled, let the user know
                # that the data set won't be refreshed for now
                if (is_array($this->getConfig()->get('DisableQueryPageUpdate'))
                    && in_array($this->getName(), $this->getConfig()->get('DisableQueryPageUpdate'))
                ) {
                    $out->wrapWikiMsg(
                        "<div class=\"mw-querypage-no-updates\">\n$1\n</div>",
                        'querypage-no-updates'
                    );
                }
            }
        }

        $this->numRows = $res->numRows();

        $dbr = $this->getRecacheDB();
        $this->preprocessResults($dbr, $res);

        $out->addHTML(Xml::openElement('div', [ 'class' => 'mw-spcontent' ]));

        # Top header and navigation
        if ($this->shownavigation) {
            $out->addHTML($this->getPageHeader());
            if ($this->numRows > 0) {
                $out->addHTML($this->msg('showingresultsinrange')->numParams(
                    min($this->numRows, $this->limit), # do not show the one extra row, if exist
                    $this->offset + 1,
                    (min($this->numRows, $this->limit) + $this->offset)
                )->parseAsBlock());
                # Disable the "next" link when we reach the end
                $miserMaxResults = $this->getConfig()->get('MiserMode')
                    && ($this->offset + $this->limit >= $this->getMaxResults());
                $atEnd = ($this->numRows <= $this->limit) || $miserMaxResults;
                $paging = $this->getLanguage()->viewPrevNext(
                    $this->getPageTitle($par),
                    $this->offset,
                    $this->limit,
                    $this->linkParameters(),
                    $atEnd
                );
                $out->addHTML('<p>' . $paging . '</p>');
            } else {
                # No results to show, so don't bother with "showing X of Y" etc.
                # -- just let the user know and give up now
                $this->showEmptyText();
                $out->addHTML(Xml::closeElement('div'));
                return;
            }
        }

        # The actual results; specialist subclasses will want to handle this
        # with more than a straight list, so we hand them the info, plus
        # an OutputPage, and let them get on with it
        $this->outputResults(
            $out,
            $this->getSkin(),
            $dbr, # Should use a ResultWrapper for this
            $res,
            min($this->numRows, $this->limit), # do not format the one extra row, if exist
            $this->offset
        );

        # Repeat the paging links at the bottom
        if ($this->shownavigation) {
            $out->addHTML('<p>' . $paging . '</p>');
        }

        $out->addHTML(Xml::closeElement('div'));
    }

    /**
     * Format and output report results using the given information plus
     * OutputPage
     *
     * @param OutputPage $out OutputPage to print to
     * @param Skin $skin User skin to use
     * @param IDatabase $dbr Database (read) connection to use
     * @param ResultWrapper $res Result pointer
     * @param int $num Number of available result rows
     * @param int $offset Paging offset
     */
    protected function outputResults($out, $skin, $dbr, $res, $num, $offset)
    {
        global $wgContLang;

        if ($num > 0) {
            $html = [];
            if (!$this->listoutput) {
                $html[] = $this->openList($offset);
            }

            # $res might contain the whole 1,000 rows, so we read up to
            # $num [should update this to use a Pager]
            // @codingStandardsIgnoreStart Generic.CodeAnalysis.ForLoopWithTestFunctionCall.NotAllowed
            for ($i = 0; $i < $num && $row = $res->fetchObject(); $i++) {
                // @codingStandardsIgnoreEnd
                $line = $this->formatResult($skin, $row);
                if ($line) {
                    $html[] = $this->listoutput
                        ? $line
                        : "<li>{$line}</li>\n";
                }
            }

            # Flush the final result
            if ($this->tryLastResult()) {
                $row = null;
                $line = $this->formatResult($skin, $row);
                if ($line) {
                    $html[] = $this->listoutput
                        ? $line
                        : "<li>{$line}</li>\n";
                }
            }

            if (!$this->listoutput) {
                $html[] = $this->closeList();
            }

            $html = $this->listoutput
                ? $wgContLang->listToText($html)
                : implode('', $html);

            $out->addHTML($html);
        }
    }

    /**
     * @param int $offset
     * @return string
     */
    public function openList($offset)
    {
        return "\n<ol start='" . ($offset + 1) . "' class='special'>\n";
    }

    /**
     * @return string
     */
    public function closeList()
    {
        return "</ol>\n";
    }

    /**
     * Do any necessary preprocessing of the result object.
     * @param IDatabase $db
     * @param ResultWrapper $res
     */
    public function preprocessResults($db, $res)
    {
    }

    /**
     * Similar to above, but packaging in a syndicated feed instead of a web page
     * @param string $class
     * @param int $limit
     * @return bool
     */
    public function doFeed($class = '', $limit = 50)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Override for custom handling. If the titles/links are ok, just do
     * feedItemDesc()
     * @param object $row
     * @return FeedItem|null
     */
    public function feedResult($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function feedItemDesc($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function feedItemAuthor($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function feedTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function feedDesc()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function feedUrl()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
