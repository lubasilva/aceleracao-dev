<?php
$path = 'exercicio49/';
$arr = [];

for($i = 1; $i <= 150; $i++){
    if(is_dir($path.$i)){
        $scan = scandir($path.$i);

        if(empty($scan[2])){
            rmdir($path.$i);
            echo "Diretorio {$i} está vazio e foi excluido <br>";
        }else{
            $fileName = pathinfo($scan[2]);
            array_push($arr,$fileName['filename']);
        }   
    }
}

var_export($arr);