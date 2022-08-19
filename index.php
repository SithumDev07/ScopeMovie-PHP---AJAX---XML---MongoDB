<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$xml = simplexml_load_file('movies.xml');
print_r($xml);
