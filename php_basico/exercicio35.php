<?php

class Pessoa
{
    public $nome;
    public $cpf;
    public $numDependentes;
    public $salario;

    public function __construct($nome, $cpf, $numDependentes, $salario) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->numDependentes = $numDependentes;
        $this->salario = $salario;
    }
}


$pessoa1 = new Pessoa('Yan', '123125341', 2, 1323.15);
$pessoa2 = new Pessoa('Cesar', '353453413', 0, 7030.96);
$pessoa3 = new Pessoa('Marcos', '56235478', 1, 6460.56);

function impostoRenda(Pessoa $pessoa) {
    if($pessoa->salario < 2000) {
        echo "Isento de impostos";
    } else if ($pessoa->salario >= 2100 && $pessoa->salario < 300) {
        $val = ($pessoa->salario / ($pessoa->numDependentes * 5)) * 100;
        $val = ($pessoa->salario - $val)  * 0.05;
        echo "O do imposto será de: $val";
    } else { 
        $val = ($pessoa->salario / ($pessoa->numDependentes * 5)) * 100;
        $val = ($pessoa->salario - $val)  * 0.10;
        echo "O do imposto será de: $val";
    }
} 