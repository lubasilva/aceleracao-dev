<?php

$nomes = ["Zeca baleiro", "Oswaldo Montenegro", " Geraldo Azevedo", "Alceu Valença", "Elis Regina", "Dominguinhos", "Darci", "Tom Jobim", "Chico Cesar", "Lenine"];

$qtd = sizeof($nomes);

for($i = 0; $i < $qtd; $i++) {
    echo "$nomes[$i] <br>";
}