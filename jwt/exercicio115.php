<?php
//private key
$key = 'Ajhdkajsg665612AAA8]0';

// token
$header = [
    'typ' => 'JWT',
    'alg' => 'HS256',

];

//body 
$payload = [
    'exp' => (new DateTime('now'))->getTimestamp(),
    'uid' => 1,
    'email' => 'lucas@email.com',
    'nivel' => 'adm',
    'favoritos' => [

    ]
];

$header = json_encode($header);
$payload = json_encode($payload);

$header = base64_encode($header);
$payload = base64_encode($payload);

$sign = hash_hmac('sha256', $header. "." .$payload, $key, true);
$sign = base64_encode($sign);

print $header. "." .$payload. "." .$sign;