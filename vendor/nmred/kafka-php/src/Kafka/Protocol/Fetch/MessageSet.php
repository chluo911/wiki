<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker: */
// +---------------------------------------------------------------------------
// | SWAN [ $_SWANBR_SLOGAN_$ ]
// +---------------------------------------------------------------------------
// | Copyright $_SWANBR_COPYRIGHT_$
// +---------------------------------------------------------------------------
// | Version  $_SWANBR_VERSION_$
// +---------------------------------------------------------------------------
// | Licensed ( $_SWANBR_LICENSED_URL_$ )
// +---------------------------------------------------------------------------
// | $_SWANBR_WEB_DOMAIN_$
// +---------------------------------------------------------------------------

namespace Kafka\Protocol\Fetch;

use \Kafka\Protocol\Decoder;

/**
+------------------------------------------------------------------------------
* Kafka protocol since Kafka v0.8
+------------------------------------------------------------------------------
*
* @package
* @version $_SWANBR_VERSION_$
* @copyright Copyleft
* @author $_SWANBR_AUTHOR_$
+------------------------------------------------------------------------------
*/

class MessageSet implements \Iterator
{
    // {{{ members

    /**
     * kafka socket object
     *
     * @var mixed
     * @access private
     */
    private $stream = null;

    /**
     * messageSet size
     *
     * @var float
     * @access private
     */
    private $messageSetSize = 0;

    /**
     * validByteCount
     *
     * @var float
     * @access private
     */
    private $validByteCount = 0;

    /**
     * messageSet offset
     *
     * @var float
     * @access private
     */
    private $offset = 0;

    /**
     * valid
     *
     * @var mixed
     * @access private
     */
    private $valid = false;

    /**
     * partition object
     *
     * @var \Kafka\Protocol\Fetch\Partition
     * @access private
     */
    private $partition = null;

    /**
     * request fetch context
     *
     * @var array
     */
    private $context = array();

    /**
     * @var Message
     */
    private $current = null;

    // }}}
    // {{{ functions
    // {{{ public function __construct()

    /**
     * __construct
     *
     * @param Partition $partition
     * @param array $context
     * @access public
     */
    public function __construct(\Kafka\Protocol\Fetch\Partition $partition, $context = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function current()

    /**
     * current
     *
     * @access public
     * @return Message
     */
    public function current()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function key()

    /**
     * key
     *
     * @access public
     * @return float
     */
    public function key()
    {
        return $this->validByteCount;
    }

    // }}}
    // {{{ public function rewind()

    /**
     * implements Iterator function
     *
     * @access public
     * @return integer
     */
    public function rewind()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function valid()

    /**
     * implements Iterator function
     *
     * @access public
     * @return integer
     */
    public function valid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function next()

    /**
     * implements Iterator function
     *
     * @access public
     * @return void
     */
    public function next()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ protected function getMessageSetSize()

    /**
     * get message set size
     *
     * @access protected
     * @return integer
     */
    protected function getMessageSetSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function loadNextMessage()

    /**
     * load next message
     *
     * @access public
     * @return bool
     */
    public function loadNextMessage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function messageOffset()

    /**
     * current message offset in producer
     *
     * @return float
     */
    public function messageOffset()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // }}}
}
