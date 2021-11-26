<?php
$n = 6;
$contador = 1;
$fatorial = 1;

for($contador; $contador <= $n; $contador++){
    $fatorial *= $contador; 
}

var_export($fatorial);
