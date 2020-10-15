<?php
/**
 * Profiler showing output in page source.
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
 * @ingroup Profiler
 */

/**
 * The least sophisticated profiler output class possible, view your source! :)
 *
 * @ingroup Profiler
 * @since 1.25
 */
class ProfilerOutputText extends ProfilerOutput
{
    /** @var float Min real time display threshold */
    protected $thresholdMs;

    public function __construct(Profiler $collector, array $params)
    {
        parent::__construct($collector, $params);
        $this->thresholdMs = isset($params['thresholdMs'])
            ? $params['thresholdMs']
            : 1.0;
    }
    public function log(array $stats)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
