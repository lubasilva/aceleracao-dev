<?php

$n1 = [
    'Danye' => random_int(0, 10),
    'Rieza' => random_int(0, 10),
    'Islu' => random_int(0, 10),
    'Zivey' => random_int(0, 10),
    'Kugen' => random_int(0, 10),
    'Maxuigu' => random_int(0, 10),
    'Malkohad' => random_int(0, 10),
    'Weior' => random_int(0, 10),
    'Bazrz' => random_int(0, 10),
    'Enbepoa' => random_int(0, 10),
    'Klome' => random_int(0, 10),
    'Balhub' => random_int(0, 10),
    'Lurbveo' => random_int(0, 10),
    'Medis' => random_int(0, 10),
    'Tuzaion' => random_int(0, 10),
    'Hovaon' => random_int(0, 10)
];

$n2 = [
    'Danye' => random_int(0, 10),
    'Rieza' => random_int(0, 10),
    'Islu' => random_int(0, 10),
    'Zivey' => random_int(0, 10),
    'Kugen' => random_int(0, 10),
    'Maxuigu' => random_int(0, 10),
    'Malkohad' => random_int(0, 10),
    'Weior' => random_int(0, 10),
    'Bazrz' => random_int(0, 10),
    'Enbepoa' => random_int(0, 10),
    'Klome' => random_int(0, 10),
    'Balhub' => random_int(0, 10),
    'Lurbveo' => random_int(0, 10),
    'Medis' => random_int(0, 10),
    'Tuzaion' => random_int(0, 10),
    'Hovaon' => random_int(0, 10)
];

$file = fopen('aluno-aprovados.txt', 'w+');
foreach ($n1 as $nome => $nota1) {
    $resultado = avaliar($nota1, $n2[$nome]);

    if ($resultado) {
        fwrite($file, $nome. ' Aprovado' . PHP_EOL);
    }
}
fclose($file);


function avaliar($n1, $n2)
{
    if (($n1 < 7 || $n2 < 7) || ($n1 + $n2 < 19)) {
        return false;
    }

    return true;
}