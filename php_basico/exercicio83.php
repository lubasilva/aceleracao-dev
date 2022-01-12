<?php

interface Funcionario
{
    public function funcao();
}

class Designer implements Funcionario
{
    public function funcao()
    {
        echo "Designer";
    }
}

class Programmer implements Funcionario
{
    public function funcao()
    {
        echo "Codigos";
    }
}

class Tester implements Funcionario
{
    public function funcao(){
        echo "Testes";
    }
}

class Empresa
{

    function buscaFuncionario(Funcionario $funcionario)
    {
        echo "O funcionário faz: ".$funcionario->funcao();
    }
}
