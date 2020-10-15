<?php
/**
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

namespace MediaWiki\Logger\Monolog;

use Exception;
use Monolog\Formatter\LineFormatter as MonologLineFormatter;
use MWExceptionHandler;

/**
 * Formats incoming records into a one-line string.
 *
 * An 'exeception' in the log record's context will be treated specially.
 * It will be output for an '%exception%' placeholder in the format and
 * excluded from '%context%' output if the '%exception%' placeholder is
 * present.
 *
 * Exceptions that are logged with this formatter will optional have their
 * stack traces appended. If that is done, MWExceptionHandler::redactedTrace()
 * will be used to redact the trace information.
 *
 * @since 1.26
 * @author Bryan Davis <bd808@wikimedia.org>
 * @copyright © 2015 Bryan Davis and Wikimedia Foundation.
 */
class LineFormatter extends MonologLineFormatter
{

    /**
     * @param string $format The format of the message
     * @param string $dateFormat The format of the timestamp: one supported by DateTime::format
     * @param bool $allowInlineLineBreaks Whether to allow inline line breaks in log entries
     * @param bool $ignoreEmptyContextAndExtra
     * @param bool $includeStacktraces
     */
    public function __construct(
        $format = null,
        $dateFormat = null,
        $allowInlineLineBreaks = false,
        $ignoreEmptyContextAndExtra = false,
        $includeStacktraces = false
    ) {
        parent::__construct(
            $format,
            $dateFormat,
            $allowInlineLineBreaks,
            $ignoreEmptyContextAndExtra
        );
        $this->includeStacktraces($includeStacktraces);
    }

    /**
     * {@inheritdoc}
     */
    public function format(array $record)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert an Exception to a string.
     *
     * @param Exception $e
     * @return string
     */
    protected function normalizeException($e)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert an exception to an array of structured data.
     *
     * @param Exception $e
     * @return array
     */
    protected function exceptionAsArray(Exception $e)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert an array of Exception data to a string.
     *
     * @param array $e
     * @return string
     */
    protected function normalizeExceptionArray(array $e)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
