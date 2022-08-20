<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb://localhost:2717");

$db = $client->selectDatabase("test");

echo "DB Selected :test";
$collection = $db->selectCollection("user");


$document = array(
    "name" => "Theruni",
    "password" => "1244"
);

$collection->insertOne($document);

echo "Succeed";



// echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";


// $client = new MongoDB\Client("mongodb://127.0.0.1/");
// $dbs = $client->listDatabases();

