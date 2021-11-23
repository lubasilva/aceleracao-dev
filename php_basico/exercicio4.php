<?php

$arr1 = ["1" => "valor1", "2" => "valor2"];
$arr2 = ["arr1" => "value1", "arr2" => "value2"];

echo "Array 1 <br>";
foreach($arr1 as $key => $ar1 ) {
    echo "Indice:  $key <br>"; 
    echo "Valor:  $ar1 <br>";
}

echo "<br>Array 1 <br>";
foreach($arr2 as $key => $ar1 ) {
    echo "Indice:  $key <br>"; 
    echo "Valor:  $ar1 <br>";
}

echo "<br> Merge Array <br>";
$arr = array_merge($arr1, $arr2);
var_export($arr);