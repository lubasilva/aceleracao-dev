<?php
// media de notas de um aluno usando echo e var_dump

$notas = [5.5, 6, 5.1];
$media = 0;
for($i = 1; $i <= sizeof($notas); $i++) {
    $media += $notas[$i-1];
    if($i == sizeof($notas) ) {
        $media = $media / $i;
        echo "$media <br>";
    }
}

var_dump($media);