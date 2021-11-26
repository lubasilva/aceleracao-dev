<?php

function produtos(array $var, $categoria) {
    if(count($var) < 4) {
        echo "A categoria $categoria não tem o numero suficientes de produtos cadastros (minimo 3)";
        return showProdutos($var);
    } else if(count($var) > 7) {
        echo "A categoria $categoria está ultrapassando o limite de produtos cadastros (máximo 6)";
        return showProdutos($var);
    } else {
        echo 'Produtos da categoria ' .$categoria. ' foram cadastrados com sucesso!';
        return showProdutos($var);
    }
}

function showProdutos(array $var) {
    foreach($var as $key => $produto) {
        if($key != 0) echo "<br>Indice $key | $produto";
    }
}