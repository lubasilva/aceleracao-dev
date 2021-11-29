<?php

abstract class Pao{
    protected $nome;

    abstract function valor();

    function getName(){
        return $this->nome;
    }

}

abstract class Recheio extends Pao{
}

class Doce extends Pao{
    public function __construct()
    {
        $this->nome = "Doce";
    }

    function valor(){
        return 1.20;
    }
}

class Sal extends Pao{
    public function __construct()
    {
        $this->nome = "Sal";
    }

    function valor(){
        return 1.00;
    }
}

class Salame extends Recheio{
    private $pao;

    function __construct(Pao $pao){
        $this->pao = $pao;
    }

    function getName(){
        return $this->pao->getName(). ", Salame";
    }

    function valor(){
        return 0.50 + $this->pao->valor();
    }
}

class Mussarela extends Recheio{
    private $pao;

    function __construct(Pao $pao){
        $this->pao = $pao;
    }

    function getName(){
        return $this->pao->getName(). ", Mussarela";
    }

    function valor(){
        return 0.45 + $this->pao->valor();
    }
}

class Ovo extends Recheio{
    private $pao;

    function __construct(Pao $pao){
        $this->pao = $pao;
    }

    function getName(){
        return $this->pao->getName(). ", Ovo";
    }

    function valor(){
        return 0.55 + $this->pao->valor();
    }
}

class Margarina extends Recheio{
    private $pao;

    function __construct(Pao $pao){
        $this->pao = $pao;
    }

    function getName(){
        return $this->pao->getName(). ", Margarina";
    }

    function valor(){
        return 0.30 + $this->pao->valor();
    }
}

class Geleia extends Recheio{
    private $pao;

    function __construct(Pao $pao){
        $this->pao = $pao;
    }

    function getName(){
        return $this->pao->getName(). ", Geleia";
    }

    function valor(){
        return 0.90 + $this->pao->valor();
    }
}

class PastaAmendoim extends Recheio{
    private $pao;

    function __construct(Pao $pao){
        $this->pao = $pao;
    }

    function getName(){
        return $this->pao->getName(). ", Pasta de Amendoim";
    }

    function valor(){
        return 0.80 + $this->pao->valor();
    }
}

$pao1 = new Sal();
$pao1 = new Salame($pao1);
$pao1 = new Mussarela($pao1);
echo $pao1->getName(). " R$: ".  $pao1->valor(). "<br><br>";

$pao2 = new Sal();
$pao2 = new Salame($pao2);
echo $pao2->getName(). " R$: ".  $pao2->valor(). "<br><br>";

$pao3 = new Sal();
$pao3 = new Mussarela($pao3);
echo $pao3->getName(). " R$: ".  $pao3->valor(). "<br><br>";

$pao4 = new Sal();
$pao4 = new Ovo($pao4);
$pao4 = new Mussarela($pao4);
echo $pao4->getName(). " R$: ".  $pao4->valor(). "<br><br>";

$pao5 = new Sal();
$pao5 = new Ovo($pao5);
$pao5 = new Margarina($pao5);
echo $pao5->getName(). " R$: ".  $pao5->valor(). "<br><br>";

$pao6 = new Sal();
$pao6 = new Margarina($pao6);
echo $pao6->getName(). " R$: ".  $pao6->valor(). "<br><br>";

$pao7 = new Sal();
$pao7 = new Ovo($pao7);
echo $pao7->getName(). " R$: ".  $pao7->valor(). "<br><br>";

$pao8 = new Doce();
$pao8 = new Geleia($pao8);
echo $pao8->getName(). " R$: ".  $pao8->valor(). "<br><br>";

$pao9 = new Doce();
$pao9 = new Geleia($pao9);
$pao9 = new Salame($pao9);
echo $pao9->getName(). " R$: ".  $pao9->valor(). "<br><br>";

$pao10 = new Doce();
$pao10 = new PastaAmendoim($pao10);
$pao10 = new Geleia($pao10);
echo $pao10->getName(). " R$: ".  $pao10->valor(). "<br><br>";

$pao11 = new Doce();
$pao11 = new Salame($pao11);
echo $pao11->getName(). " R$: ".  $pao11->valor(). "<br><br>";

$pao12 = new Doce();
$pao12 = new PastaAmendoim($pao12);
echo $pao12->getName(). " R$: ".  $pao12->valor(). "<br><br>";


?>