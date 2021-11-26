<?php
// Simulando uma situação que o nome das categorias sejam dinamicas

include_once('cardapioFunctions.php');

$salgados = ['salgados'];
$acompanhamentos = ['acompanhamentos'];
$refrigerantes = ['refrigerantes'];


array_push($salgados, 'Coxinha', 'Pastel');
array_push($acompanhamentos, 'Salame', 'Kibe', 'Limão');
array_push($refrigerantes, 'Coca Cola', 'Rinco', 'Mineiro', 'Fanta', 'Pepsi', 'Antartica', 'Sprite');


echo produtos($salgados, $salgados[0]). '<br><br>';
echo produtos($acompanhamentos, $acompanhamentos[0]). '<br><br>';
echo produtos($refrigerantes, $refrigerantes[0]). '<br><br>';