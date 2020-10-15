<?php
/**
 * DBMS-specific updater helper.
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
 * @ingroup Deployment
 */
use MediaWiki\MediaWikiServices;

require_once __DIR__ . '/../../maintenance/Maintenance.php';

/**
 * Class for handling database updates. Roughly based off of updaters.inc, with
 * a few improvements :)
 *
 * @ingroup Deployment
 * @since 1.17
 */
abstract class DatabaseUpdater
{
    protected static $updateCounter = 0;

    /**
     * Array of updates to perform on the database
     *
     * @var array
     */
    protected $updates = [];

    /**
     * Array of updates that were skipped
     *
     * @var array
     */
    protected $updatesSkipped = [];

    /**
     * List of extension-provided database updates
     * @var array
     */
    protected $extensionUpdates = [];

    /**
     * Handle to the database subclass
     *
     * @var Database
     */
    protected $db;

    protected $shared = false;

    /**
     * @var string[] Scripts to run after database update
     * Should be a subclass of LoggedUpdateMaintenance
     */
    protected $postDatabaseUpdateMaintenance = [
        DeleteDefaultMessages::class,
        PopulateRevisionLength::class,
        PopulateRevisionSha1::class,
        PopulateImageSha1::class,
        FixExtLinksProtocolRelative::class,
        PopulateFilearchiveSha1::class,
        PopulateBacklinkNamespace::class,
        FixDefaultJsonContentPages::class,
        CleanupEmptyCategories::class,
        AddRFCAndPMIDInterwiki::class,
    ];

    /**
     * File handle for SQL output.
     *
     * @var resource
     */
    protected $fileHandle = null;

    /**
     * Flag specifying whether or not to skip schema (e.g. SQL-only) updates.
     *
     * @var bool
     */
    protected $skipSchema = false;

    /**
     * Hold the value of $wgContentHandlerUseDB during the upgrade.
     */
    protected $holdContentHandlerUseDB = true;

    /**
     * Constructor
     *
     * @param Database $db To perform updates on
     * @param bool $shared Whether to perform updates on shared tables
     * @param Maintenance $maintenance Maintenance object which created us
     */
    protected function __construct(Database &$db, $shared, Maintenance $maintenance = null)
    {
        $this->db = $db;
        $this->db->setFlag(DBO_DDLMODE); // For Oracle's handling of schema files
        $this->shared = $shared;
        if ($maintenance) {
            $this->maintenance = $maintenance;
            $this->fileHandle = $maintenance->fileHandle;
        } else {
            $this->maintenance = new FakeMaintenance;
        }
        $this->maintenance->setDB($db);
        $this->initOldGlobals();
        $this->loadExtensions();
        Hooks::run('LoadExtensionSchemaUpdates', [ $this ]);
    }

    /**
     * Initialize all of the old globals. One day this should all become
     * something much nicer
     */
    private function initOldGlobals()
    {
        global $wgExtNewTables, $wgExtNewFields, $wgExtPGNewFields,
            $wgExtPGAlteredFields, $wgExtNewIndexes, $wgExtModifiedFields;

        # For extensions only, should be populated via hooks
        # $wgDBtype should be checked to specifiy the proper file
        $wgExtNewTables = []; // table, dir
        $wgExtNewFields = []; // table, column, dir
        $wgExtPGNewFields = []; // table, column, column attributes; for PostgreSQL
        $wgExtPGAlteredFields = []; // table, column, new type, conversion method; for PostgreSQL
        $wgExtNewIndexes = []; // table, index, dir
        $wgExtModifiedFields = []; // table, index, dir
    }

