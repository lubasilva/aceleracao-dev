<?php
// endpoint com paises tem array para id, para regiao e sub regiao
// acredito que não era isso o esperado então deixei o codigo comentado
$fp = fopen('lista.csv', 'w+');

$file = json_decode(file_get_contents('paises.txt'), true);

$header = [];

foreach($file[0] as $key => $valor) {
    array_push($header, $key);
}

fwrite($fp, implode(",", $header) . "\r\n");

foreach ($file as $arr) {
    var_export($arr);
    // $content = [];
    // foreach($arr as $r) {
    //     array_push($content, $r);
    // }
    // fwrite($fp, implode(",", $content) . "\r\n");
} 

echo "Arquivo criado";
fclose($fp);