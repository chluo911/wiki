<?php
/**
 * This class is used for different SQL-based search engines shipped with MediaWiki
 * @ingroup Search
 */
class SqlSearchResultSet extends SearchResultSet
{
    protected $resultSet;
    protected $terms;
    protected $totalHits;

    public function __construct(ResultWrapper $resultSet, $terms, $total = null)
    {
        $this->resultSet = $resultSet;
        $this->terms = $terms;
        $this->totalHits = $total;
    }

    public function termMatches()
    {
        return $this->terms;
    }

    public function numRows()
    {
        if ($this->resultSet === false) {
            return false;
        }

        return $this->resultSet->numRows();
    }

    public function next()
    {
        if ($this->resultSet === false) {
            return false;
        }

        $row = $this->resultSet->fetchObject();
        if ($row === false) {
            return false;
        }

        return SearchResult::newFromTitle(
            Title::makeTitle($row->page_namespace, $row->page_title),
            $this
        );
    }

    public function rewind()
    {
        if ($this->resultSet) {
            $this->resultSet->rewind();
        }
    }

    public function free()
    {
        if ($this->resultSet === false) {
            return false;
        }

        $this->resultSet->free();
    }

    public function getTotalHits()
    {
        if (!is_null($this->totalHits)) {
            return $this->totalHits;
        } else {
            // Special:Search expects a number here.
            return $this->numRows();
        }
    }
}
