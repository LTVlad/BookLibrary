@extends('layouts.layout')

@section('title')

    Search

@endsection

@section('content')

    <h1>Search</h1>

@endsection

<?php

// your API key here
$API_KEY = 'AIzaSyB_RQPrt1VdNVXqyBIwg1a6_MmOdpS3hrw';

// this will include the libraries that were gotten with composer or downloaded directly
require_once 'C:\Users\Vlad\Documents\GitHub\BookLibrary\BookLibrary\vendor\autoload.php';

// instantiate the Google API Client
$client = new Google_Client();
$client->setApplicationName("Google Books with PHP Tutorial Application");
$client->setDeveloperKey( $API_KEY );


$service = new Google_Service_Books($client);

// set options for your request
$optParams = [];

// make the API call to retrieve some search results
$results = $service->volumes->listVolumes('Hobbit', $optParams);

foreach ( $results as $item ) {
    echo $item['volumeInfo']['title'], "<br /> \n";
    echo '<a href="' . $item['volumeInfo']['previewLink'] . '">' . $item['volumeInfo']['previewLink'] . '</a>';
    echo '<pre>';
    // useful for debugging and checking which fields actually are in each item of the response

    echo '</pre>';
}
?>