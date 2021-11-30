<?php

$urls = ["https://random-data-api.com/api/stripe/random_stripe",
"https://random-data-api.com/api/app/random_app",
"https://random-data-api.com/api/beer/random_beer",
"https://random-data-api.com/api/commerce/random_commerce",
"https://random-data-api.com/api/device/random_device",
"https://random-data-api.com/api/subscription/random_subscription"];

$fp = fopen('api.txt', 'a+');
foreach ($urls as $url) {
    $json = file_get_contents($url);
    fwrite($fp, $json.PHP_EOL);
}

fclose($fp);

$file = json_encode(file_get_contents('api.txt'));


var_export($file);
