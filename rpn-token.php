<?php

require ("vendor/autoload.php");
$proxy = require ("proxy.php");

$client = new GuzzleHttp\Client();

$params = [
    'username' => '850829324948',
    'password' => '123456',
    'grant_type' => 'password',
];

ob_start();
try {
    $response = $client->post('http://5.104.236.197:22999/oauth/token', [
        'form_params' => $params,
        'proxy' => $proxy,
        'debug' => true,
    ]);
    $body = $response->getBody();
} catch (\Exception $exception) {
    $body = $exception->getMessage();
}
$verbose = ob_get_contents();
ob_end_clean();
?>
<html>
<body>
<div style="width: 100%;">
    <label for="verbose">Verbose:</label>
    <textarea id="verbose" readonly><?= $verbose ?></textarea>
</div>
<div style="width: 100%;">
    <label for="body">Body:</label>
    <textarea id="body"><?= $body ?></textarea>
</div>
</body>
</html>

