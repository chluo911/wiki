<?php

namespace Cdb\Reader;

use Cdb\Reader;
use Wikimedia\Assert\Assert;

/**
 * Hash implements the CdbReader interface based on an associative
 * PHP array (a.k.a "hash").
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

/**
 * Hash implements the CdbReader interface based on an associative
 * PHP array (a.k.a "hash").
 */
class Hash extends Reader {

	/**
	 * @var string
	 */
	private $data;

	/**
	 * A queue of keys to return from nextkey(),
	 * initialized by firstkey();
	 *
	 * @var string[]|null
	 */
	private $keys = null;

	/**
	 * Create the object and open the file
	 *
	 * @param string[] $data An associative PHP array.
	 */
	public function __construct( $data ) {
		if ( !is_array( $data ) ) {
			throw new \InvalidArgumentException( __METHOD__ . ': "$data" must be an array.' );
		}
		$this->data = $data;
	}

	/**
	 * Close the file. Optional, you can just let the variable go out of scope.
	 */
	public function close() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Get a value with a given key. Only string values are supported.
	 *
	 * @param string $key
	 *
	 * @return bool|string The value associated with $key, or false if $key is not known.
	 */
	public function get( $key ) {
		return isset( $this->data[ $key ] ) ? $this->data[ $key ] : false;
	}

	/**
	 * Check whether key exists
	 *
	 * @param string $key
	 *
	 * @return bool
	 */
	public function exists( $key ) {
		return isset( $this->data[ $key ] );
	}

	/**
	 * Fetch first key
	 *
	 * @return string
	 */
	public function firstkey() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Fetch next key
	 *
	 * @return string
	 */
	public function nextkey() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

}
