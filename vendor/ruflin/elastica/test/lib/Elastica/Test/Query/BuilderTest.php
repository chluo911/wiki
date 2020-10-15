<?php

namespace Elastica\Test\Query;

use Elastica\Query\Builder;
use Elastica\Test\Base as BaseTest;

class BuilderTest extends BaseTest
{
    /**
     * @group unit
     */
    public function testDeprecated()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @covers \Elastica\Query\Builder::factory
     * @covers \Elastica\Query\Builder::__construct
     */
    public function testFactory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getQueryData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @dataProvider getQueryData
     * @covers \Elastica\Query\Builder::__toString
     * @covers \Elastica\Query\Builder::allowLeadingWildcard
     * @covers \Elastica\Query\Builder::analyzeWildcard
     * @covers \Elastica\Query\Builder::analyzer
     * @covers \Elastica\Query\Builder::autoGeneratePhraseQueries
     * @covers \Elastica\Query\Builder::boost
     * @covers \Elastica\Query\Builder::defaultField
     * @covers \Elastica\Query\Builder::defaultOperator
     * @covers \Elastica\Query\Builder::enablePositionIncrements
     * @covers \Elastica\Query\Builder::explain
     * @covers \Elastica\Query\Builder::from
     * @covers \Elastica\Query\Builder::fuzzyMinSim
     * @covers \Elastica\Query\Builder::fuzzyPrefixLength
     * @covers \Elastica\Query\Builder::gt
     * @covers \Elastica\Query\Builder::gte
     * @covers \Elastica\Query\Builder::lowercaseExpandedTerms
     * @covers \Elastica\Query\Builder::lt
     * @covers \Elastica\Query\Builder::lte
     * @covers \Elastica\Query\Builder::minimumNumberShouldMatch
     * @covers \Elastica\Query\Builder::phraseSlop
     * @covers \Elastica\Query\Builder::size
     * @covers \Elastica\Query\Builder::tieBreakerMultiplier
     * @covers \Elastica\Query\Builder::matchAll
     * @covers \Elastica\Query\Builder::fields
     */
    public function testAllowLeadingWildcard($method, $argument, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getQueryTypes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @dataProvider getQueryTypes
     * @covers \Elastica\Query\Builder::fieldClose
     * @covers \Elastica\Query\Builder::close
     * @covers \Elastica\Query\Builder::bool
     * @covers \Elastica\Query\Builder::boolClose
     * @covers \Elastica\Query\Builder::constantScore
     * @covers \Elastica\Query\Builder::constantScoreClose
     * @covers \Elastica\Query\Builder::disMax
     * @covers \Elastica\Query\Builder::disMaxClose
     * @covers \Elastica\Query\Builder::filter
     * @covers \Elastica\Query\Builder::filterClose
     * @covers \Elastica\Query\Builder::filteredQuery
     * @covers \Elastica\Query\Builder::filteredQueryClose
     * @covers \Elastica\Query\Builder::must
     * @covers \Elastica\Query\Builder::mustClose
     * @covers \Elastica\Query\Builder::mustNot
     * @covers \Elastica\Query\Builder::mustNotClose
     * @covers \Elastica\Query\Builder::prefix
     * @covers \Elastica\Query\Builder::prefixClose
     * @covers \Elastica\Query\Builder::query
     * @covers \Elastica\Query\Builder::queryClose
     * @covers \Elastica\Query\Builder::queryString
     * @covers \Elastica\Query\Builder::queryStringClose
     * @covers \Elastica\Query\Builder::range
     * @covers \Elastica\Query\Builder::rangeClose
     * @covers \Elastica\Query\Builder::should
     * @covers \Elastica\Query\Builder::shouldClose
     * @covers \Elastica\Query\Builder::sort
     * @covers \Elastica\Query\Builder::sortClose
     * @covers \Elastica\Query\Builder::term
     * @covers \Elastica\Query\Builder::termClose
     * @covers \Elastica\Query\Builder::textPhrase
     * @covers \Elastica\Query\Builder::textPhraseClose
     * @covers \Elastica\Query\Builder::wildcard
     * @covers \Elastica\Query\Builder::wildcardClose
     */
    public function testQueryTypes($method, $queryType)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @covers \Elastica\Query\Builder::fieldOpen
     * @covers \Elastica\Query\Builder::fieldClose
     * @covers \Elastica\Query\Builder::open
     * @covers \Elastica\Query\Builder::close
     */
    public function testFieldOpenAndClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @covers \Elastica\Query\Builder::sortField
     */
    public function testSortField()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @covers \Elastica\Query\Builder::sortFields
     */
    public function testSortFields()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @covers \Elastica\Query\Builder::queries
     */
    public function testQueries()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getFieldData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @dataProvider getFieldData
     * @covers \Elastica\Query\Builder::field
     */
    public function testField($name, $value, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @expectedException \Elastica\Exception\InvalidException
     * @expectedExceptionMessage The produced query is not a valid json string : "{{}"
     * @covers \Elastica\Query\Builder::toArray
     */
    public function testToArrayWithInvalidData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @covers \Elastica\Query\Builder::toArray
     */
    public function testToArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
