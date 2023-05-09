<?php

// $searchTerm = $_GET['movie'];
$url = "https://imdb-api.com/en/API/SearchMovie/k_ps8row3j/Inception";
$response = file_get_contents($url);
$results = json_decode($response, true);

var_dump($results);
