<?php

$dir = 'exercicio60';
$arquivo1 = 'arquivo1';
$arquivo2 = 'arquivo2';
$arquivo3 = 'arquivo3';
$content = file_get_contents("https://jsonplaceholder.typicode.com/photos");

if(!empty($content)) {
    if(!is_dir($dir)) {
        mkdir($dir);
    } 

    $file1 = fopen("$dir/$arquivo1.txt","w+");
    fwrite($file1,$content .PHP_EOL);
    fclose($file1);

    $file2 = fopen("$dir/$arquivo2.txt","w+");
    fwrite($file2,$content .PHP_EOL);
    fclose($file2);

    $file3 = fopen("$dir/$arquivo3.txt","w+");
    fwrite($file3,$content .PHP_EOL);
    fclose($file3);

    if(is_file("$dir/$arquivo2.txt")) {
        unlink("$dir/$arquivo2.txt");
    }

    try {
        if(is_file("$dir/$arquivo2.txt")) {
            fopen("$dir/$arquivo2.txt", 'r');
        }

        throw new Exception('Arquivo não encontrado<br>');

    } catch (Exception $e) {
        echo $e->getMessage();
    }

    $arr = [json_decode(file_get_contents("$dir/$arquivo1.txt"), true),
            json_decode(file_get_contents("$dir/$arquivo3.txt"), true)];

    var_export($arr);
    
}