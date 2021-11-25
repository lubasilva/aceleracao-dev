<?php

$json = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/distritos');


var_export(json_decode(json_encode($json, true)));