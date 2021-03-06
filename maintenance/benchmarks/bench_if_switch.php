<?php
/**
 * Benchmark if elseif... versus switch case.
 *
 * This come from r75429 message
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
 * @ingroup Benchmark
 * @author  Platonides
 */

require_once __DIR__ . '/Benchmarker.php';

/**
 * Maintenance script that benchmark if elseif... versus switch case.
 *
 * @ingroup Maintenance
 */
class BenchIfSwitch extends Benchmarker
{
    public function __construct()
    {
        parent::__construct();
        $this->addDescription('Benchmark if elseif... versus switch case.');
    }

    public function execute()
    {
        $this->bench([
            [ 'function' => [ $this, 'doElseIf' ] ],
            [ 'function' => [ $this, 'doSwitch' ] ],
        ]);
        print $this->getFormattedResults();
    }

    // bench function 1
    public function doElseIf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // bench function 2
    public function doSwitch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

$maintClass = 'BenchIfSwitch';
require_once RUN_MAINTENANCE_IF_MAIN;
