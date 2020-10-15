<?php

namespace Elastica;

use Elastica\Exception\QueryBuilderException;
use Elastica\QueryBuilder\DSL;
use Elastica\QueryBuilder\Facade;
use Elastica\QueryBuilder\Version;

/**
 * Query Builder.
 *
 * @author Manuel Andreo Garcia <andreo.garcia@googlemail.com>
 */
class QueryBuilder
{
    /**
     * @var Version
     */
    private $_version;

    /**
     * @var Facade[]
     */
    private $_facades = array();

    /**
     * Constructor.
     *
     * @param Version $version
     */
    public function __construct(Version $version = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns Facade for custom DSL object.
     *
     * @param $dsl
     * @param array $arguments
     *
     * @throws QueryBuilderException
     *
     * @return Facade
     */
    public function __call($dsl, array $arguments)
    {
        if (false === isset($this->_facades[$dsl])) {
            throw new QueryBuilderException('DSL "'.$dsl.'" not supported');
        }

        return $this->_facades[$dsl];
    }

    /**
     * Adds a new DSL object.
     *
     * @param DSL $dsl
     */
    public function addDSL(DSL $dsl)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /*
     * convenience methods
     */

    /**
     * Query DSL.
     *
     * @return DSL\Query
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
     * Filter DSL.
     *
     * @return DSL\Filter
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
     * Aggregation DSL.
     *
     * @return DSL\Aggregation
     */
    public function aggregation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Suggest DSL.
     *
     * @return DSL\Suggest
     */
    public function suggest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
