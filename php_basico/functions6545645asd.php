<?php

function divisao($a, $b) {
    if(is_int($a) && is_int($b)) {
        if($b != 0) {
            echo $a / $b;
        } else {
            echo 'DIVISÃO POR ZERO';
        }
    } else {
        echo 'Entre somente com numeros inteiros';
    }
}