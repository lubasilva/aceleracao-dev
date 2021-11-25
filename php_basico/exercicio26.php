<?php

$a[0] = rand(0,100);
$a[1] = rand(0,100);
$a[2] = rand(0,100);
$i =0;
while($i < 3) {
    if($a[$i] % 2 == 0) {
        echo "$a[$i] | ";
        $i++;
    } else {
        $a[$i]++;
        $i++;
    }
}
