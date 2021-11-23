<?php
$array1 = ["Curso1" => "PHP", "Curso2" => "JAVA", "Curso3" => "Python"];
$array2 = ["Pessoa1" => "Joao", "Pessoa2" => "Pedro", "Pessoa3" => "Clara"];
$array3 = ["Loja1" => "Centro", "Loja2" => "Zona Sul", "Loja3" => "Zone Oeste"];

foreach($array1 as $key => $arr) {
    echo " Indice: $key | Valor: $arr <br>";
}

echo "<br>";
foreach($array2 as $key => $arr) {
    echo " Indice: $key | Valor: $arr <br>";
}

echo "<br>";
foreach($array3 as $key => $arr) {
    echo " Indice: $key | Valor: $arr <br>";
}