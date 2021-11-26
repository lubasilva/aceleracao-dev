<?php

$cepsGet = ['73092010', '04302021', '29843000', '64000290', '30120060', 
'86105000', '09961660', '29843000' , '75802095', '80520560', 
'09961660', '30130005', '64000290', '16015244', '68700216'];

$ceps = [];

foreach($cepsGet as $cep) {
    $link = "https://viacep.com.br/ws/$cep/json";

    $ch = curl_init($link);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);
    $ceps[] = json_decode($response, true);
    curl_close($ch);
}
echo count($ceps);

$fp = fopen('ceps.txt', 'w+');
foreach ($ceps as $cep) {
    fwrite($fp, json_encode($cep, true).  "\r\n");
}

fclose($fp);
