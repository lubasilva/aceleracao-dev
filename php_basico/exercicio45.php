<?php

$nomes = ['Balanar', 'Traxex', 'Luna', 'Storm', 'Silencer', 
'Pudge', 'Naix', 'Invoker', 'Sniper', 'Visage', 
'Dragon', 'Chaos', 'Naga', 'Nyx', 'Lycan'];

foreach($nomes as $nome) {
    if(!is_dir($nome)) {
        mkdir($nome);

        $fp = fopen("$nome/$nome.txt", 'w+');
        fwrite($fp, $nome);
        fclose($fp);
    } else {
        'Diretorio com esté nome já existe';
    }
}
