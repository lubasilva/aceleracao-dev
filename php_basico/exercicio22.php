<?php

$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = [7,8,9];
$arr4 = [10,11,12];
$arr5 = [13,14,15];

echo "array 1 <br>";
foreach ($arr1 as $key => $arr) {
    echo "Indice: $key | Valor: $arr <br>";
}

echo "<br> array 2 <br>";
foreach ($arr2 as $key => $arr) {
    echo "Indice: $key | Valor: $arr <br>";
}

echo "<br> array 3 <br>";
foreach ($arr3 as $key => $arr) {
    echo "Indice: $key | Valor: $arr <br>";
}

echo "<br> array 4 <br>";
foreach ($arr4 as $key => $arr) {
    echo "Indice: $key | Valor: $arr <br>";
}

echo "<br> array 5 <br>";
foreach ($arr5 as $key => $arr) {
    echo "Indice: $key | Valor: $arr <br>";
}
echo "<br> array 1 var_export: ";
var_export($arr1);
echo "<br> array 2 var_export: ";
var_export($arr2);
echo "<br> array 3 var_export: ";
var_export($arr3);
echo "<br> array 4 var_export: ";
var_export($arr4);
echo "<br> array 5 var_export: ";
var_export($arr5);