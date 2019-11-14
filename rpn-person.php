<?php

require ("vendor/autoload.php");
$proxy = require ("proxy.php");

use GuzzleHttp\Exception\RequestException;

$client = new GuzzleHttp\Client();

$params = [
    'fioiin' => '100628650506',
    //'access_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6Ikh5czZZcEdSWVVEUkVzNXBheW1BNFJWdERvWSJ9.eyJjbGllbnRfaWQiOiJhMWQ5ZjZmOTMzMTY0MDY5OWNjMDdmMmRjOTJhNDRiOSIsImNsaWVudF90eXBlIjoiaW50Iiwic3ViIjoiYWZmZWQwZjctNWE2Mi1lOTExLTgwZmItMDA1MDU2YmNlMjE2IiwiYW1yIjoicGFzc3dvcmQiLCJhdXRoX3RpbWUiOiIxNTczNzI2ODQ1IiwiaWRwIjoiYXV0aHNydiIsInJvbGUiOlsiQWxsb3dHZXRNb0luZm9JdGVtcyIsIkFsbG93R2V0TU9MaXN0QnlPYmxDb2RlIiwiQWxsb3dHZXRCZWRIaXN0b3J5IiwiQWxsb3dHZXRCZWRMaXN0IiwiQWxvb3dHZXRGdW5jU3RydWN0TGlzdCIsIkFsbG93R2V0Um9vbUxpc3QiLCJBbGxvd0dldFBlcnNvbmFsTGlzdCIsIkFsbG93R2V0TU9MaXN0IiwiUmVwdWJsaWNMZXZlbCJdLCJuYW1lIjoiODUwODI5MzI0OTQ4IiwiZmlyc3RfbmFtZSI6ItCR0JDQotCr0KDQk9CQ0JvQmCIsImxhc3RfbmFtZSI6ItCe0JLQldCn0JrQmNCdIiwibWlkZGxlX25hbWUiOiLQndCj0KDQkdCe0JvQkNCi0KPQm9CrIiwiZW1haWwiOiJvLnZhdHV0aW5AYWktZ3JvdXAua3oiLCJlbWFpbF92ZXJpZmllZCI6IjEiLCJwb3N0X2lkIjoiNDU1MDAwMDAwMDExOTk1MjAiLCJwb3N0X2Z1bmNfaWQiOiI0MyIsInBvc3RfbmFtZSI6ItCX0LDQvC4g0LTQtdC60LDQvdCwINGE0LDQutGD0LvRjNGC0LXRgtCwIiwicGVyc29uX2lkIjo0MDA0OTMwOTMsImdlbmRlciI6Ik0iLCJiaXJ0aGRhdGUiOiIyOS4wOC4xOTg1IiwicGVyc29uX2lpbiI6Ijg1MDgyOTMyNDk0OCIsIm9oY19pZCI6IjQ1NTAwMDAwMDAwMDAwNzk3Iiwib2hjX25hbWUiOiLQotCe0J4gXCJBbG1hIElubm92YXRpb24gR3JvdXBcIiIsIm9oY190eXBlX2lkIjoiNSIsIm9oY19jb2RlIjoiMjMzNCIsIm9oY19yZWdpb25faWQiOiIxNSIsIm9oY19zdGF0ZV9pZCI6IjE1Iiwib2hjX3N1YmplY3RfaWQiOiIxNjEiLCJvaGNfc3Vib3JkX2lkIjoiNCIsIm9oY19zdGF0ZV9rYXRvIjoiNzUwMDAwMDAwIiwib2hjX2ZzX2lkIjoiNDU1MDAwMDAwMDAwMjAyODEiLCJvaGNfZnNfbmFtZSI6ItCQ0LTQvNC40L3QuNGB0YLRgNCw0YbQuNGPICIsImlzcyI6Imh0dHA6Ly8xOTIuMTY4LjM0LjEzODo3NzciLCJhdWQiOiJodHRwOi8vMTkyLjE2OC4zNC4xMzg6Nzc3L3Jlc291cmNlcyIsImV4cCI6MTU3Mzc4NDQ0NSwibmJmIjoxNTczNzI2ODQ1fQ.Bcrp8NRB-8M06xQM_ZMuAQX2WcRICGsXIKGXX1GApWBH92TT31erDEMdSg6mA_Ex6A9JxGC91t7PjA1ciYDb2RC2KPlo2gTn5Wd476rOExPHrd3VkCAccakvWtFDVe7S-6kHHQ4QvebWaOONX55ad56tHawiC_pOkFqWbVw_1joU_u8P3wLginaw52Gsh4ED9HCGAhMg5n8MouRmv_VH7_ukU8jtnCXLCgfsgYh3Nuzv2GWTNOiWihmRKBDNhxwQ__xAsC3wR2S4RlmT4eoOUSCmsIgKzwBnf0U8MTc9Vg9A7RVJDKcZvexg3NWORbfc4OlL2IvYqMJ6XNBwV9a2SA',
];

