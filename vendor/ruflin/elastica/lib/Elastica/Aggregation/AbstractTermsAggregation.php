<?php

namespace Elastica\Aggregation;

/**
 * Class AbstractTermsAggregation.
 */
abstract class AbstractTermsAggregation extends AbstractSimpleAggregation
{
    /**
     * Set the minimum number of documents in which a term must appear in order to be returned in a bucket.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setMinimumDocumentCount($count)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Filter documents to include based on a regular expression.
     *
     * @param string $pattern a regular expression
     * @param string $flags   Java Pattern flags
     *
     * @return $this
     */
    public function setInclude($pattern, $flags = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Filter documents to exclude based on a regular expression.
     *
     * @param string $pattern a regular expression
     * @param string $flags   Java Pattern flags
     *
     * @return $this
     */
    public function setExclude($pattern, $flags = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the amount of terms to be returned.
     *
     * @param int $size The amount of terms to be returned.
     *
     * @return $this
     */
    public function setSize($size)
    {
        return $this->setParam('size', $size);
    }

    /**
     * Sets how many terms the coordinating node will request from each shard.
     *
     * @param int $shard_size The amount of terms to be returned.
     *
     * @return $this
     */
    public function setShardSize($shard_size)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Instruct Elasticsearch to use direct field data or ordinals of the field values to execute this aggregation.
     * The execution hint will be ignored if it is not applicable.
     *
     * @param string $hint map or ordinals
     *
     * @return $this
     */
    public function setExecutionHint($hint)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
