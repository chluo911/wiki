<?php
/**
 * MessagePack serializer
 *
 * MessagePack is a space-efficient binary data interchange format. This
 * class provides a pack() method that encodes native PHP values as MessagePack
 * binary strings. The implementation is derived from msgpack-php.
 *
 * Copyright (c) 2013 Ori Livneh <ori@wikimedia.org>
 * Copyright (c) 2011 OnlineCity <https://github.com/onlinecity/msgpack-php>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 * @see <http://msgpack.org/>
 * @see <http://wiki.msgpack.org/display/MSGPACK/Format+specification>
 *
 * @since 1.23
 * @file
 */
class MWMessagePack
{
    /** @var bool|null Whether current system is bigendian. **/
    public static $bigendian = null;

    /**
     * Encode a value using MessagePack
     *
     * This method supports null, boolean, integer, float, string and array
     * (both indexed and associative) types. Object serialization is not
     * supported.
     *
     * @param mixed $value
     * @return string
     * @throws InvalidArgumentException if $value is an unsupported type or too long a string
     */
    public static function pack($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
