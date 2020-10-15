<?php

/**
 * Accepts a list of files and directories to search for
 * php files and generates $wgAutoloadLocalClasses or $wgAutoloadClasses
 * lines for all detected classes. These lines are written out
 * to an autoload.php file in the projects provided basedir.
 *
 * Usage:
 *
 *     $gen = new AutoloadGenerator( __DIR__ );
 *     $gen->readDir( __DIR__ . '/includes' );
 *     $gen->readFile( __DIR__ . '/foo.php' )
 *     $gen->getAutoload();
 */
class AutoloadGenerator
{
    const FILETYPE_JSON = 'json';
    const FILETYPE_PHP = 'php';

    /**
     * @var string Root path of the project being scanned for classes
     */
    protected $basepath;

    /**
     * @var ClassCollector Helper class extracts class names from php files
     */
    protected $collector;

    /**
     * @var array Map of file shortpath to list of FQCN detected within file
     */
    protected $classes = [];

    /**
     * @var string The global variable to write output to
     */
    protected $variableName = 'wgAutoloadClasses';

    /**
     * @var array Map of FQCN to relative path(from self::$basepath)
     */
    protected $overrides = [];

    /**
     * @param string $basepath Root path of the project being scanned for classes
     * @param array|string $flags
     *
     *  local - If this flag is set $wgAutoloadLocalClasses will be build instead
     *          of $wgAutoloadClasses
     */
    public function __construct($basepath, $flags = [])
    {
        if (!is_array($flags)) {
            $flags = [ $flags ];
        }
        $this->basepath = self::normalizePathSeparator(realpath($basepath));
        $this->collector = new ClassCollector;
        if (in_array('local', $flags)) {
            $this->variableName = 'wgAutoloadLocalClasses';
        }
    }

    /**
     * Force a class to be autoloaded from a specific path, regardless of where
     * or if it was detected.
     *
     * @param string $fqcn FQCN to force the location of
     * @param string $inputPath Full path to the file containing the class
     * @throws Exception
     */
    public function forceClassPath($fqcn, $inputPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $inputPath Path to a php file to find classes within
     * @throws Exception
     */
    public function readFile($inputPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $dir Path to a directory to recursively search
     *  for php files with either .php or .inc extensions
     */
    public function readDir($dir)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Updates the AutoloadClasses field at the given
     * filename.
     *
     * @param string $filename Filename of JSON
     *  extension/skin registration file
     * @return string Updated Json of the file given as the $filename parameter
     */
    protected function generateJsonAutoload($filename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates a PHP file setting up autoload information.
     *
     * @param {string} $commandName Command name to include in comment
     * @param {string} $filename of PHP file to put autoload information in.
     * @return string
     */
    protected function generatePHPAutoload($commandName, $filename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns all known classes as a string, which can be used to put into a target
     * file (e.g. extension.json, skin.json or autoload.php)
     *
     * @param string $commandName Value used in file comment to direct
     *  developers towards the appropriate way to update the autoload.
     * @return string
     */
    public function getAutoload($commandName = 'AutoloadGenerator')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the filename of the extension.json of skin.json, if there's any, or
     * otherwise the path to the autoload.php file in an array as the "filename"
     * key and with the type (AutoloadGenerator::FILETYPE_JSON or AutoloadGenerator::FILETYPE_PHP)
     * of the file as the "type" key.
     *
     * @return array
     */
    public function getTargetFileinfo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensure that Unix-style path separators ("/") are used in the path.
     *
     * @param string $path
     * @return string
     */
    protected static function normalizePathSeparator($path)
    {
        return str_replace('\\', '/', $path);
    }

    /**
     * Initialize the source files and directories which are used for the MediaWiki default
     * autoloader in {mw-base-dir}/autoload.php including:
     *  * includes/
     *  * languages/
     *  * maintenance/
     *  * mw-config/
     *  * /*.php
     */
    public function initMediaWikiDefault()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Reads PHP code and returns the FQCN of every class defined within it.
 */
class ClassCollector
{

    /**
     * @var string Current namespace
     */
    protected $namespace = '';

    /**
     * @var array List of FQCN detected in this pass
     */
    protected $classes;

    /**
     * @var array Token from token_get_all() that started an expect sequence
     */
    protected $startToken;

    /**
     * @var array List of tokens that are members of the current expect sequence
     */
    protected $tokens;

    /**
     * @var string $code PHP code (including <?php) to detect class names from
     * @return array List of FQCN detected within the tokens
     */
    public function getClasses($code)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Determine if $token begins the next expect sequence.
     *
     * @param array $token
     */
    protected function tryBeginExpect($token)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Accepts the next token in an expect sequence
     *
     * @param array
     */
    protected function tryEndExpect($token)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the string representation of the tokens within the
     * current expect sequence and resets the sequence.
     *
     * @return string
     */
    protected function implodeTokens()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
