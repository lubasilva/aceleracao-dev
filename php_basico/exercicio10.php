<?php

$nums = [0,1,2,3,4,5,6,7,8,9];


foreach($nums as $key => $num) {
    if($num % 2 == 0) {
        echo "Indice: $key | Valor: $num <br>";
    }
}