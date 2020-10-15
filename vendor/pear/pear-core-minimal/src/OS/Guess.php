<?php
/**
 * The OS_Guess class
 *
 * PHP versions 4 and 5
 *
 * @category   pear
 * @package    PEAR
 * @author     Stig Bakken <ssb@php.net>
 * @author     Gregory Beaver <cellog@php.net>
 * @copyright  1997-2009 The Authors
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @link       http://pear.php.net/package/PEAR
 * @since      File available since PEAR 0.1
 */

// {{{ uname examples

// php_uname() without args returns the same as 'uname -a', or a PHP-custom
// string for Windows.
// PHP versions prior to 4.3 return the uname of the host where PHP was built,
// as of 4.3 it returns the uname of the host running the PHP code.
//
// PC RedHat Linux 7.1:
// Linux host.example.com 2.4.2-2 #1 Sun Apr 8 20:41:30 EDT 2001 i686 unknown
//
// PC Debian Potato:
// Linux host 2.4.17 #2 SMP Tue Feb 12 15:10:04 CET 2002 i686 unknown
//
// PC FreeBSD 3.3:
// FreeBSD host.example.com 3.3-STABLE FreeBSD 3.3-STABLE #0: Mon Feb 21 00:42:31 CET 2000     root@example.com:/usr/src/sys/compile/CONFIG  i386
//
// PC FreeBSD 4.3:
// FreeBSD host.example.com 4.3-RELEASE FreeBSD 4.3-RELEASE #1: Mon Jun 25 11:19:43 EDT 2001     root@example.com:/usr/src/sys/compile/CONFIG  i386
//
// PC FreeBSD 4.5:
// FreeBSD host.example.com 4.5-STABLE FreeBSD 4.5-STABLE #0: Wed Feb  6 23:59:23 CET 2002     root@example.com:/usr/src/sys/compile/CONFIG  i386
//
// PC FreeBSD 4.5 w/uname from GNU shellutils:
// FreeBSD host.example.com 4.5-STABLE FreeBSD 4.5-STABLE #0: Wed Feb  i386 unknown
//
// HP 9000/712 HP-UX 10:
// HP-UX iq B.10.10 A 9000/712 2008429113 two-user license
//
// HP 9000/712 HP-UX 10 w/uname from GNU shellutils:
// HP-UX host B.10.10 A 9000/712 unknown
//
// IBM RS6000/550 AIX 4.3:
// AIX host 3 4 000003531C00
//
// AIX 4.3 w/uname from GNU shellutils:
// AIX host 3 4 000003531C00 unknown
//
// SGI Onyx IRIX 6.5 w/uname from GNU shellutils:
// IRIX64 host 6.5 01091820 IP19 mips
//
// SGI Onyx IRIX 6.5:
// IRIX64 host 6.5 01091820 IP19
//
// SparcStation 20 Solaris 8 w/uname from GNU shellutils:
// SunOS host.example.com 5.8 Generic_108528-12 sun4m sparc
//
// SparcStation 20 Solaris 8:
// SunOS host.example.com 5.8 Generic_108528-12 sun4m sparc SUNW,SPARCstation-20
//
// Mac OS X (Darwin)
// Darwin home-eden.local 7.5.0 Darwin Kernel Version 7.5.0: Thu Aug  5 19:26:16 PDT 2004; root:xnu/xnu-517.7.21.obj~3/RELEASE_PPC  Power Macintosh
//
// Mac OS X early versions
//

// }}}

/* TODO:
 * - define endianness, to allow matchSignature("bigend") etc.
 */

/**
 * Retrieves information about the current operating system
 *
 * This class uses php_uname() to grok information about the current OS
 *
 * @category   pear
 * @package    PEAR
 * @author     Stig Bakken <ssb@php.net>
 * @author     Gregory Beaver <cellog@php.net>
 * @copyright  1997-2009 The Authors
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/PEAR
 * @since      Class available since Release 0.1
 */
class OS_Guess
{
    var $sysname;
    var $nodename;
    var $cpu;
    var $release;
    var $extra;

    function __construct($uname = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function parseSignature($uname = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function _detectGlibcVersion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function getSignature()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function getSysname()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function getNodename()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function getCpu()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function getRelease()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function getExtra()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function matchSignature($match)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function _matchFragment($fragment, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

}
/*
 * Local Variables:
 * indent-tabs-mode: nil
 * c-basic-offset: 4
 * End:
 */
