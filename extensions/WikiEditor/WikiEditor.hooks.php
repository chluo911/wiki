<?php
/**
 * Hooks for WikiEditor extension
 *
 * @file
 * @ingroup Extensions
 */

class WikiEditorHooks
{
    // ID used for grouping entries all of a session's entries together in
    // EventLogging.
    private static $statsId = false;

    /* Protected Static Members */

    protected static $features = [

        /* Toolbar Features */

        'toolbar' => [
            'preferences' => [
                // Ideally this key would be 'wikieditor-toolbar'
                'usebetatoolbar' => [
                    'type' => 'toggle',
                    'label-message' => 'wikieditor-toolbar-preference',
                    'section' => 'editing/editor',
                ],
            ],
            'requirements' => [
                'usebetatoolbar' => true,
            ],
            'modules' => [
                'ext.wikiEditor.toolbar',
            ],
            'stylemodules' => [
                'ext.wikiEditor.toolbar.styles',
            ],
        ],
        'dialogs' => [
            'preferences' => [
                // Ideally this key would be 'wikieditor-toolbar-dialogs'
                'usebetatoolbar-cgd' => [
                    'type' => 'toggle',
                    'label-message' => 'wikieditor-toolbar-dialogs-preference',
                    'section' => 'editing/editor',
                ],
            ],
            'requirements' => [
                'usebetatoolbar-cgd' => true,
                'usebetatoolbar' => true,
            ],
            'modules' => [
                'ext.wikiEditor.dialogs',
            ],
        ],

        /* Labs Features */

        'preview' => [
            'preferences' => [
                'wikieditor-preview' => [
                    'type' => 'toggle',
                    'label-message' => 'wikieditor-preview-preference',
                    'section' => 'editing/labs',
                ],
            ],
            'requirements' => [
                'wikieditor-preview' => true,
            ],
            'modules' => [
                'ext.wikiEditor.preview',
            ],
        ],
        'publish' => [
            'preferences' => [
                'wikieditor-publish' => [
                    'type' => 'toggle',
                    'label-message' => 'wikieditor-publish-preference',
                    'section' => 'editing/labs',
                ],
            ],
            'requirements' => [
                'wikieditor-publish' => true,
            ],
            'modules' => [
                'ext.wikiEditor.publish',
            ],
        ]
    ];

    /* Static Methods */

    /**
     * Checks if a certain option is enabled
     *
     * This method is public to allow other extensions that use WikiEditor to use the
     * same configuration as WikiEditor itself
     *
     * @param $name string Name of the feature, should be a key of $features
     * @return bool
     */
    public static function isEnabled($name)
    {
        global $wgWikiEditorFeatures, $wgUser;

        // Features with global set to true are always enabled
        if (!isset($wgWikiEditorFeatures[$name]) || $wgWikiEditorFeatures[$name]['global']) {
            return true;
        }
        // Features with user preference control can have any number of preferences
        // to be specific values to be enabled
        if ($wgWikiEditorFeatures[$name]['user']) {
            if (isset(self::$features[$name]['requirements'])) {
                foreach (self::$features[$name]['requirements'] as $requirement => $value) {
                    // Important! We really do want fuzzy evaluation here
                    if ($wgUser->getOption($requirement) != $value) {
                        return false;
                    }
                }
            }
            return true;
        }
        // Features controlled by $wgWikiEditorFeatures with both global and user
        // set to false are always disabled
        return false;
    }

    /**
     * Log stuff to EventLogging's Schema:Edit - see https://meta.wikimedia.org/wiki/Schema:Edit
     * If you don't have EventLogging installed, does nothing.
     *
     * @param string $action
     * @param Article $article Which article (with full context, page, title, etc.)
     * @param array $data Data to log for this action
     * @return bool Whether the event was logged or not.
     */
    public static function doEventLogging($action, $article, $data = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * EditPage::showEditForm:initial hook
     *
     * Adds the modules to the edit form
     *
     * @param EditPage $editPage the current EditPage object.
     * @param OutputPage $outputPage object.
     * @return bool
     */
    public static function editPageShowEditFormInitial($editPage, $outputPage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * EditPage::showEditForm:fields hook
     *
     * Adds the event fields to the edit form
     *
     * @param EditPage $editPage the current EditPage object.
     * @param OutputPage $outputPage object.
     * @return bool
     */
    public static function editPageShowEditFormFields($editPage, $outputPage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * EditPageBeforeEditToolbar hook
     *
     * Disable the old toolbar if the new one is enabled
     *
     * @param $toolbar html
     * @return bool
     */
    public static function EditPageBeforeEditToolbar(&$toolbar)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * GetPreferences hook
     *
     * Adds WikiEditor-related items to the preferences
     *
     * @param User $user current user
     * @param array $defaultPreferences list of default user preference controls
     * @return bool
     */
    public static function getPreferences($user, &$defaultPreferences)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $vars array
     * @return bool
     */
    public static function resourceLoaderGetConfigVars(&$vars)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * ResourceLoaderTestModules hook
     *
     * Registers JavaScript test modules
     *
     * @param $testModules array of javascript testing modules. 'qunit' is fed using
     * tests/qunit/QUnitTestResources.php.
     * @param $resourceLoader object
     * @return bool
     */
    public static function resourceLoaderTestModules(&$testModules, &$resourceLoader)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * MakeGlobalVariablesScript hook
     *
     * Adds enabled/disabled switches for WikiEditor modules
     * @param $vars array
     * @return bool
     */
    public static function makeGlobalVariablesScript(&$vars)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Expose useful magic words which are used by the wikieditor toolbar
     * @param $vars array
     * @return bool
     */
    private static function getMagicWords(&$vars)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets a 32 character alphanumeric random string to be used for stats.
     * @return string
     */
    private static function getEditingStatsId()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This is attached to the MediaWiki 'EditPage::attemptSave' hook.
     *
     * @param EditPage $editPage
     * @param Status $status
     * @return boolean
     */
    public static function editPageAttemptSave(EditPage $editPage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This is attached to the MediaWiki 'EditPage::attemptSave:after' hook.
     *
     * @param EditPage $editPage
     * @param Status $status
     * @return boolean
     */
    public static function editPageAttemptSaveAfter(EditPage $editPage, Status $status)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
