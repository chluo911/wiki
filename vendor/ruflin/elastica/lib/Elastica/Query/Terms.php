<?php

namespace Elastica\Query;

use Elastica\Exception\InvalidException;

/**
 * Terms query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-terms-query.html
 */
class Terms extends AbstractQuery
{
    /**
     * Terms.
     *
     * @var array Terms
     */
    protected $_terms = array();

    /**
     * Params.
     *
     * @var array Params
     */
    protected $_params = array();

    /**
     * Terms key.
     *
     * @var string Terms key
     */
    protected $_key = '';

    /**
     * Construct terms query.
     *
     * @param string $key   OPTIONAL Terms key
     * @param array  $terms OPTIONAL Terms list
     */
    public function __construct($key = '', array $terms = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets key and terms for the query.
     *
     * @param string $key   Terms key
     * @param array  $terms Terms for the query.
     *
     * @return $this
     */
    public function setTerms($key, array $terms)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a single term to the list.
     *
     * @param string $term Term
     *
     * @return $this
     */
    public function addTerm($term)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the minimum matching values.
     *
     * @param int $minimum Minimum value
     *
     * @return $this
     */
    public function setMinimumMatch($minimum)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts the terms object to an array.
     *
     * @see \Elastica\Query\AbstractQuery::toArray()
     *
     * @throws \Elastica\Exception\InvalidException If term key is empty
     *
     * @return array Query array
     */
    public function toArray()
    {
        if (empty($this->_key)) {
            throw new InvalidException('Terms key has to be set');
        }
        $this->setParam($this->_key, $this->_terms);

        return parent::toArray();
    }
}