    /**
     * Loads LocalSettings.php, if needed, and initialises everything needed for
     * LoadExtensionSchemaUpdates hook.
     */
    private function loadExtensions()
    {
        if (!defined('MEDIAWIKI_INSTALL')) {
            return; // already loaded
        }
        $vars = Installer::getExistingLocalSettings();

        $registry = ExtensionRegistry::getInstance();
        $queue = $registry->getQueue();
        // Don't accidentally load extensions in the future
        $registry->clearQueue();

        // This will automatically add "AutoloadClasses" to $wgAutoloadClasses
        $data = $registry->readFromQueue($queue);
        $hooks = [ 'wgHooks' => [ 'LoadExtensionSchemaUpdates' => [] ] ];
        if (isset($data['globals']['wgHooks']['LoadExtensionSchemaUpdates'])) {
            $hooks = $data['globals']['wgHooks']['LoadExtensionSchemaUpdates'];
        }
        if ($vars && isset($vars['wgHooks']['LoadExtensionSchemaUpdates'])) {
            $hooks = array_merge_recursive($hooks, $vars['wgHooks']['LoadExtensionSchemaUpdates']);
        }
        global $wgHooks, $wgAutoloadClasses;
        $wgHooks['LoadExtensionSchemaUpdates'] = $hooks;
        if ($vars && isset($vars['wgAutoloadClasses'])) {
            $wgAutoloadClasses += $vars['wgAutoloadClasses'];
        }
    }

    /**
     * @param Database $db
     * @param bool $shared
     * @param Maintenance $maintenance
     *
     * @throws MWException
     * @return DatabaseUpdater
     */
    public static function newForDB(Database $db, $shared = false, $maintenance = null)
    {
        $type = $db->getType();
        if (in_array($type, Installer::getDBTypes())) {
            $class = ucfirst($type) . 'Updater';

            return new $class($db, $shared, $maintenance);
        } else {
            throw new MWException(__METHOD__ . ' called for unsupported $wgDBtype');
        }
    }

    /**
     * Get a database connection to run updates
     *
     * @return Database
     */
    public function getDB()
    {
        return $this->db;
    }

    /**
     * Output some text. If we're running from web, escape the text first.
     *
     * @param string $str Text to output
     */
    public function output($str)
    {
        if ($this->maintenance->isQuiet()) {
            return;
        }
        global $wgCommandLineMode;
        if (!$wgCommandLineMode) {
            $str = htmlspecialchars($str);
        }
        echo $str;
        flush();
    }

