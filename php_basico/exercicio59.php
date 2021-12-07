<?php

try {
    echo dividir(random_int(0, 20), random_int(0, 20));
} catch (Exception $e) {
    echo "Error: ". $e->getMessage();
    echo "<br>Codigo: ". $e->getCode();
}

function dividir($n1, $n2)
{
    if ($n1 == 0 || $n1 == 0) {
        throw new Exception('não é possivel fazer divisão por 0', 523);
    }
    return $n1 / $n2;
}