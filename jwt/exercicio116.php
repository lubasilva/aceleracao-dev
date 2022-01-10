<?php

require_once '../vendor/autoload.php';
// require_once 'Classes/Pessoa.php';

use AceleracaoDev\Pessoa;

$faker = Faker\Factory::create();

$pessoas = [
    new Pessoa(1, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(2, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(3, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(4, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(5, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(6, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(7, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(8, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(9, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(10, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(11, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(12, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(13, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(14, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(15, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
];

foreach($pessoas as $pessoa) {
    $key = 'asdasd';

    $header = [
        'alg' => 'HS256',
        'typ' => 'JWT'
    ];

    $payload = $pessoa;


    $header = json_encode($header);

    $header = base64_encode($header);
    $payload = base64_encode($payload);

    $sign = hash_hmac('sha256', $header . "." . $payload, $key, true);
    $sign = base64_encode($sign);

    $pessoa->setToken($header. "." .$payload. "." .$sign);
    var_export($pessoa);

}
