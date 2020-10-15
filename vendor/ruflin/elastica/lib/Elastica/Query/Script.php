<?php

namespace Elastica\Query;

use Elastica;

/**
 * Script query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-script-query.html
 */
class Script extends AbstractQuery
{
    /**
     * Query object.
     *
     * @var array|AbstractQuery
     */
    protected $_query = null;

    /**
     * Construct script query.
     *
     * @param array|string|\Elastica\Script\AbstractScript $script OPTIONAL Script
     */
    public function __construct($script = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets script object.
     *
     * @param \Elastica\Script\Script|string|array $script
     *
     * @return $this
     */
    public function setScript($script)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $array = parent::toArray();

        if (isset($array['script'])) {
            $array['script'] = $array['script']['script'];
        }

        return $array;
    }
}
