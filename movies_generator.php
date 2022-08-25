<?php

require "vendor/autoload.php";

$mongoDBClient = new MongoDB\Client("mongodb://localhost:27017");
$db = $mongoDBClient->selectDatabase("scope_movie");

$moviesCollection = $db->selectCollection("movies");

$moviesXML = simplexml_load_file('movies.xml');


foreach($moviesXML->children() as $movie) {

    $genres = array();
    foreach($movie->genres->children() as $genre) {
        array_push($genres, reset($genre));
    }

    $document = array(
        "id" => reset($movie->id),
        "title" => reset($movie->title),
        "description" => reset($movie->description),
        "language" => reset($movie->language),
        "minutes" => reset($movie->minutes),
        "rating" => reset($movie->rating),
        "year" => reset($movie->year),
        "uploaded" => reset($movie->uploaded),
        "genres" => $genres
    );
    $moviesCollection->insertOne($document);
}
