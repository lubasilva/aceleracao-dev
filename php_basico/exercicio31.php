<?php

$json = json_decode(file_get_contents('https://rickandmortyapi.com/api'), true);

if(!empty($json)) {
    if(is_array($json)) {
        var_dump($json);
    } else {
        echo 'Este dado não e um array';
    }
} else {
    echo 'Você não pode continua';
}