<?php

namespace Elastica\Suggest;

/**
 * Completion suggester.
 *
 * @author Igor Denisenko <im.denisenko@yahoo.com>
 *
 * @link   https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters-completion.html
 */
class Completion extends AbstractSuggest
{
    /**
     * Set fuzzy parameter.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters-completion.html#fuzzy
     *
     * @param array $fuzzy
     *
     * @return $this
     */
    public function setFuzzy(array $fuzzy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
