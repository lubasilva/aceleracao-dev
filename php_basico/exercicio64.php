<?php

interface Servicos
{
    public function calculaSalario(int $diasTrabalhados, string $cargo): float;
    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, float $valorGratificacao): float;
}

class Funcionario implements Servicos
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function calculaSalario(int $diasTrabalhados, string $cargo): float
    {
        $salario = 6500;

        $valorDiaTrabalhado = $salario / 30;
        
        if ($diasTrabalhados >= 15) {
            $salario = $diasTrabalhados * $valorDiaTrabalhado;
        }

        if ($diasTrabalhados < 15) {
            $salario = ($valorDiaTrabalhado - ($valorDiaTrabalhado * 0.30)) * $diasTrabalhados;
        }
        
        return $salario;
    }

    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, float $valorGratificacao): float
    {
        $salarioPadrao = 4970;
        $valorDoDiaTrabalhado = $salarioPadrao / 30;

        return $valorDoDiaTrabalhado * $diasTrabalhados ; 
    }

}

$funcionario = new Funcionario("Lucas");
echo $funcionario->getNome(). "<br>";
echo "Salario: R$" . $funcionario->calculaSalario(26, "Designer") . "<br>";
echo "Gratificação: R$" . $funcionario->calculaSalarioMaisGratificacao(30, 1.200);
