<?php

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ComposerVersionNormalizer
{

    /**
     * Ensures there is a dash in between the version and the stability suffix.
     *
     * Examples:
     * - 1.23RC => 1.23-RC
     * - 1.23alpha => 1.23-alpha
     * - 1.23alpha3 => 1.23-alpha3
     * - 1.23-beta => 1.23-beta
     *
     * @param string $version
     *
     * @return string
     * @throws InvalidArgumentException
     */
    public function normalizeSuffix($version)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensures the version has four levels.
     * Version suffixes are supported, as long as they start with a dash.
     *
     * Examples:
     * - 1.19 => 1.19.0.0
     * - 1.19.2.3 => 1.19.2.3
     * - 1.19-alpha => 1.19.0.0-alpha
     * - 1337 => 1337.0.0.0
     *
     * @param string $version
     *
     * @return string
     * @throws InvalidArgumentException
     */
    public function normalizeLevelCount($version)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
