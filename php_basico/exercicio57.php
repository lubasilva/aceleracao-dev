<?php

$nome1 = 'PHP';
$nome2 = '';
$nome3 = NULL;

try {
    verificaNome($nome1);
    verificaNome($nome2);
    // verificaNome($nome3);
} catch (Exception $e) {
    $err = "Error:  => {$e->getMessage()}";
    echo json_encode($err);
} finally {
    echo '<br>finalizado';
}

function verificaNome($nome)
{
    if (empty($nome) || is_null($nome)) {
        throw new Exception('Nome inválido');
    } else {
        return true;
    }
}