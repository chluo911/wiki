<?php
/**
 *
 * Created on May 1, 2011
 *
 * Copyright © 2011 Sam Reed
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

class ApiComparePages extends ApiBase
{
    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param int $revision
     * @param string $titleText
     * @param int $titleId
     * @return int
     */
    private function revisionOrTitleOrId($revision, $titleText, $titleId)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getAllowedParams()
    {
        return [
            'fromtitle' => null,
            'fromid' => [
                ApiBase::PARAM_TYPE => 'integer'
            ],
            'fromrev' => [
                ApiBase::PARAM_TYPE => 'integer'
            ],
            'totitle' => null,
            'toid' => [
                ApiBase::PARAM_TYPE => 'integer'
            ],
            'torev' => [
                ApiBase::PARAM_TYPE => 'integer'
            ],
        ];
    }

    protected function getExamplesMessages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
