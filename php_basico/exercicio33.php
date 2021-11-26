<?php

function random_float () {
    return round((1+lcg_value()*(abs(100-1))), 2);
}

for($i = 0; $i < 12; $i++) {
    $arr[$i] = random_float();
}

for($i = 0; $i < count($arr); $i++) {
    echo '<br>No dinheiro: Valor Normal: '. $arr[$i]. 
    ' Com desconto de 10%: '. ($arr[$i]) - $arr[$i] * 0.10. '<br>';
    
    echo '<br>A vista no cartão de credito: Valor Normal: '. $arr[$i]. 
    ' Com desconto de 5%: '. ($arr[$i]) - $arr[$i] * 0.05. '<br>';

    echo '<br>Ate 2 vezes no cartão sem juros: '. $arr[$i]. '<br>';

    echo '<br>3 vezes no cartão: Valor Normal: '. $arr[$i]. 
    ' Com acrescimo de 10%: '. ($arr[$i]) + $arr[$i] * 0.10. '<br>';
    echo "----------------------------------------------------------------------------";
}