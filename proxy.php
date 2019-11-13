<?php

$settings = [
    'host' => '94.247.131.22',
    'port' => 3128,
    'username' => 'almamed',
    'password' => 'e09rg7be90g87sdf',
];

/*$settings = [
    'hostname' => 'localhost',
    'port' => 3128,
];*/

$url = isset($settings['username']) && isset($settings['password'])?
    $settings['username'] . ':' . $settings['password'] . '@' . $settings['host'] . ':' . $settings['port']:
    $settings['host'] . ':' . $settings['port'];

return $url;