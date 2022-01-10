<?php

require_once '../vendor/autoload.php';

use AceleracaoDev\Pessoa;

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

$faker = Faker\Factory::create();

$pessoas = [
    new Pessoa(1, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(2, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(3, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(4, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
    new Pessoa(5, $faker->name(), $faker->email(), $faker->name(), $faker->name()),
];

$configuration = Configuration::forSymmetricSigner(
    // You may use any HMAC variations (256, 384, and 512)
    new Sha256(),
    // replace the value below with a key of your own!
    InMemory::base64Encoded('mBC5v1sOKVvbdEitdSBenu59nfNfhwkedkJVNabosTw=')
    // You may also override the JOSE encoder/decoder if needed by providing extra arguments here
);

foreach($pessoas as $pessoa) {
    
    $time = new DateTimeImmutable();

    $token = $configuration
        ->builder()
        ->issuedBy('http://localhost:8000/')
        ->permittedFor('http://localhost:8000/')
        ->identifiedBy('123456', true)
        ->issuedAt($time)
        ->canOnlyBeUsedAfter($time->modify('+1 minute'))
        ->expiresAt($time->modify('+1 hour'))
        ->withClaim('id', $pessoa->getId())
        ->withClaim('name', $pessoa->getNome())
        ->withClaim('email', $pessoa->getEmail())
        ->withClaim('funcao', $pessoa->getProfissao())
        ->withClaim('escolaridade', $pessoa->getEscolaridade())
        ->getToken($configuration->signer(), $configuration->signingKey());

    $pessoa->setToken($token->toString());

    echo "$pessoa <br>";

}
