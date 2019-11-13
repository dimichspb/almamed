<?php

require ("vendor/autoload.php");
$proxy = require ("proxy.php");

$client = new GuzzleHttp\Client();

$params = [
    'username' => '850829324948',
    'password' => '123456',
    'grant_type' => 'password',
];

$response = $client->post('http://5.104.236.197:777/oauth/token', [
    'form_params' => $params,
    'proxy' => $proxy,
    'debug' => true,
]);

echo $response->getBody();