    /**
     * Add a new update coming from an extension. This should be called by
     * extensions while executing the LoadExtensionSchemaUpdates hook.
     *
     * @since 1.17
     *
     * @param array $update The update to run. Format is [ $callback, $params... ]
     *   $callback is the method to call; either a DatabaseUpdater method name or a callable.
     *   Must be serializable (ie. no anonymous functions allowed). The rest of the parameters
     *   (if any) will be passed to the callback. The first parameter passed to the callback
     *   is always this object.
     */
    public function addExtensionUpdate(array $update)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convenience wrapper for addExtensionUpdate() when adding a new table (which
     * is the most common usage of updaters in an extension)
     *
     * @since 1.18
     *
     * @param string $tableName Name of table to create
     * @param string $sqlPath Full path to the schema file
     */
    public function addExtensionTable($tableName, $sqlPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.19
     *
     * @param string $tableName
     * @param string $indexName
     * @param string $sqlPath
     */
    public function addExtensionIndex($tableName, $indexName, $sqlPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *
     * @since 1.19
     *
     * @param string $tableName
     * @param string $columnName
     * @param string $sqlPath
     */
    public function addExtensionField($tableName, $columnName, $sqlPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *
     * @since 1.20
     *
     * @param string $tableName
     * @param string $columnName
     * @param string $sqlPath
     */
    public function dropExtensionField($tableName, $columnName, $sqlPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Drop an index from an extension table
     *
     * @since 1.21
     *
     * @param string $tableName The table name
     * @param string $indexName The index name
     * @param string $sqlPath The path to the SQL change path
     */
    public function dropExtensionIndex($tableName, $indexName, $sqlPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *
     * @since 1.20
     *
     * @param string $tableName
     * @param string $sqlPath
     */
    public function dropExtensionTable($tableName, $sqlPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Rename an index on an extension table
     *
     * @since 1.21
     *
     * @param string $tableName The table name
     * @param string $oldIndexName The old index name
     * @param string $newIndexName The new index name
     * @param string $sqlPath The path to the SQL change path
     * @param bool $skipBothIndexExistWarning Whether to warn if both the old
     * and the new indexes exist. [facultative; by default, false]
     */
    public function renameExtensionIndex(
        $tableName,
        $oldIndexName,
        $newIndexName,
        $sqlPath,
        $skipBothIndexExistWarning = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.21
     *
     * @param string $tableName The table name
     * @param string $fieldName The field to be modified
     * @param string $sqlPath The path to the SQL change path
     */
    public function modifyExtensionField($tableName, $fieldName, $sqlPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *
     * @since 1.20
     *
     * @param string $tableName
     * @return bool
     */
    public function tableExists($tableName)
    {
        return ($this->db->tableExists($tableName, __METHOD__));
    }

    /**
     * Add a maintenance script to be run after the database updates are complete.
     *
     * Script should subclass LoggedUpdateMaintenance
     *
     * @since 1.19
     *
     * @param string $class Name of a Maintenance subclass
     */
    public function addPostDatabaseUpdateMaintenance($class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the list of extension-defined updates
     *
     * @return array
     */
    protected function getExtensionUpdates()
    {
        return $this->extensionUpdates;
    }

    /**
     * @since 1.17
     *
     * @return string[]
     */
    public function getPostDatabaseUpdateMaintenance()
    {
        return $this->postDatabaseUpdateMaintenance;
    }

    /**
     * @since 1.21
     *
     * Writes the schema updates desired to a file for the DB Admin to run.
     * @param array $schemaUpdate
     */
    private function writeSchemaUpdateFile($schemaUpdate = [])
    {
        $updates = $this->updatesSkipped;
        $this->updatesSkipped = [];

        foreach ($updates as $funcList) {
            $func = $funcList[0];
            $arg = $funcList[1];
            $origParams = $funcList[2];
            call_user_func_array($func, $arg);
            flush();
            $this->updatesSkipped[] = $origParams;
        }
    }

    /**
     * Get appropriate schema variables in the current database connection.
     *
     * This should be called after any request data has been imported, but before
     * any write operations to the database. The result should be passed to the DB
     * setSchemaVars() method.
     *
     * @return array
     * @since 1.28
     */
    public function getSchemaVars()
    {
        return []; // DB-type specific
    }

    /**
     * Do all the updates
     *
     * @param array $what What updates to perform
     */
    public function doUpdates($what = [ 'core', 'extensions', 'stats' ])
    {
        global $wgVersion;

        $this->db->setSchemaVars($this->getSchemaVars());

        $what = array_flip($what);
        $this->skipSchema = isset($what['noschema']) || $this->fileHandle !== null;
        if (isset($what['core'])) {
            $this->runUpdates($this->getCoreUpdateList(), false);
        }
        if (isset($what['extensions'])) {
            $this->runUpdates($this->getOldGlobalUpdates(), false);
            $this->runUpdates($this->getExtensionUpdates(), true);
        }

        if (isset($what['stats'])) {
            $this->checkStats();
        }

        $this->setAppliedUpdates($wgVersion, $this->updates);

        if ($this->fileHandle) {
            $this->skipSchema = false;
            $this->writeSchemaUpdateFile();
            $this->setAppliedUpdates("$wgVersion-schema", $this->updatesSkipped);
        }
    }

    /**
     * Helper function for doUpdates()
     *
     * @param array $updates Array of updates to run
     * @param bool $passSelf Whether to pass this object we calling external functions
     */
    private function runUpdates(array $updates, $passSelf)
    {
        $lbFactory = MediaWikiServices::getInstance()->getDBLoadBalancerFactory();

        $updatesDone = [];
        $updatesSkipped = [];
        foreach ($updates as $params) {
            $origParams = $params;
            $func = array_shift($params);
            if (!is_array($func) && method_exists($this, $func)) {
                $func = [ $this, $func ];
            } elseif ($passSelf) {
                array_unshift($params, $this);
            }
            $ret = call_user_func_array($func, $params);
            flush();
            if ($ret !== false) {
                $updatesDone[] = $origParams;
                $lbFactory->waitForReplication();
            } else {
                $updatesSkipped[] = [ $func, $params, $origParams ];
            }
        }
        $this->updatesSkipped = array_merge($this->updatesSkipped, $updatesSkipped);
        $this->updates = array_merge($this->updates, $updatesDone);
    }

    /**
     * @param string $version
     * @param array $updates
     */
    protected function setAppliedUpdates($version, $updates = [])
    {
        $this->db->clearFlag(DBO_DDLMODE);
        if (!$this->canUseNewUpdatelog()) {
            return;
        }
        $key = "updatelist-$version-" . time() . self::$updateCounter;
        self::$updateCounter++;
        $this->db->insert(
            'updatelog',
            [ 'ul_key' => $key, 'ul_value' => serialize($updates) ],
            __METHOD__
        );
        $this->db->setFlag(DBO_DDLMODE);
    }

    /**
     * Helper function: check if the given key is present in the updatelog table.
     * Obviously, only use this for updates that occur after the updatelog table was
     * created!
     * @param string $key Name of the key to check for
     * @return bool
     */
    public function updateRowExists($key)
    {
        $row = $this->db->selectRow(
            'updatelog',
            # Bug 65813
            '1 AS X',
            [ 'ul_key' => $key ],
            __METHOD__
        );

        return (bool)$row;
    }

    /**
     * Helper function: Add a key to the updatelog table
     * Obviously, only use this for updates that occur after the updatelog table was
     * created!
     * @param string $key Name of key to insert
     * @param string $val [optional] Value to insert along with the key
     */
    public function insertUpdateRow($key, $val = null)
    {
        $this->db->clearFlag(DBO_DDLMODE);
        $values = [ 'ul_key' => $key ];
        if ($val && $this->canUseNewUpdatelog()) {
            $values['ul_value'] = $val;
        }
        $this->db->insert('updatelog', $values, __METHOD__, 'IGNORE');
        $this->db->setFlag(DBO_DDLMODE);
    }

    /**
     * Updatelog was changed in 1.17 to have a ul_value column so we can record
     * more information about what kind of updates we've done (that's what this
     * class does). Pre-1.17 wikis won't have this column, and really old wikis
     * might not even have updatelog at all
     *
     * @return bool
     */
    protected function canUseNewUpdatelog()
    {
        return $this->db->tableExists('updatelog', __METHOD__) &&
            $this->db->fieldExists('updatelog', 'ul_value', __METHOD__);
    }

    /**
     * Returns whether updates should be executed on the database table $name.
     * Updates will be prevented if the table is a shared table and it is not
     * specified to run updates on shared tables.
     *
     * @param string $name Table name
     * @return bool
     */
    protected function doTable($name)
    {
        global $wgSharedDB, $wgSharedTables;

        // Don't bother to check $wgSharedTables if there isn't a shared database
        // or the user actually also wants to do updates on the shared database.
        if ($wgSharedDB === null || $this->shared) {
            return true;
        }

        if (in_array($name, $wgSharedTables)) {
            $this->output("...skipping update to shared table $name.\n");
            return false;
        } else {
            return true;
        }
    }

    /**
     * Before 1.17, we used to handle updates via stuff like
     * $wgExtNewTables/Fields/Indexes. This is nasty :) We refactored a lot
     * of this in 1.17 but we want to remain back-compatible for a while. So
     * load up these old global-based things into our update list.
     *
     * @return array
     */
    protected function getOldGlobalUpdates()
    {
        global $wgExtNewFields, $wgExtNewTables, $wgExtModifiedFields,
            $wgExtNewIndexes;

        $updates = [];

        foreach ($wgExtNewTables as $tableRecord) {
            $updates[] = [
                'addTable', $tableRecord[0], $tableRecord[1], true
            ];
        }

        foreach ($wgExtNewFields as $fieldRecord) {
            $updates[] = [
                'addField', $fieldRecord[0], $fieldRecord[1],
                $fieldRecord[2], true
            ];
        }

        foreach ($wgExtNewIndexes as $fieldRecord) {
            $updates[] = [
                'addIndex', $fieldRecord[0], $fieldRecord[1],
                $fieldRecord[2], true
            ];
        }

        foreach ($wgExtModifiedFields as $fieldRecord) {
            $updates[] = [
                'modifyField', $fieldRecord[0], $fieldRecord[1],
                $fieldRecord[2], true
            ];
        }

        return $updates;
    }

    /**
     * Get an array of updates to perform on the database. Should return a
     * multi-dimensional array. The main key is the MediaWiki version (1.12,
     * 1.13...) with the values being arrays of updates, identical to how
     * updaters.inc did it (for now)
     *
     * @return array
     */
    abstract protected function getCoreUpdateList();

    /**
     * Append an SQL fragment to the open file handle.
     *
     * @param string $filename File name to open
     */
    public function copyFile($filename)
    {
        $this->db->sourceFile(
            $filename,
            null,
            null,
            __METHOD__,
            [ $this, 'appendLine' ]
        );
    }

    /**
     * Append a line to the open filehandle.  The line is assumed to
     * be a complete SQL statement.
     *
     * This is used as a callback for sourceLine().
     *
     * @param string $line Text to append to the file
     * @return bool False to skip actually executing the file
     * @throws MWException
     */
    public function appendLine($line)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Applies a SQL patch
     *
     * @param string $path Path to the patch file
     * @param bool $isFullPath Whether to treat $path as a relative or not
     * @param string $msg Description of the patch
     * @return bool False if patch is skipped.
     */
    protected function applyPatch($path, $isFullPath = false, $msg = null)
    {
        if ($msg === null) {
            $msg = "Applying $path patch";
        }
        if ($this->skipSchema) {
            $this->output("...skipping schema change ($msg).\n");

            return false;
        }

        $this->output("$msg ...");

        if (!$isFullPath) {
            $path = $this->patchPath($this->db, $path);
        }
        if ($this->fileHandle !== null) {
            $this->copyFile($path);
        } else {
            $this->db->sourceFile($path);
        }
        $this->output("done.\n");

        return true;
    }

    /**
     * Get the full path of a patch file. Originally based on archive()
     * from updaters.inc. Keep in mind this always returns a patch, as
     * it fails back to MySQL if no DB-specific patch can be found
     *
     * @param IDatabase $db
     * @param string $patch The name of the patch, like patch-something.sql
     * @return string Full path to patch file
     */
    public function patchPath(IDatabase $db, $patch)
    {
        global $IP;

        $dbType = $db->getType();
        if (file_exists("$IP/maintenance/$dbType/archives/$patch")) {
            return "$IP/maintenance/$dbType/archives/$patch";
        } else {
            return "$IP/maintenance/archives/$patch";
        }
    }

    /**
     * Add a new table to the database
     *
     * @param string $name Name of the new table
     * @param string $patch Path to the patch file
     * @param bool $fullpath Whether to treat $patch path as a relative or not
     * @return bool False if this was skipped because schema changes are skipped
     */
    protected function addTable($name, $patch, $fullpath = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a new field to an existing table
     *
     * @param string $table Name of the table to modify
     * @param string $field Name of the new field
     * @param string $patch Path to the patch file
     * @param bool $fullpath Whether to treat $patch path as a relative or not
     * @return bool False if this was skipped because schema changes are skipped
     */
    protected function addField($table, $field, $patch, $fullpath = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a new index to an existing table
     *
     * @param string $table Name of the table to modify
     * @param string $index Name of the new index
     * @param string $patch Path to the patch file
     * @param bool $fullpath Whether to treat $patch path as a relative or not
     * @return bool False if this was skipped because schema changes are skipped
     */
    protected function addIndex($table, $index, $patch, $fullpath = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Drop a field from an existing table
     *
     * @param string $table Name of the table to modify
     * @param string $field Name of the old field
     * @param string $patch Path to the patch file
     * @param bool $fullpath Whether to treat $patch path as a relative or not
     * @return bool False if this was skipped because schema changes are skipped
     */
    protected function dropField($table, $field, $patch, $fullpath = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Drop an index from an existing table
     *
     * @param string $table Name of the table to modify
     * @param string $index Name of the index
     * @param string $patch Path to the patch file
     * @param bool $fullpath Whether to treat $patch path as a relative or not
     * @return bool False if this was skipped because schema changes are skipped
     */
    protected function dropIndex($table, $index, $patch, $fullpath = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Rename an index from an existing table
     *
     * @param string $table Name of the table to modify
     * @param string $oldIndex Old name of the index
     * @param string $newIndex New name of the index
     * @param bool $skipBothIndexExistWarning Whether to warn if both the
     * old and the new indexes exist.
     * @param string $patch Path to the patch file
     * @param bool $fullpath Whether to treat $patch path as a relative or not
     * @return bool False if this was skipped because schema changes are skipped
     */
    protected function renameIndex(
        $table,
        $oldIndex,
        $newIndex,
        $skipBothIndexExistWarning,
        $patch,
        $fullpath = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If the specified table exists, drop it, or execute the
     * patch if one is provided.
     *
     * Public @since 1.20
     *
     * @param string $table Table to drop.
     * @param string|bool $patch String of patch file that will drop the table. Default: false.
     * @param bool $fullpath Whether $patch is a full path. Default: false.
     * @return bool False if this was skipped because schema changes are skipped
     */
    public function dropTable($table, $patch = false, $fullpath = false)
    {
        if (!$this->doTable($table)) {
            return true;
        }

        if ($this->db->tableExists($table, __METHOD__)) {
            $msg = "Dropping table $table";

            if ($patch === false) {
                $this->output("$msg ...");
                $this->db->dropTable($table, __METHOD__);
                $this->output("done.\n");
            } else {
                return $this->applyPatch($patch, $fullpath, $msg);
            }
        } else {
            $this->output("...$table doesn't exist.\n");
        }

        return true;
    }

    /**
     * Modify an existing field
     *
     * @param string $table Name of the table to which the field belongs
     * @param string $field Name of the field to modify
     * @param string $patch Path to the patch file
     * @param bool $fullpath Whether to treat $patch path as a relative or not
     * @return bool False if this was skipped because schema changes are skipped
     */
    public function modifyField($table, $field, $patch, $fullpath = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set any .htaccess files or equivilent for storage repos
     *
     * Some zones (e.g. "temp") used to be public and may have been initialized as such
     */
    public function setFileAccess()
    {
        $repo = RepoGroup::singleton()->getLocalRepo();
        $zonePath = $repo->getZonePath('temp');
        if ($repo->getBackend()->directoryExists([ 'dir' => $zonePath ])) {
            // If the directory was never made, then it will have the right ACLs when it is made
            $status = $repo->getBackend()->secure([
                'dir' => $zonePath,
                'noAccess' => true,
                'noListing' => true
            ]);
            if ($status->isOK()) {
                $this->output("Set the local repo temp zone container to be private.\n");
            } else {
                $this->output("Failed to set the local repo temp zone container to be private.\n");
            }
        }
    }

    /**
     * Purge the objectcache table
     */
    public function purgeCache()
    {
        global $wgLocalisationCacheConf;
        # We can't guarantee that the user will be able to use TRUNCATE,
        # but we know that DELETE is available to us
        $this->output("Purging caches...");
        $this->db->delete('objectcache', '*', __METHOD__);
        if ($wgLocalisationCacheConf['manualRecache']) {
            $this->rebuildLocalisationCache();
        }
        $blobStore = new MessageBlobStore();
        $blobStore->clear();
        $this->db->delete('module_deps', '*', __METHOD__);
        $this->output("done.\n");
    }

    /**
     * Check the site_stats table is not properly populated.
     */
    protected function checkStats()
    {
        $this->output("...site_stats is populated...");
        $row = $this->db->selectRow('site_stats', '*', [ 'ss_row_id' => 1 ], __METHOD__);
        if ($row === false) {
            $this->output("data is missing! rebuilding...\n");
        } elseif (isset($row->site_stats) && $row->ss_total_pages == -1) {
            $this->output("missing ss_total_pages, rebuilding...\n");
        } else {
            $this->output("done.\n");

            return;
        }
        SiteStatsInit::doAllAndCommit($this->db);
    }

    # Common updater functions

    /**
     * Sets the number of active users in the site_stats table
     */
    protected function doActiveUsersInit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Populates the log_user_text field in the logging table
     */
    protected function doLogUsertextPopulation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Migrate log params to new table and index for searching
     */
    protected function doLogSearchPopulation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Updates the timestamps in the transcache table
     * @return bool
     */
    protected function doUpdateTranscacheField()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Update CategoryLinks collation
     */
    protected function doCollationUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Migrates user options from the user table blob to user_properties
     */
    protected function doMigrateUserOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enable profiling table when it's turned on
     */
    protected function doEnableProfiling()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Rebuilds the localisation cache
     */
    protected function rebuildLocalisationCache()
    {
        /**
         * @var $cl RebuildLocalisationCache
         */
        $cl = $this->maintenance->runChild('RebuildLocalisationCache', 'rebuildLocalisationCache.php');
        $this->output("Rebuilding localisation cache...\n");
        $cl->setForce();
        $cl->execute();
        $this->output("done.\n");
    }

    /**
     * Turns off content handler fields during parts of the upgrade
     * where they aren't available.
     */
    protected function disableContentHandlerUseDB()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Turns content handler fields back on.
     */
    protected function enableContentHandlerUseDB()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
