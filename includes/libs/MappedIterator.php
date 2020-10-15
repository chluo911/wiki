<?php
/**
 * Convenience class for generating iterators from iterators.
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
 * @author Aaron Schulz
 */

/**
 * Convenience class for generating iterators from iterators.
 *
 * @since 1.21
 */
class MappedIterator extends FilterIterator
{
    /** @var callable */
    protected $vCallback;
    /** @var callable */
    protected $aCallback;
    /** @var array */
    protected $cache = [];

    protected $rewound = false; // boolean; whether rewind() has been called

    /**
     * Build an new iterator from a base iterator by having the former wrap the
     * later, returning the result of "value" callback for each current() invocation.
     * The callback takes the result of current() on the base iterator as an argument.
     * The keys of the base iterator are reused verbatim.
     *
     * An "accept" callback can also be provided which will be called for each value in
     * the base iterator (post-callback) and will return true if that value should be
     * included in iteration of the MappedIterator (otherwise it will be filtered out).
     *
     * @param Iterator|Array $iter
     * @param callable $vCallback Value transformation callback
     * @param array $options Options map (includes "accept") (since 1.22)
     * @throws UnexpectedValueException
     */
    public function __construct($iter, $vCallback, array $options = [])
    {
        if (is_array($iter)) {
            $baseIterator = new ArrayIterator($iter);
        } elseif ($iter instanceof Iterator) {
            $baseIterator = $iter;
        } else {
            throw new UnexpectedValueException("Invalid base iterator provided.");
        }
        parent::__construct($baseIterator);
        $this->vCallback = $vCallback;
        $this->aCallback = isset($options['accept']) ? $options['accept'] : null;
    }

    public function next()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function rewind()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function accept()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function key()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function valid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function current()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Obviate the usual need for rewind() before using a FilterIterator in a manual loop
     */
    protected function init()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
