<?php
/**
 * Base classes for actions done on pages.
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
 */

/**
 * An action which shows a form and does something based on the input from the form
 *
 * @ingroup Actions
 */
abstract class FormAction extends Action
{

    /**
     * Get an HTMLForm descriptor array
     * @return array
     */
    protected function getFormFields()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add pre- or post-text to the form
     * @return string HTML which will be sent to $form->addPreText()
     */
    protected function preText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    protected function postText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Play with the HTMLForm if you need to more substantially
     * @param HTMLForm $form
     */
    protected function alterForm(HTMLForm $form)
    {
    }

    /**
     * Get the HTMLForm to control behavior
     * @return HTMLForm|null
     */
    protected function getForm()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Process the form on POST submission.
     *
     * If you don't want to do anything with the form, just return false here.
     *
     * @param array $data
     * @return bool|array True for success, false for didn't-try, array of errors on failure
     */
    abstract public function onSubmit($data);

    /**
     * Do something exciting on successful processing of the form.  This might be to show
     * a confirmation message (watch, rollback, etc) or to redirect somewhere else (edit,
     * protect, etc).
     */
    abstract public function onSuccess();

    /**
     * The basic pattern for actions is to display some sort of HTMLForm UI, maybe with
     * some stuff underneath (history etc); to do some processing on submission of that
     * form (delete, protect, etc) and to do something exciting on 'success', be that
     * display something new or redirect to somewhere.  Some actions have more exotic
     * behavior, but that's what subclassing is for :D
     */
    public function show()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
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
