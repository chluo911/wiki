<?php

/**
 * Class for localization update hooks and static methods.
 */
class LocalisationUpdate
{
    /**
     * Hook: LocalisationCacheRecacheFallback
     */
    public static function onRecacheFallback(LocalisationCache $lc, $code, array &$cache)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Hook: LocalisationCacheRecache
     */
    public static function onRecache(LocalisationCache $lc, $code, array &$cache)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a directory where updated translations are stored.
     *
     * @return string|false False if not configured.
     * @since 1.1
     */
    public static function getDirectory()
    {
        global $wgLocalisationUpdateDirectory, $wgCacheDirectory;

        return $wgLocalisationUpdateDirectory ?: $wgCacheDirectory;
    }

    /**
     * Returns a filename where updated translations are stored.
     *
     * @param string $language Language tag
     * @return string
     * @since 1.1
     */
    public static function getFilename($language)
    {
        return "l10nupdate-$language.json";
    }
}
