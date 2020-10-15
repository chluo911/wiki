<?php

namespace Elastica\Rescore;

use Elastica\Param;

/**
 * Abstract rescore object. Should be extended by all rescorers.
 *
 * @author Jason Hu <mjhu91@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-request-rescore.html
 */
abstract class AbstractRescore extends Param
{
    /**
     * Overridden to return rescore as name.
     *
     * @return string name
     */
    protected function _getBaseName()
    {
        return 'rescore';
    }

    /**
     * Sets window_size.
     *
     * @param int $size
     *
     * @return $this
     */
    public function setWindowSize($size)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
