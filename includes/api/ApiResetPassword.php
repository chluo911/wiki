<?php
/**
 * Copyright © 2016 Brad Jorsch <bjorsch@wikimedia.org>
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

use MediaWiki\Auth\AuthManager;

/**
 * Reset password, with AuthManager
 *
 * @ingroup API
 */
class ApiResetPassword extends ApiBase
{
    private $hasAnyRoutes = null;

    /**
     * Determine whether any reset routes are available.
     * @return bool
     */
    private function hasAnyRoutes()
    {
        if ($this->hasAnyRoutes === null) {
            $resetRoutes = $this->getConfig()->get('PasswordResetRoutes');
            $this->hasAnyRoutes = !empty($resetRoutes['username']) || !empty($resetRoutes['email']);
        }
        return $this->hasAnyRoutes;
    }

    protected function getDescriptionMessage()
    {
        if (!$this->hasAnyRoutes()) {
            return 'apihelp-resetpassword-description-noroutes';
        }
        return parent::getDescriptionMessage();
    }

    public function execute()
    {
        if (!$this->hasAnyRoutes()) {
            $this->dieUsage('No password reset routes are available.', 'moduledisabled');
        }

        $params = $this->extractRequestParams() + [
            // Make sure the keys exist even if getAllowedParams didn't define them
            'user' => null,
            'email' => null,
        ];

        $this->requireOnlyOneParameter($params, 'user', 'email');

        $passwordReset = new PasswordReset($this->getConfig(), AuthManager::singleton());

        $status = $passwordReset->isAllowed($this->getUser(), $params['capture']);
        if (!$status->isOK()) {
            $this->dieStatus(Status::wrap($status));
        }

        $status = $passwordReset->execute(
            $this->getUser(),
            $params['user'],
            $params['email'],
            $params['capture']
        );
        if (!$status->isOK()) {
            $status->value = null;
            $this->dieStatus(Status::wrap($status));
        }

        $result = $this->getResult();
        $result->addValue([ 'resetpassword' ], 'status', 'success');
        if ($params['capture']) {
            $passwords = $status->getValue() ?: [];
            ApiResult::setArrayType($passwords, 'kvp', 'user');
            ApiResult::setIndexedTagName($passwords, 'p');
            $result->addValue([ 'resetpassword' ], 'passwords', $passwords);
        }
    }

    public function isWriteMode()
    {
        return $this->hasAnyRoutes();
    }

    public function needsToken()
    {
        if (!$this->hasAnyRoutes()) {
            return false;
        }
        return 'csrf';
    }

    public function getAllowedParams()
    {
        if (!$this->hasAnyRoutes()) {
            return [];
        }

        $ret = [
            'user' => [
                ApiBase::PARAM_TYPE => 'user',
            ],
            'email' => [
                ApiBase::PARAM_TYPE => 'string',
            ],
            'capture' => false,
        ];

        $resetRoutes = $this->getConfig()->get('PasswordResetRoutes');
        if (empty($resetRoutes['username'])) {
            unset($ret['user']);
        }
        if (empty($resetRoutes['email'])) {
            unset($ret['email']);
        }

        return $ret;
    }

    protected function getExamplesMessages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getHelpUrls()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}