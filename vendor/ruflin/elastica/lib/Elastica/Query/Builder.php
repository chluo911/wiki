<?php

namespace Elastica\Query;

use Elastica\Exception\InvalidException;
use Elastica\Exception\JSONParseException;
use Elastica\JSON;

trigger_error('This builder is deprecated and will be removed in further Elastica releases. Use new Elastica\QueryBuilder instead.', E_USER_DEPRECATED);

/**
 * Query Builder.
 *
 * @author Chris Gedrim <chris@gedr.im>
 *
 * @link https://www.elastic.co/
 * @deprecated This builder is deprecated and will be removed in further Elastica releases. Use new Elastica\QueryBuilder instead.
 **/
class Builder extends AbstractQuery
{
    /**
     * Query string.
     *
     * @var string
     */
    private $_string = '{';

    /**
     * Factory method.
     *
     * @param string $string JSON encoded string to use as query.
     *
     * @return self
     */
    public static function factory($string = null)
    {
        return new self($string);
    }

    /**
     * Constructor.
     *
     * @param string $string JSON encoded string to use as query.
     */
    public function __construct($string = null)
    {
        if (!$string == null) {
            $this->_string .= substr($string, 1, -1);
        }
    }

    /**
     * Output the query string.
     *
     * @return string
     */
    public function __toString()
    {
        return rtrim($this->_string, ',').'}';
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        try {
            return JSON::parse($input = $this->__toString());
        } catch (JSONParseException $e) {
            throw new InvalidException(sprintf(
                'The produced query is not a valid json string : "%s"',
                $input
            ));
        }
    }

