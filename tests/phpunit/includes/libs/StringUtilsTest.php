<?php

class StringUtilsTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers StringUtils::isUtf8
     * @dataProvider provideStringsForIsUtf8Check
     */
    public function testIsUtf8($expected, $string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Print high range characters as a hexadecimal
     * @param string $string
     * @return string
     */
    public function escaped($string)
    {
        $escaped = '';
        $length = strlen($string);
        for ($i = 0; $i < $length; $i++) {
            $char = $string[$i];
            $val = ord($char);
            if ($val > 127) {
                $escaped .= '\x' . dechex($val);
            } else {
                $escaped .= $char;
            }
        }

        return $escaped;
    }

    /**
     * See also "UTF-8 decoder capability and stress test" by
     * Markus Kuhn:
     * http://www.cl.cam.ac.uk/~mgk25/ucs/examples/UTF-8-test.txt
     */
    public static function provideStringsForIsUtf8Check()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
