<?php

$nums = [];
for($i = 0; $i < 15; $i++) {
    $nums[$i] = random_int(0, 50);
}

foreach ($nums as $num) {
    imparPar($num);
    try {
    } catch(Exception $e) {
        echo "Error: ". $e->getMessage();
    }
}

function imparPar($num)
{
    if ($num % 2 == 1) {
        throw new Exception("Número não válido para essa operação", 535);
    }

    return true;
}