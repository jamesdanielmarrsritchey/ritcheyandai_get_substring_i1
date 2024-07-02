<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/function.php';
$string = 'This is a test string to extract part of';
$start = 'to';
$end = 'part';
$return = extractSubstring($string, $start, $end);
var_dump($return);