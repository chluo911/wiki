<?php

// Custom Helper Interface ... noname arguments
// Template: {{helper1 article.url article.text}}
function helper1 ($args, $named) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

// Custom Helper Interface ... named arguments
// Template: {{helper1 url=article.url text=article.text [ur"l]=article.extra}}
function helper2 ($args, $named) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

// Block Custom Helper Interface ... 
// Template: {{helper3 articles}}
function helper3 ($cx, $args, $named) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

// Block Custom Helper Interface ... 
// Template: {{helper3 val=values odd=enable_odd}}
function helper4 ($cx, $args, $named) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

// Handlebars.js Custom Helper Interface ...
// Template: {{#myeach articles}}Article: ....{{/myeach}}
function myeach ($list, $options) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

// Simulate Javascript toString() behaviors
function jsraw ($i) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

?>
