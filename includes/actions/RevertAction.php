<?php
/**
 * File reversion user interface
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA
 *
 * @file
 * @ingroup Actions
 * @ingroup Media
 * @author Alexandre Emsenhuber
 * @author Rob Church <robchur@gmail.com>
 */

/**
 * File reversion user interface
 *
 * @ingroup Actions
 */
class RevertAction extends FormAction
{
    /**
     * @var OldLocalFile
     */
    protected $oldFile;

    public function getName()
    {
        return 'revert';
    }

    public function getRestriction()
    {
        return 'upload';
    }

    protected function checkCanExecute(User $user)
    {
        if ($this->getTitle()->getNamespace() !== NS_FILE) {
            throw new ErrorPageError($this->msg('nosuchaction'), $this->msg('nosuchactiontext'));
        }
        parent::checkCanExecute($user);

        $oldimage = $this->getRequest()->getText('oldimage');
        if (strlen($oldimage) < 16
            || strpos($oldimage, '/') !== false
            || strpos($oldimage, '\\') !== false
        ) {
            throw new ErrorPageError('internalerror', 'unexpected', [ 'oldimage', $oldimage ]);
        }

        $this->oldFile = RepoGroup::singleton()->getLocalRepo()->newFromArchiveName(
            $this->getTitle(),
            $oldimage
        );

        if (!$this->oldFile->exists()) {
            throw new ErrorPageError('', 'filerevert-badversion');
        }
    }

    protected function alterForm(HTMLForm $form)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getFormFields()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function onSubmit($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function onSuccess()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getPageTitle()
    {
        return $this->msg('filerevert', $this->getTitle()->getText());
    }

    protected function getDescription()
    {
        return OutputPage::buildBacklinkSubtitle($this->getTitle());
    }

    public function doesWrites()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
