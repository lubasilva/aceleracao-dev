<?php

$arr = [];

for ($i = 1; $i <= 150; $i++) {
    array_push($arr, $i);
}

foreach($arr as $ar) {
    if(!is_dir("./exercicio49/$ar")) {
        mkdir("./exercicio49/$ar");
        echo "O Diretorio $ar foi criado com sucesso";

        if($ar % 2 == 1) {
            $agora = date('Y-m-d-H-i-s');
            $path = "./exercicio49/$ar/log-{$agora}.txt";
            $fp = fopen("./exercicio49/$ar/log-{$agora}.txt", 'w+');
            fclose($fp);
            echo "Arquivo log-$agora.txt no diretorio $ar foi criado com sucesso!";
            echo '<br>';
            echo 'Filesize:'. filesize($path);
            echo '<br>';
            echo 'Filectime: '. date('Y-m-d-H-i-s', Filectime($path));
            echo '<br>';
            echo 'Pathinfo: ';
            print_r(pathinfo($path));
            echo '<br><br>';
            
        }
    } else {
        echo 'Diretorio com esté nome já existe <br>';
    }
}