<?php

for($i = 0; $i < 16; $i++) {
    $nums[] = rand(1, 100);
}
$media = array_sum($nums) / 16;
var_export("var_export ". $media);
print("<br> print ". $media);