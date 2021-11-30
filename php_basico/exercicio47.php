<?php


$json = file_get_contents("https://random-data-api.com/api/business_credit_card/random_card");
$json = json_decode($json, true);

$fp = fopen('cartao.txt', 'w+');
foreach ($json as $content) {
    fwrite($fp, $content);
}

fclose($fp);

$file = json_encode(file_get_contents('cartao.txt'));

var_export($file);