    /**
     * Allow wildcards (*, ?) as the first character in a query.
     *
     * @param bool $bool Defaults to true.
     *
     * @return $this
     */
    public function allowLeadingWildcard($bool = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enable best effort analysis of wildcard terms.
     *
     * @param bool $bool Defaults to true.
     *
     * @return $this
     */
    public function analyzeWildcard($bool = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the analyzer name used to analyze the query string.
     *
     * @param string $analyzer Analyzer to use.
     *
     * @return $this
     */
    public function analyzer($analyzer)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Autogenerate phrase queries.
     *
     * @param bool $bool Defaults to true.
     *
     * @return $this
     */
    public function autoGeneratePhraseQueries($bool = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Bool Query.
     *
     * A query that matches documents matching boolean combinations of other queries.
     *
     * The bool query maps to Lucene BooleanQuery.
     *
     * It is built using one or more boolean clauses, each clause with a typed
     * occurrence.
     *
     * The occurrence types are: must, should, must_not.
     *
     * @return $this
     */
    public function bool()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'bool' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function boolClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the boost value of the query.
     *
     * @param float $boost Defaults to 1.0.
     *
     * @return $this
     */
    public function boost($boost = 1.0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a previously opened brace.
     *
     * @return $this
     */
    public function close()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Constant Score Query.
     *
     * A query that wraps a filter or another query and simply returns a constant
     * score equal to the query boost for every document in the filter.
     *
     * Maps to Lucene ConstantScoreQuery.
     *
     * @return $this
     */
    public function constantScore()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'constant_score' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function constantScoreClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The default field for query terms if no prefix field is specified.
     *
     * @param string $field Defaults to _all.
     *
     * @return $this
     */
    public function defaultField($field = '_all')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The default operator used if no explicit operator is specified.
     *
     * For example, with a default operator of OR, the query "capital of Hungary"
     * is translated to "capital OR of OR Hungary", and with default operator of
     * AND, the same query is translated to "capital AND of AND Hungary".
     *
     * @param string $operator Defaults to OR.
     *
     * @return $this
     */
    public function defaultOperator($operator = 'OR')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Dis Max Query.
     *
     * A query that generates the union of documents produced by its subqueries,
     * and that scores each document with the maximum score for that document as
     * produced by any subquery, plus a tie breaking increment for any additional
     * matching subqueries.
     *
     * @return $this
     */
    public function disMax()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'dis_max' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function disMaxClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enable position increments in result queries.
     *
     * @param bool $bool Defaults to true.
     *
     * @return $this
     */
    public function enablePositionIncrements($bool = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enables explanation for each hit on how its score was computed.
     *
     * @param bool $value Turn on / off explain.
     *
     * @return $this
     */
    public function explain($value = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a specific field / value entry.
     *
     * @param string $name  Field to add.
     * @param mixed  $value Value to set.
     *
     * @return $this
     */
    public function field($name, $value)
    {
        if (is_bool($value)) {
            $value = '"'.var_export($value, true).'"';
        } elseif (is_array($value)) {
            $value = '["'.implode('","', $value).'"]';
        } else {
            $value = '"'.$value.'"';
        }

        $this->_string .= '"'.$name.'":'.$value.',';

        return $this;
    }

    /**
     * Close a field block.
     *
     * Alias of close() for ease of reading in source.
     * Passed parameters will be ignored, however they can be useful in source for
     * seeing which field is being closed.
     *
     * Builder::factory()
     *     ->query()
     *     ->range()
     *     ->fieldOpen('created')
     *     ->gte('2011-07-18 00:00:00')
     *     ->lt('2011-07-19 00:00:00')
     *     ->fieldClose('created')
     *     ->rangeClose()
     *     ->queryClose();
     *
     * @return $this
     */
    public function fieldClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Open a node for the specified name.
     *
     * @param string $name Field name.
     *
     * @return $this
     */
    public function fieldOpen($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Explicitly define fields to return.
     *
     * @param array $fields Array of fields to return.
     *
     * @return $this
     */
    public function fields(array $fields)
    {
        $this->_string .= '"fields":[';

        foreach ($fields as $field) {
            $this->_string .= '"'.$field.'",';
        }

        $this->_string = rtrim($this->_string, ',').'],';

        return $this;
    }

    /**
     * Open a 'filter' block.
     *
     * @return $this
     */
    public function filter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a filter block.
     *
     * @return $this
     */
    public function filterClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *  Query.
     *
     * @return $this
     */
    public function filteredQuery()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'filtered_query' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function filteredQueryClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the from parameter (offset).
     *
     * @param int $value Result number to start from.
     *
     * @return $this
     */
    public function from($value = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the minimum similarity for fuzzy queries.
     *
     * @param float $value Defaults to 0.5.
     *
     * @return $this
     */
    public function fuzzyMinSim($value = 0.5)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the prefix length for fuzzy queries.
     *
     * @param int $value Defaults to 0.
     *
     * @return $this
     */
    public function fuzzyPrefixLength($value = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a greater than (gt) clause.
     *
     * Used in range blocks.
     *
     * @param mixed $value Value to be gt.
     *
     * @return $this
     */
    public function gt($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a greater than or equal to (gte) clause.
     *
     * Used in range blocks.
     *
     * @param mixed $value Value to be gte to.
     *
     * @return $this
     */
    public function gte($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Automatically lower-case terms of wildcard, prefix, fuzzy, and range queries.
     *
     * @param bool $bool Defaults to true.
     *
     * @return $this
     */
    public function lowercaseExpandedTerms($bool = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a less than (lt) clause.
     *
     * Used in range blocks.
     *
     * @param mixed $value Value to be lt.
     *
     * @return $this
     */
    public function lt($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a less than or equal to (lte) clause.
     *
     * Used in range blocks.
     *
     * @param mixed $value Value to be lte to.
     *
     * @return $this
     */
    public function lte($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Match All Query.
     *
     * A query that matches all documents.
     *
     * Maps to Lucene MatchAllDocsQuery.
     *
     * @param float $boost Boost to use.
     *
     * @return $this
     */
    public function matchAll($boost = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The minimum number of should clauses to match.
     *
     * @param int $minimum Minimum number that should match.
     *
     * @return $this
     */
    public function minimumNumberShouldMatch($minimum)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The clause (query) must appear in matching documents.
     *
     * @return $this
     */
    public function must()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'must' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function mustClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The clause (query) must not appear in the matching documents.
     *
     * Note that it is not possible to search on documents that only consists of
     * a must_not clauses.
     *
     * @return $this
     */
    public function mustNot()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'must_not' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function mustNotClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add an opening brace.
     *
     * @return $this
     */
    public function open()
    {
        $this->_string .= '{';

        return $this;
    }

    /**
     * Sets the default slop for phrases.
     *
     * If zero, then exact phrase matches are required.
     *
     * @param int $value Defaults to 0.
     *
     * @return $this
     */
    public function phraseSlop($value = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *  Query.
     *
     * @return $this
     */
    public function prefix()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'prefix' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function prefixClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Queries to run within a dis_max query.
     *
     * @param array $queries Array of queries.
     *
     * @return $this
     */
    public function queries(array $queries)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Open a query block.
     *
     * @return $this
     */
    public function query()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a query block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function queryClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Query String Query.
     *
     * A query that uses a query parser in order to parse its content
     *
     * @return $this
     */
    public function queryString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'query_string' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function queryStringClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Open a range block.
     *
     * @return $this
     */
    public function range()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a range block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function rangeClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The clause (query) should appear in the matching document.
     *
     * A boolean query with no must clauses, one or more should clauses must
     * match a document.
     *
     * @return $this
     */
    public function should()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'should' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function shouldClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the size parameter (number of records to return).
     *
     * @param int $value Number of records to return.
     *
     * @return $this
     */
    public function size($value = 10)
    {
        return $this->field('size', $value);
    }

    /**
     * Allows to add one or more sort on specific fields.
     *
     * @return $this
     */
    public function sort()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a sort block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function sortClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a field to sort on.
     *
     * @param string $name    Field to sort.
     * @param bool   $reverse Reverse direction.
     *
     * @return $this
     */
    public function sortField($name, $reverse = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sort on multiple fields.
     *
     * @param array $fields Associative array where the keys are field names to sort on, and the
     *                      values are the sort order: "asc" or "desc"
     *
     * @return $this
     */
    public function sortFields(array $fields)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Term Query.
     *
     * Matches documents that have fields that contain a term (not analyzed).
     *
     * The term query maps to Lucene TermQuery.
     *
     * @return $this
     */
    public function term()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'term' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function termClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Open a 'text_phrase' block.
     *
     * @return $this
     */
    public function textPhrase()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'text_phrase' block.
     *
     * @return $this
     */
    public function textPhraseClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * When using dis_max, the disjunction max tie breaker.
     *
     * @param float $multiplier Multiplier to use.
     *
     * @return $this
     */
    public function tieBreakerMultiplier($multiplier)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *  Query.
     *
     * @return $this
     */
    public function wildcard()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Close a 'wildcard' block.
     *
     * Alias of close() for ease of reading in source.
     *
     * @return $this
     */
    public function wildcardClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
