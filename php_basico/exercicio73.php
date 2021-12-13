<?php

class DespesaMes
{
    private int $mesDaDespesa;
    private float $valorDaDespesa;

    public function __construct(int $mesDaDespesa, float $valorDaDespesa = 0)
    {
        $this->valorDaDespesa = $valorDaDespesa;
        $this->mesDaDespesa = $mesDaDespesa;
    }

    public function getMes(): int
    {
        return $this->mesDaDespesa;
    }

    public function getValor(): float
    {
        return $this->valorDaDespesa;
    }
}

class DespesaDia extends DespesaMes
{
    private int $diaDaDespesa;

    public function __construct(int $mesDaDespesa, int $diaDaDespesa, float $valorDaDespesa)
    {
        parent::__construct($mesDaDespesa,$valorDaDespesa);
        $this->diaDaDespesa = $diaDaDespesa;
    }
    public function getDia(): int
    {
        return $this->diaDaDespesa;
    }
}

class Despesas{

    private array $despesas;
    private string $cpf;

    public function __construct(array $despesas = [], string $cpf)
    {
        $this->despesas = $despesas;
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function totalizaMes(int $mes): DespesaMes
    {
        foreach($this->despesas as $despesa){
            if($despesa->getMes() === $mes){
                return $despesa;
            }
        }
    }
}