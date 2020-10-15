<?php
/**
 * Approximate benchmark for some basic operations.
 * Runs large chunks of text through cleanup with a lowish memory limit,
 * to test regression on mem usage (bug 28146)
 *
 * Copyright © 2004-2011 Brion Vibber <brion@wikimedia.org>
 * https://www.mediawiki.org/
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
 * @ingroup UtfNormal
 */

use UtfNormal\Validator;

if ( PHP_SAPI != 'cli' ) {
	die( "Run me from the command line please.\n" );
}

require_once dirname( __DIR__ ) . '/vendor/autoload.php';

define( 'BENCH_CYCLES', 1 );
define( 'BIGSIZE', 1024 * 1024 * 10 ); // 10m
ini_set( 'memory_limit', BIGSIZE + 120 * 1024 * 1024 );

$testfiles = array(
	'testdata/washington.txt' => 'English text',
	'testdata/berlin.txt' => 'German text',
	'testdata/bulgakov.txt' => 'Russian text',
	'testdata/tokyo.txt' => 'Japanese text',
	'testdata/young.txt' => 'Korean text'
);
$normalizer = new Validator;
Validator::loadData();
foreach ( $testfiles as $file => $desc ) {
	benchmarkTest( $normalizer, $file, $desc );
}

# -------

function benchmarkTest( &$u, $filename, $desc ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

function benchmarkForm( &$u, &$data, $form ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
