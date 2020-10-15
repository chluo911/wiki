<?php

require_once __DIR__ . '/../vendor/autoload.php';

$testSuiteJSON = file_get_contents( __DIR__ . '/../tests/JSPHP-suite.json' );
$testSuite = json_decode( $testSuiteJSON, true );
$testSuiteOutput = [];

// @codingStandardsIgnoreStart
function new_OOUI( $class, $config = array() ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
// @codingStandardsIgnoreStart
function unstub( &$value ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
// Keep synchronized with tests/index.php
$themes = [ 'ApexTheme', 'MediaWikiTheme' ];
foreach ( $themes as $theme ) {
	OOUI\Theme::setSingleton( new_OOUI( $theme ) );
	foreach ( $testSuite as $className => $tests ) {
		foreach ( $tests as $test ) {
			// Unstub placeholders
			$config = $test['config'];
			array_walk_recursive( $config, 'unstub' );
			$config['infusable'] = true;
			$instance = new_OOUI( $test['class'], $config );
			$testSuiteOutput[$theme][$className][] = "$instance";
		}
	}
}

$testSuiteOutputJSON = json_encode( $testSuiteOutput, JSON_PRETTY_PRINT );

echo "var testSuiteConfigs = $testSuiteJSON;\n\n";
echo "var testSuitePHPOutput = $testSuiteOutputJSON;\n\n";
echo file_get_contents( __DIR__ . '/../tests/JSPHP.test.karma.js' );
