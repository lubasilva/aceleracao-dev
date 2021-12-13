<?php
    require_once ("exercicio71.php");

    function AtualizaSaldoDosCorrentistas(array $correntistas, array $movimentacoes, Operacoes $operacao)
    {
        foreach($movimentacoes as $movimento){
            $correntista = $operacao->encontraCorrentista($correntistas, $movimento->getCPFCorrentista());
            $correntista->setSaldo($movimento->getValorMovimento());
        }        
    }

    $lucas = new Correntista('1234', 12.395);    
    $batista = new Correntista('5678', 5970.2394);
    $correntistas = [$lucas, $batista];

    $lucasMovimento = new Movimentacao('1234', 10);
    $batistaMovimento = new Movimentacao('5678', 20);
    $movimentos = [$lucasMovimento, $batistaMovimento];

    AtualizaSaldoDosCorrentistas($correntistas, $movimentos, new Operacoes());
?>