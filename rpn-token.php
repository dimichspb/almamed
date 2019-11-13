<?php

require ("vendor/autoload.php");
$proxy = require ("proxy.php");

use GuzzleHttp\Exception\RequestException;

$client = new GuzzleHttp\Client();

$params = [
    'username' => '850829324948',
    'password' => '123456',
    'grant_type' => 'password',
    'scope' => 'profile',
    'client_id' => 'a1d9f6f9331640699cc07f2dc92a44b9',
    'client_secret' => 'k1wn1EzRuFGOxgbrumNO7oAmCJcUmAWIcU1f+jMnjKs=',
];

ob_start();
try {
    $response = $client->post('http://5.104.236.197:777/oauth/token', [
        'form_params' => $params,
        'proxy' => $proxy,
        'debug' => true,
    ]);
    $body = $response->getBody()->getContents();
} catch (RequestException $exception) {
    $body = $exception->getResponse()->getBody()->getContents();
} catch (\Exception $exception) {
    $body = $exception->getMessage();
}
$verbose = ob_get_contents();
ob_end_clean();
?>
<html lang="en">
<body>
<div style="width: 100%;">
    <label for="verbose">Verbose:</label>
    <textarea id="verbose" rows="10" readonly style="width: 100%"><?= $verbose ?></textarea>
</div>
<div style="width: 100%;">
    <label for="body">Body:</label>
    <textarea id="body" rows="30" readonly style="width: 100%;"><?= $body ?></textarea>
</div>
</body>
</html>

