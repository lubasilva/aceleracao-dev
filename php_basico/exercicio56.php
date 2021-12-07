<?php

$alunos = 'alunos';
$professores = 'professores';

if(!is_dir($alunos) || !is_dir($professores)) {
    mkdir($alunos);
    mkdir($professores);
} else {
    $alunosFile = fopen("{$alunos}/arquivo.txt","w+");
    fclose($alunosFile);

    try {
        VerificarDiretorio($alunos);
        VerificarDiretorio($professores);
    } catch(Exception $e) {
        $error = $e->getMessage();
        $linha = " linha: ".$e->getLine();

        echo $error ."<br>";
        echo $linha;
    }

    $log = fopen("log.txt","w+");
    fwrite($log, $error .$linha .PHP_EOL);
    fclose($log);
}


function VerificarDiretorio($dir) {
    $scan = scandir($dir);
    if(empty($scan[2])) {
        throw new Exception("Não tem contem arquivo no diretorio $dir");
    }
}
