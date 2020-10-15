<?php
/**
 * Show profiling data.
 *
 * Copyright 2005 Kate Turner.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @file
 */

// This endpoint is supposed to be independent of request cookies and other
// details of the session. Log warnings for violations of the no-session
// constraint.
define('MW_NO_SESSION', 'warn');

ini_set('zlib.output_compression', 'off');

$wgEnableProfileInfo = false;
require __DIR__ . '/includes/WebStart.php';

header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Profiling data</title>
	<style>
		/* noc.wikimedia.org/base.css */

		* {
			margin: 0;
			padding: 0;
		}

		body {
			padding: 0.5em 1em;
			background: #fff;
			font: 14px/1.6 sans-serif;
			color: #333;
		}

		p, ul, ol, table {
			margin: 0.5em 0;
		}

		a {
			color: #0645AD;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		/*!
		 * Bootstrap v2.1.1
		 *
		 * Copyright 2012 Twitter, Inc
		 * Licensed under the Apache License v2.0
		 * http://www.apache.org/licenses/LICENSE-2.0
		 *
		 * Designed and built with all the love in the world @twitter by @mdo and @fat.
		 */

		table {
			max-width: 100%;
			background-color: transparent;
			border-collapse: collapse;
			border-spacing: 0;
		}

		.table {
			width: 100%;
			margin-bottom: 20px;
		}

		.table th,
		.table td {
			padding: 0.1em;
			text-align: left;
			vertical-align: top;
			border-top: 1px solid #ddd;
		}

		.table th {
			font-weight: bold;
		}

		.table thead th {
			vertical-align: bottom;
		}

		.table thead:first-child tr:first-child th,
		.table thead:first-child tr:first-child td {
			border-top: 0;
		}

		.table tbody + tbody {
			border-top: 2px solid #ddd;
		}

		.table-condensed th,
		.table-condensed td {
			padding: 4px 5px;
		}

		.table-striped tbody tr:nth-child(odd) td,
		.table-striped tbody tr:nth-child(odd) th {
			background-color: #f9f9f9;
		}

		.table-hover tbody tr:hover td,
		.table-hover tbody tr:hover th {
			background-color: #f5f5f5;
		}

		hr {
			margin: 20px 0;
			border: 0;
			border-top: 1px solid #eee;
			border-bottom: 1px solid #fff;
		}
	</style>
</head>
<body>
<?php

if (!$wgEnableProfileInfo) {
    echo '<p>Disabled</p>'
        . '</body></html>';
    exit(1);
}

$dbr = wfGetDB(DB_SLAVE);

if (!$dbr->tableExists('profiling')) {
    echo '<p>No <code>profiling</code> table exists, so we can\'t show you anything.</p>'
        . '<p>If you want to log profiling data, enable <code>$wgProfiler[\'output\'] = \'db\'</code>'
        . ' in your StartProfiler.php and run <code>maintenance/update.php</code> to'
        . ' create the profiling table.'
        . '</body></html>';
    exit(1);
}

$expand = [];
if (isset($_REQUEST['expand'])) {
    foreach (explode(',', $_REQUEST['expand']) as $f) {
        $expand[$f] = true;
    }
}

// @codingStandardsIgnoreStart
class profile_point
{
    // @codingStandardsIgnoreEnd

    public $name;
    public $count;
    public $time;
    public $children;

    public static $totaltime;
    public static $totalmemory;
    public static $totalcount;

    public function __construct($name, $count, $time, $memory)
    {
        $this->name = $name;
        $this->count = $count;
        $this->time = $time;
        $this->memory = $memory;
        $this->children = [];
    }

    public function add_child($child)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function display($expand, $indent = 0.0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function name()
    {
        return $this->name;
    }

    public function count()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function time()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function memory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function timePerCall()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function memoryPerCall()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function callsPerRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function timePerRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function memoryPerRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function fmttime()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
};

function compare_point(profile_point $a, profile_point $b)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

$sorts = [ 'time', 'memory', 'count', 'calls_per_req', 'name',
    'time_per_call', 'memory_per_call', 'time_per_req', 'memory_per_req' ];
$sort = 'time';
if (isset($_REQUEST['sort']) && in_array($_REQUEST['sort'], $sorts)) {
    $sort = $_REQUEST['sort'];
}

$res = $dbr->select(
    'profiling',
    '*',
    [],
    'profileinfo.php',
    [ 'ORDER BY' => 'pf_name ASC' ]
);

if (isset($_REQUEST['filter'])) {
    $filter = $_REQUEST['filter'];
} else {
    $filter = '';
}

?>
<form method="get" action="profileinfo.php">
	<p>
		<input type="text" name="filter" value="<?php echo htmlspecialchars($filter); ?>">
		<input type="hidden" name="sort" value="<?php echo htmlspecialchars($sort); ?>">
		<input type="hidden" name="expand" value="<?php
            echo htmlspecialchars(implode(",", array_keys($expand)));
        ?>">
		<input type="submit" value="Filter">
	</p>
</form>

<table class="mw-profileinfo-table table table-striped table-hover">
	<thead>
	<tr>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'name');
        ?>">Name</a></th>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'time');
        ?>">Time (%)</a></th>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'memory');
        ?>">Memory (%)</a></th>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'count');
        ?>">Count</a></th>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'calls_per_req');
        ?>">Calls/req</a></th>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'time_per_call');
        ?>">ms/call</a></th>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'memory_per_call');
        ?>">kb/call</a></th>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'time_per_req');
        ?>">ms/req</a></th>
		<th><a href="<?php
            echo getEscapedProfileUrl(false, 'memory_per_req');
        ?>">kb/req</a></th>
	</tr>
	</thead>
	<tbody>
	<?php
    profile_point::$totaltime = 0.0;
    profile_point::$totalcount = 0;
    profile_point::$totalmemory = 0.0;

    function getEscapedProfileUrl($_filter = false, $_sort = false, $_expand = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    $points = [];
    $queries = [];
    $sqltotal = 0.0;

    $last = false;
    foreach ($res as $o) {
        $next = new profile_point($o->pf_name, $o->pf_count, $o->pf_time, $o->pf_memory);
        if ($next->name() == '-total' || $next->name() == 'main()') {
            profile_point::$totaltime = $next->time();
            profile_point::$totalcount = $next->count();
            profile_point::$totalmemory = $next->memory();
        }
        if ($last !== false) {
            if (preg_match('/^' . preg_quote($last->name(), '/') . '/', $next->name())) {
                $last->add_child($next);
                continue;
            }
        }
        $last = $next;
        if (preg_match('/^query: /', $next->name()) || preg_match('/^query-m: /', $next->name())) {
            $sqltotal += $next->time();
            $queries[] = $next;
        } else {
            $points[] = $next;
        }
    }

    $s = new profile_point('SQL Queries', 0, $sqltotal, 0, 0);
    foreach ($queries as $q) {
        $s->add_child($q);
    }
    $points[] = $s;

    // @codingStandardsIgnoreStart
    @usort($points, 'compare_point');
    // @codingStandardsIgnoreEnd

    foreach ($points as $point) {
        if (strlen($filter) && !strstr($point->name(), $filter)) {
            continue;
        }

        $point->display($expand);
    }
    ?>
	</tbody>
</table>
<hr />
<p>Total time: <code><?php printf('%5.02f', profile_point::$totaltime); ?></code></p>

<p>Total memory: <code><?php printf('%5.02f', profile_point::$totalmemory / 1024); ?></code></p>
<hr />
</body>
</html>
