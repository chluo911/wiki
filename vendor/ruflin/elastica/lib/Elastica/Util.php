<?php

namespace Elastica;

/**
 * Elastica tools.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Oleg Zinchenko <olegz@default-value.com>
 * @author Roberto Nygaard <roberto@nygaard.es>
 */
class Util
{
    /**
     * Replace the following reserved words: AND OR NOT
     * and
     * escapes the following terms: + - && || ! ( ) { } [ ] ^ " ~ * ? : \.
     *
     * @link http://lucene.apache.org/java/2_4_0/queryparsersyntax.html#Boolean%20operators
     * @link http://lucene.apache.org/java/2_4_0/queryparsersyntax.html#Escaping%20Special%20Characters
     *
     * @param string $term Query term to replace and escape
     *
     * @return string Replaced and escaped query term
     */
    public static function replaceBooleanWordsAndEscapeTerm($term)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Escapes the following terms (because part of the query language)
     * + - && || ! ( ) { } [ ] ^ " ~ * ? : \ < >.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-query-string-query.html#_reserved_characters
     *
     * @param string $term Query term to escape
     *
     * @return string Escaped query term
     */
    public static function escapeTerm($term)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Replace the following reserved words (because part of the query language)
     * AND OR NOT.
     *
     * @link http://lucene.apache.org/java/2_4_0/queryparsersyntax.html#Boolean%20operators
     *
     * @param string $term Query term to replace
     *
     * @return string Replaced query term
     */
    public static function replaceBooleanWords($term)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts a snake_case string to CamelCase.
     *
     * For example: hello_world to HelloWorld
     *
     * @param string $string snake_case string
     *
     * @return string CamelCase string
     */
    public static function toCamelCase($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts a CamelCase string to snake_case.
     *
     * For Example HelloWorld to hello_world
     *
     * @param string $string CamelCase String to Convert
     *
     * @return string SnakeCase string
     */
    public static function toSnakeCase($string)
    {
        $string = preg_replace('/([A-Z])/', '_$1', $string);

        return strtolower(substr($string, 1));
    }

    /**
     * Converts given time to format: 1995-12-31T23:59:59Z.
     *
     * This is the lucene date format
     *
     * @param int $date Date input (could be string etc.) -> must be supported by strtotime
     *
     * @return string Converted date string
     */
    public static function convertDate($date)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert a \DateTime object to format: 1995-12-31T23:59:59Z+02:00.
     *
     * Converts it to the lucene format, including the appropriate TimeZone
     *
     * @param \DateTime $dateTime
     * @param bool      $includeTimezone
     *
     * @return string
     */
    public static function convertDateTimeObject(\DateTime $dateTime, $includeTimezone = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tries to guess the name of the param, based on its class
     * Example: \Elastica\Filter\HasChildFilter => has_child.
     *
     * @param string|object Class or Class name
     *
     * @return string parameter name
     */
    public static function getParamName($class)
    {
        if (is_object($class)) {
            $class = get_class($class);
        }

        $parts = explode('\\', $class);
        $last = array_pop($parts);
        $last = preg_replace('/(Query|Filter)$/', '', $last);
        $name = self::toSnakeCase($last);

        return $name;
    }

    /**
     * Converts Request to Curl console command.
     *
     * @param Request $request
     *
     * @return string
     */
    public static function convertRequestToCurlCommand(Request $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