ob_start();
try {
    $response = $client->get('http://5.104.236.197:22999/services/api/Person', [
        'query' => $params,
        'proxy' => $proxy,
        'debug' => true,
        'headers' => [
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6Ikh5czZZcEdSWVVEUkVzNXBheW1BNFJWdERvWSJ9.eyJjbGllbnRfaWQiOiJhMWQ5ZjZmOTMzMTY0MDY5OWNjMDdmMmRjOTJhNDRiOSIsImNsaWVudF90eXBlIjoiaW50Iiwic3ViIjoiYWZmZWQwZjctNWE2Mi1lOTExLTgwZmItMDA1MDU2YmNlMjE2IiwiYW1yIjoicGFzc3dvcmQiLCJhdXRoX3RpbWUiOiIxNTczNzI2ODQ1IiwiaWRwIjoiYXV0aHNydiIsInJvbGUiOlsiQWxsb3dHZXRNb0luZm9JdGVtcyIsIkFsbG93R2V0TU9MaXN0QnlPYmxDb2RlIiwiQWxsb3dHZXRCZWRIaXN0b3J5IiwiQWxsb3dHZXRCZWRMaXN0IiwiQWxvb3dHZXRGdW5jU3RydWN0TGlzdCIsIkFsbG93R2V0Um9vbUxpc3QiLCJBbGxvd0dldFBlcnNvbmFsTGlzdCIsIkFsbG93R2V0TU9MaXN0IiwiUmVwdWJsaWNMZXZlbCJdLCJuYW1lIjoiODUwODI5MzI0OTQ4IiwiZmlyc3RfbmFtZSI6ItCR0JDQotCr0KDQk9CQ0JvQmCIsImxhc3RfbmFtZSI6ItCe0JLQldCn0JrQmNCdIiwibWlkZGxlX25hbWUiOiLQndCj0KDQkdCe0JvQkNCi0KPQm9CrIiwiZW1haWwiOiJvLnZhdHV0aW5AYWktZ3JvdXAua3oiLCJlbWFpbF92ZXJpZmllZCI6IjEiLCJwb3N0X2lkIjoiNDU1MDAwMDAwMDExOTk1MjAiLCJwb3N0X2Z1bmNfaWQiOiI0MyIsInBvc3RfbmFtZSI6ItCX0LDQvC4g0LTQtdC60LDQvdCwINGE0LDQutGD0LvRjNGC0LXRgtCwIiwicGVyc29uX2lkIjo0MDA0OTMwOTMsImdlbmRlciI6Ik0iLCJiaXJ0aGRhdGUiOiIyOS4wOC4xOTg1IiwicGVyc29uX2lpbiI6Ijg1MDgyOTMyNDk0OCIsIm9oY19pZCI6IjQ1NTAwMDAwMDAwMDAwNzk3Iiwib2hjX25hbWUiOiLQotCe0J4gXCJBbG1hIElubm92YXRpb24gR3JvdXBcIiIsIm9oY190eXBlX2lkIjoiNSIsIm9oY19jb2RlIjoiMjMzNCIsIm9oY19yZWdpb25faWQiOiIxNSIsIm9oY19zdGF0ZV9pZCI6IjE1Iiwib2hjX3N1YmplY3RfaWQiOiIxNjEiLCJvaGNfc3Vib3JkX2lkIjoiNCIsIm9oY19zdGF0ZV9rYXRvIjoiNzUwMDAwMDAwIiwib2hjX2ZzX2lkIjoiNDU1MDAwMDAwMDAwMjAyODEiLCJvaGNfZnNfbmFtZSI6ItCQ0LTQvNC40L3QuNGB0YLRgNCw0YbQuNGPICIsImlzcyI6Imh0dHA6Ly8xOTIuMTY4LjM0LjEzODo3NzciLCJhdWQiOiJodHRwOi8vMTkyLjE2OC4zNC4xMzg6Nzc3L3Jlc291cmNlcyIsImV4cCI6MTU3Mzc4NDQ0NSwibmJmIjoxNTczNzI2ODQ1fQ.Bcrp8NRB-8M06xQM_ZMuAQX2WcRICGsXIKGXX1GApWBH92TT31erDEMdSg6mA_Ex6A9JxGC91t7PjA1ciYDb2RC2KPlo2gTn5Wd476rOExPHrd3VkCAccakvWtFDVe7S-6kHHQ4QvebWaOONX55ad56tHawiC_pOkFqWbVw_1joU_u8P3wLginaw52Gsh4ED9HCGAhMg5n8MouRmv_VH7_ukU8jtnCXLCgfsgYh3Nuzv2GWTNOiWihmRKBDNhxwQ__xAsC3wR2S4RlmT4eoOUSCmsIgKzwBnf0U8MTc9Vg9A7RVJDKcZvexg3NWORbfc4OlL2IvYqMJ6XNBwV9a2SA',
        ]
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

