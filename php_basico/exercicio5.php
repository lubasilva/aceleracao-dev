<?php
// Somar dois numeros e mutiplicar pelo primeiro numero
function soma($num1, $num2) {
    $soma = ($num1 + $num2) * $num1;
    return $soma;
}

echo "O resultado e: ", soma(3, 15);