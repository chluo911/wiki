<?php
/**
 * Router job that takes jobs and enqueues them.
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
 * @ingroup JobQueue
 */

/**
 * Router job that takes jobs and enqueues them to their proper queues
 *
 * This can be used for several things:
 *   - a) Making multi-job enqueues more robust by atomically enqueueing
 *        a single job that pushes the actual jobs (with retry logic)
 *   - b) Masking the latency of pushing jobs to different queues/wikis
 *   - c) Low-latency enqueues to push jobs from warm to hot datacenters
 *
 * @ingroup JobQueue
 * @since 1.25
 */
final class EnqueueJob extends Job
{
    /**
     * Callers should use the factory methods instead
     *
     * @param Title $title
     * @param array $params Job parameters
     */
    public function __construct(Title $title, array $params)
    {
        parent::__construct('enqueue', $title, $params);
    }

    /**
     * @param JobSpecification|JobSpecification[] $jobs
     * @return EnqueueJob
     */
    public static function newFromLocalJobs($jobs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $jobsByWiki Map of (wiki => JobSpecification list)
     * @return EnqueueJob
     */
    public static function newFromJobsByWiki(array $jobsByWiki)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function run()
    {
        foreach ($this->params['jobsByWiki'] as $wiki => $jobMaps) {
            $jobSpecs = [];
            foreach ($jobMaps as $jobMap) {
                $jobSpecs[] = JobSpecification::newFromArray($jobMap);
            }
            JobQueueGroup::singleton($wiki)->push($jobSpecs);
        }

        return true;
    }
}
