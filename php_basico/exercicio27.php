<?php
$texto = "O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma
linguagem de script open source de uso geral, muito utilizada, e especialmente
adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.";

echo mb_strtoupper($texto, 'utf-8');
echo "<br><br>";

echo strtolower($texto);
echo "<br><br>";

echo ucfirst($texto);
echo "<br><br>";

echo ucwords($texto);
echo "<br><br>";


