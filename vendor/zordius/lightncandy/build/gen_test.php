<?php

foreach (Array(
    'vendor/phpunit/phpunit/PHPUnitPHPUnit/Autoload.php',
    'PHPUnit/Autoload.php',
    'src/lightncandy.php'
) as $inc) {
    if (file_exists($inc)) {
       include_once($inc);
       break;
    }
}

genTestForClass('LightnCandy');
genTestForClass('LCRun3');

function genTestForClass($classname) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
?>
