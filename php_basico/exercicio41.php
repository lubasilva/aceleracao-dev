<?php

$json = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/paises');

$fp = fopen('paises.txt', 'w+');
fwrite($fp, $json);
fclose($fp);