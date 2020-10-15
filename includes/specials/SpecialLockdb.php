<?php
/**
 * Implements Special:Lockdb
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
 * @ingroup SpecialPage
 */

/**
 * A form to make the database readonly (eg for maintenance purposes).
 *
 * @ingroup SpecialPage
 */
class SpecialLockdb extends FormSpecialPage
{
    protected $reason = '';

    public function __construct()
    {
        parent::__construct('Lockdb', 'siteadmin');
    }

    public function doesWrites()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function requiresWrite()
    {
        return false;
    }

    public function checkExecutePermissions(User $user)
    {
        parent::checkExecutePermissions($user);
        # If the lock file isn't writable, we can do sweet bugger all
        if (!is_writable(dirname($this->getConfig()->get('ReadOnlyFile')))) {
            throw new ErrorPageError('lockdb', 'lockfilenotwritable');
        }
        if (file_exists($this->getConfig()->get('ReadOnlyFile'))) {
            throw new ErrorPageError('lockdb', 'databaselocked');
        }
    }

    protected function getFormFields()
    {
        return [
            'Reason' => [
                'type' => 'textarea',
                'rows' => 4,
                'vertical-label' => true,
                'label-message' => 'enterlockreason',
            ],
            'Confirm' => [
                'type' => 'toggle',
                'label-message' => 'lockconfirm',
            ],
        ];
    }

    protected function alterForm(HTMLForm $form)
    {
        $form->setWrapperLegend(false)
            ->setHeaderText($this->msg('lockdbtext')->parseAsBlock())
            ->setSubmitTextMsg('lockbtn');
    }

    public function onSubmit(array $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function onSuccess()
    {
        $out = $this->getOutput();
        $out->addSubtitle($this->msg('lockdbsuccesssub'));
        $out->addWikiMsg('lockdbsuccesstext');
    }

    protected function getDisplayFormat()
    {
        return 'ooui';
    }

    protected function getGroupName()
    {
        return 'wiki';
    }
}
