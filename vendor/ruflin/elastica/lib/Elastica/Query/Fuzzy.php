<?php

namespace Elastica\Query;

use Elastica\Exception\InvalidException;

/**
 * Fuzzy query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-fuzzy-query.html
 */
class Fuzzy extends AbstractQuery
{
    /**
     * Construct a fuzzy query.
     *
     * @param string $fieldName Field name
     * @param string $value     String to search for
     */
    public function __construct($fieldName = null, $value = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field for fuzzy query.
     *
     * @param string $fieldName Field name
     * @param string $value     String to search for
     *
     * @return $this
     */
    public function setField($fieldName, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set optional parameters on the existing query.
     *
     * @param string $param option name
     * @param mixed  $value Value of the parameter
     *
     * @return $this
     */
    public function setFieldOption($param, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Deprecated method of setting a field.
     *
     * @deprecated Use setField and setFieldOption instead. This method will be removed in further Elastica releases
     *
     * @param $fieldName
     * @param $args
     *
     * @return $this
     */
    public function addField($fieldName, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
