<?php

namespace Elastica\QueryBuilder\DSL;

use Elastica\Exception\NotImplementedException;
use Elastica\QueryBuilder\DSL;
use Elastica\Suggest\Completion;
use Elastica\Suggest\Phrase;
use Elastica\Suggest\Term;

/**
 * elasticsearch suggesters DSL.
 *
 * @author Manuel Andreo Garcia <andreo.garcia@googlemail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters.html
 */
class Suggest implements DSL
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
     * term suggester.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters-term.html
     *
     * @param $name
     * @param $field
     *
     * @return Term
     */
    public function term($name, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * phrase suggester.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters-phrase.html
     *
     * @param $name
     * @param $field
     *
     * @return Phrase
     */
    public function phrase($name, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * completion suggester.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters-completion.html
     *
     * @param string $name
     * @param string $field
     *
     * @return Completion
     */
    public function completion($name, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * context suggester.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/suggester-context.html
     */
    public function context()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
