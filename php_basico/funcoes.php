;<?php

function soma($num1, $num2) {
    return $num1 + $num2;
}

function imparPar($num) {
    $resp = $num % 2 == 0 ? 'O numero e par' : 'O numero e impar';
    return $resp;
}

function countChar($var) {
    return strlen($var);
}