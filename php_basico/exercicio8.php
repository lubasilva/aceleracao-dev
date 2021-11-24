<?php

$num = -1;


if(is_numeric($num)){
    if($num < 0) {
        echo "Valor negativo";
    } elseif ($num > 0) {
        echo "Valor positivo";
    } else {
        echo "Valor igual a Zero";
    }
}
