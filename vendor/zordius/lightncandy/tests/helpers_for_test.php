<?php

// Class for customized LCRun
class MyLCRunClass extends LCRun3 {
    public static function raw($cx, $v) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

// Classes for inputs or helpers
class myClass {
    function test() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function helper2($arg) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function __call($method, $args) {
        return "-- $method:" . print_r($args, true);
    }
}

class foo {
    public $prop = 'Yes!';

    function bar() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class twoDimensionIterator implements Iterator {
    private $position = 0;
    private $x = 0;
    private $y = 0;
    private $w = 0;
    private $h = 0;

    public function __construct($w, $h) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function rewind() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function current() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function key() {
        return $this->x . 'x' . $this->y;
    }

    function next() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    function valid() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

// Custom helpers
function helper1($arg) {
    $arg = is_array($arg) ? 'Array' : $arg;
    return "-$arg-";
}                                                                                                                                          
function alink($u, $t) {
    $u = is_array($u) ? 'Array' : $u;
    $t = is_array($t) ? 'Array' : $t;
    return "<a href=\"$u\">$t</a>";
}

 function meetup_date_format() {
    return "OKOK~1";
}

function  meetup_date_format2() {
    return "OKOK~2";
}

function        meetup_date_format3 () {
    return "OKOK~3";
}

function	meetup_date_format4(){
    return "OKOK~4";};


function test_array ($input) {
   return is_array($input[0]) ? 'IS_ARRAY' : 'NOT_ARRAY';
}

function test_join ($input) {
   return join('.', $input[0]);
}

// Custom helpers for handlebars (should be used in hbhelpers)
function myif ($conditional, $options) {
    if ($conditional) {
        return $options['fn']();
    } else {
        return $options['inverse']();
    }
}

function mywith ($context, $options) {
    return $options['fn']($context);
}

function myeach ($context, $options) {
    $ret = '';
    foreach ($context as $cx) {
        $ret .= $options['fn']($cx);
    }
    return $ret;
}

function mylogic ($input, $yes, $no, $options) {
    if ($input === true) {
        return $options['fn']($yes);
    } else {
        return $options['inverse']($no);
    }
}

function my_private_each ($context, $options) {
    $data = $options['data'];
    $out = '';
    foreach ($context as $idx => $cx) {
        $data['index'] = $idx;
        $out .= $options['fn']($cx, Array('data' => $data));
    }
    return $out;
}

function mydash ($a, $b) {
    return "$a-$b";
}

function myjoin ($a, $b) {
    return "$a$b";
}

function getroot ($options) {
    return $options['data']['root'];
}

?>
