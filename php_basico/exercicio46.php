<?php

$clientes = array("Joaquim" => "28,m", "Maria" => "41,f", "Pedro" => "18,m", "Joana Silva" => "58,f", "João Lopes" =>
"21,m", "Joana" => "15,f", "Fernanda" => "25,f");
$homens = [];
$mulheres= []; 

foreach($clientes as $key => $cliente) {
    explode(',', $cliente);
    echo "$key Possui $cliente[0]$cliente[1] anos, sexo: $cliente[3]" . "<br>";

    if($cliente[3] == 'f') {
        $mulheres[$key] = "$cliente[0]$cliente[1], $cliente[3]";
    }

    if($cliente[3] == 'm') {
        $homens[$key] = "$cliente[0]$cliente[1], $cliente[3]";
    }
}

echo "<br>";
var_export($mulheres);
echo "<br>";
var_export($homens);