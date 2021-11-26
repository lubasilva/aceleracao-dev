<?php

function convertToCelsius($min, $max) {
    if(is_float($min) && is_float($max)) {
        echo 'MINIMA: ' .round(($min - 32) * 5/9,2) .'<br>' ;
        echo 'MAXIMA: ' .round(($max - 32) * 5/9,2) .'<br>';
    } else {
        echo 'A temperatura precisa de numeros de ponto flutuante';
    }
}

echo convertToCelsius(89, 91.3);