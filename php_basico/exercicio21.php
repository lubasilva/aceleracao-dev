<?php
$var1 = 2;
$var2 = "3";
$var3 = [1, 2];
$var4 = true;
$var5 = null;


$vars = [$var1, $var2, $var3, $var4, $var5];
$qtd = sizeof($vars);

for($i = 0; $i < $qtd; $i++) {
    if(is_null($vars[$i])) {
        echo var_export($vars[$i]). ": Essa variavel e nula <br>";
    }
    
    if(is_array($vars[$i])) {
        echo var_export($vars[$i]). "<br>";
    }
}