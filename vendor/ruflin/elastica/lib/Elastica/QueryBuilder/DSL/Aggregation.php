<?php

namespace Elastica\QueryBuilder\DSL;

use Elastica\Aggregation\Avg;
use Elastica\Aggregation\Cardinality;
use Elastica\Aggregation\DateHistogram;
use Elastica\Aggregation\DateRange;
use Elastica\Aggregation\ExtendedStats;
use Elastica\Aggregation\Filter as FilterAggregation;
use Elastica\Aggregation\Filters;
use Elastica\Aggregation\GeoDistance;
use Elastica\Aggregation\GeohashGrid;
use Elastica\Aggregation\GlobalAggregation;
use Elastica\Aggregation\Histogram;
use Elastica\Aggregation\IpRange;
use Elastica\Aggregation\Max;
use Elastica\Aggregation\Min;
use Elastica\Aggregation\Missing;
use Elastica\Aggregation\Nested;
use Elastica\Aggregation\Percentiles;
use Elastica\Aggregation\Range;
use Elastica\Aggregation\ReverseNested;
use Elastica\Aggregation\ScriptedMetric;
use Elastica\Aggregation\SignificantTerms;
use Elastica\Aggregation\Stats;
use Elastica\Aggregation\Sum;
use Elastica\Aggregation\Terms;
use Elastica\Aggregation\TopHits;
use Elastica\Aggregation\ValueCount;
use Elastica\Exception\NotImplementedException;
use Elastica\Filter\AbstractFilter;
use Elastica\QueryBuilder\DSL;

/**
 * elasticsearch aggregation DSL.
 *
 * @author Manuel Andreo Garcia <andreo.garcia@googlemail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations.html
 */
class Aggregation implements DSL
{
    /**
     * must return type for QueryBuilder usage.
     *
     * @return string
     */
    public function getType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * min aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-min-aggregation.html
     *
     * @param string $name
     *
     * @return Min
     */
    public function min($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * max aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-max-aggregation.html
     *
     * @param string $name
     *
     * @return Max
     */
    public function max($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * sum aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-sum-aggregation.html
     *
     * @param string $name
     *
     * @return Sum
     */
    public function sum($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * avg aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-avg-aggregation.html
     *
     * @param string $name
     *
     * @return Avg
     */
    public function avg($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * stats aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-stats-aggregation.html
     *
     * @param string $name
     *
     * @return Stats
     */
    public function stats($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * extended stats aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-extendedstats-aggregation.html
     *
     * @param string $name
     *
     * @return ExtendedStats
     */
    public function extended_stats($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * value count aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-valuecount-aggregation.html
     *
     * @param string $name
     * @param string $field
     *
     * @return ValueCount
     */
    public function value_count($name, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * percentiles aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-percentile-aggregation.html
     *
     * @param string $name  the name of this aggregation
     * @param string $field the field on which to perform this aggregation
     *
     * @return Percentiles
     */
    public function percentiles($name, $field = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * percentile ranks aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-percentile-rank-aggregation.html
     *
     * @param string $name
     */
    public function percentile_ranks($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * cardinality aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-cardinality-aggregation.html
     *
     * @param string $name
     *
     * @return Cardinality
     */
    public function cardinality($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * geo bounds aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-geobounds-aggregation.html
     *
     * @param string $name
     */
    public function geo_bounds($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * top hits aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-top-hits-aggregation.html
     *
     * @param string $name
     *
     * @return TopHits
     */
    public function top_hits($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * scripted metric aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-scripted-metric-aggregation.html
     *
     * @param string      $name
     * @param string|null $initScript
     * @param string|null $mapScript
     * @param string|null $combineScript
     * @param string|null $reduceScript
     *
     * @return ScriptedMetric
     */
    public function scripted_metric($name, $initScript = null, $mapScript = null, $combineScript = null, $reduceScript = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * global aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-global-aggregation.html
     *
     * @param string $name
     *
     * @return GlobalAggregation
     */
    public function global_agg($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * filter aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-filter-aggregation.html
     *
     * @param string         $name
     * @param AbstractFilter $filter
     *
     * @return FilterAggregation
     */
    public function filter($name, $filter = null)
    {
        return new FilterAggregation($name, $filter);
    }

    /**
     * filters aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-filters-aggregation.html
     *
     * @param string $name
     *
     * @return Filters
     */
    public function filters($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * missing aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-missing-aggregation.html
     *
     * @param string $name
     * @param string $field
     *
     * @return Missing
     */
    public function missing($name, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * nested aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-nested-aggregation.html
     *
     * @param string $name
     * @param string $path the nested path for this aggregation
     *
     * @return Nested
     */
    public function nested($name, $path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * reverse nested aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-reverse-nested-aggregation.html
     *
     * @param string $name The name of this aggregation
     * @param string $path Optional path to the nested object for this aggregation. Defaults to the root of the main document.
     *
     * @return ReverseNested
     */
    public function reverse_nested($name, $path = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * children aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-children-aggregation.html
     *
     * @param string $name
     */
    public function children($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * terms aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-terms-aggregation.html
     *
     * @param string $name
     *
     * @return Terms
     */
    public function terms($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * significant terms aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-significantterms-aggregation.html
     *
     * @param string $name
     *
     * @return SignificantTerms
     */
    public function significant_terms($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * range aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-range-aggregation.html
     *
     * @param string $name
     *
     * @return Range
     */
    public function range($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * date range aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-daterange-aggregation.html
     *
     * @param string $name
     *
     * @return DateRange
     */
    public function date_range($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * ipv4 range aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-iprange-aggregation.html
     *
     * @param string $name
     * @param string $field
     *
     * @return IpRange
     */
    public function ipv4_range($name, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * histogram aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-histogram-aggregation.html
     *
     * @param string $name     the name of this aggregation
     * @param string $field    the name of the field on which to perform the aggregation
     * @param int    $interval the interval by which documents will be bucketed
     *
     * @return Histogram
     */
    public function histogram($name, $field, $interval)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * date histogram aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-datehistogram-aggregation.html
     *
     * @param string $name     the name of this aggregation
     * @param string $field    the name of the field on which to perform the aggregation
     * @param int    $interval the interval by which documents will be bucketed
     *
     * @return DateHistogram
     */
    public function date_histogram($name, $field, $interval)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * geo distance aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-geodistance-aggregation.html
     *
     * @param string       $name   the name if this aggregation
     * @param string       $field  the field on which to perform this aggregation
     * @param string|array $origin the point from which distances will be calculated
     *
     * @return GeoDistance
     */
    public function geo_distance($name, $field, $origin)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * geohash grid aggregation.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-geohashgrid-aggregation.html
     *
     * @param string $name  the name of this aggregation
     * @param string $field the field on which to perform this aggregation
     *
     * @return GeohashGrid
     */
    public function geohash_grid($name, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
