<?php

$fp = fopen('dados.txt', 'w+');
for($i = 1; $i <= 700; $i++) {
    if($i % 2 == 0) fwrite($fp, "$i \r\n");
}

fclose($fp);