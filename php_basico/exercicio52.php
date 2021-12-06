<?php

$arr1 = [];
$arr2 = [];

for ($i = 0; $i < 20; $i++) {
    array_push($arr1, rand(-50,50));
    array_push($arr2, rand(-50,50));
}


$file = fopen("arrays.txt", "w+");
for ($i = 0; $i < 20; $i++) {
    $resultado = soma($arr1[$i], $arr2[$i]);
    fwrite($file, $arr1[$i]. ' , ' .$arr2[$i]. ' = ' .$resultado. PHP_EOL);
    
}
fclose($file);

function soma($num1, $num2) {
    $resultado = $num1 + $num2;

    if($resultado < 0) {
        $resultado = 0;
    }

    return $resultado;
}