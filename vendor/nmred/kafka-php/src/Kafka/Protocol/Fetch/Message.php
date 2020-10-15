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

class Message
{
    // {{{ members

    /**
     * crc32 code
     *
     * @var float
     * @access private
     */
    private $crc = 0;

    /**
     * This is a version id used to allow backwards compatible evolution of the
     * message binary format.
     *
     * @var float
     * @access private
     */
    private $magic = 0;

    /**
     * The lowest 2 bits contain the compression codec used for the message. The
     * other bits should be set to 0.
     *
     * @var float
     * @access private
     */
    private $attribute = 0;

    /**
     * message key
     *
     * @var string
     * @access private
     */
    private $key = '';

    /**
     * message value
     *
     * @var string
     * @access private
     */
    private $value = '';

    // }}}
    // {{{ functions
    // {{{ public function __construct()

    /**
     * __construct
     *
     * @param string(raw) $msg
     * @access public
     */
    public function __construct($msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function getMessage()

    /**
     * get message data
     *
     * @access public
     * @return string (raw)
     */
    public function getMessage()
    {
        return $this->value;
    }

    // }}}
    // {{{ public function getMessageKey()

    /**
     * get message key
     *
     * @access public
     * @return string (raw)
     */
    public function getMessageKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function __toString()

    /**
     * __toString
     *
     * @access public
     * @return string (raw)
     */
    public function __toString()
    {
        return $this->value;
    }

    // }}}
    // }}}
}
