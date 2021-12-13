<?php

class Gerente
{
    private ?int $id;
    private ?string $nome;
    private ?string $alocacao;
    private ?float $salario;
    private ?int $quantidadeDeSubordinados;

    public function __construct(int $id = NULL, string $nome = NULL, string $alocacao = NULL, float $salario = NULL, int $quantidadeDeSubordinados = NULL) 
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->alocacao = $alocacao;
        $this->salario = $salario;
        $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
    }

    public function __destruct()
    {
        echo "Destruido";
    }

    public function __toString()
    {
        return json_encode([
            'id' => $this->id,
            'nome' => $this->nome,
            'alocacao' => $this->alocacao,
            'salario' => $this->salario,
            'quantidadeDeSubordinados' => $this->quantidadeDeSubordinados
        ]);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getAlocacao(): string
    {
        return $this->alocacao;
    }

    public function setAlocacao(string $alocacao): void
    {
        $this->alocacao = $alocacao;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function getQuantidadeDeSubordinados(): int
    {
        return $this->quantidadeDeSubordinados;
    }

    public function setQuantidadeDeSubordinados(int $quantidadeDeSubordinados): void
    {
        $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
    }
}

$gerente = new Gerente(1, 'Lucas Batista', 'Operador', 32.010, 6);

var_export($gerente);