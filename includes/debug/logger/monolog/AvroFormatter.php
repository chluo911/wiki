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

use AvroIODatumWriter;
use AvroIOBinaryEncoder;
use AvroIOTypeException;
use AvroNamedSchemata;
use AvroSchema;
use AvroStringIO;
use AvroValidator;
use Monolog\Formatter\FormatterInterface;

/**
 * Log message formatter that uses the apache Avro format.
 *
 * @since 1.26
 * @author Erik Bernhardson <ebernhardson@wikimedia.org>
 * @copyright © 2015 Erik Bernhardson and Wikimedia Foundation.
 */
class AvroFormatter implements FormatterInterface
{
    /**
     * @var Magic byte to encode schema revision id.
     */
    const MAGIC = 0x0;
    /**
     * @var array Map from schema name to schema definition
     */
    protected $schemas;

    /**
     * @var AvroStringIO
     */
    protected $io;

    /**
     * @var AvroIOBinaryEncoder
     */
    protected $encoder;

    /**
     * @var AvroIODatumWriter
     */
    protected $writer;

    /**
     * @var array $schemas Map from Monolog channel to Avro schema.
     *  Each schema can be either the JSON string or decoded into PHP
     *  arrays.
     */
    public function __construct(array $schemas)
    {
        $this->schemas = $schemas;
        $this->io = new AvroStringIO('');
        $this->encoder = new AvroIOBinaryEncoder($this->io);
        $this->writer = new AvroIODatumWriter();
    }

    /**
     * Formats the record context into a binary string per the
     * schema configured for the records channel.
     *
     * @param array $record
     * @return string|null The serialized record, or null if
     *  the record is not valid for the selected schema.
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
     * Format a set of records into a list of binary strings
     * conforming to the configured schema.
     *
     * @param array $records
     * @return string[]
     */
    public function formatBatch(array $records)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the writer for the named channel
     *
     * @var string $channel Name of the schema to fetch
     * @return \AvroSchema|null
     */
    protected function getSchema($channel)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the writer for the named channel
     *
     * @var string $channel Name of the schema
     * @return int|null
     */
    public function getSchemaRevisionId($channel)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * convert an integer to a 64bits big endian long (Java compatible)
     * NOTE: certainly only compatible with PHP 64bits
     * @param int $id
     * @return string the binary representation of $id
     */
    private function encodeLong($id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
