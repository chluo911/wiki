<?php
/**
 * A basic extension that's used by the parser tests to test whether input and
 * arguments are passed to extensions properly.
 *
 * Copyright © 2005, 2006 Ævar Arnfjörð Bjarmason
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
 * @ingroup Testing
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 */

class ParserTestParserHook
{
    public static function setup(&$parser)
    {
        $parser->setHook('tag', [ __CLASS__, 'dumpHook' ]);
        $parser->setHook('tåg', [ __CLASS__, 'dumpHook' ]);
        $parser->setHook('statictag', [ __CLASS__, 'staticTagHook' ]);
        return true;
    }

    public static function dumpHook($in, $argv)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function staticTagHook($in, $argv, $parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
