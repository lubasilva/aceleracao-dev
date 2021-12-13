<?php

class Correntista
{
    private string $cpfCliente;
    private float $saldo;

    public function __construct(string $cpfCliente, float $saldo)
    {
        $this->cpfCliente = $cpfCliente;
        $this->saldo = $saldo;
    }

    public function getCPFCliente(): string
    {
        return $this->cpfCliente;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
}

class CorrentistaDespesa extends Correntista
{
    private array $despesasPrevistas;

    public function __construct( string $cpfCliente, float $saldo, array $despesasPrevistas)
    {
        parent::__construct($cpfCliente, $saldo);
        $this->despesasPrevistas = $despesasPrevistas;
    }

    public function getDespesasPrevistas(): array
    {
        return $this->despesasPrevistas;
    }
}

function verificarCorrentistas(array $correntistas): array
{
    $correntistas = [];

    foreach ($correntistas as $correntista) {
        $total = 0;

        foreach ($correntista->getDespesasPrevistas() as $despesaPrevista) {
            $total += $despesaPrevista->getValor();
        }

        if ($correntista->getSaldo() > $total) {
            $correntistas[] = $correntista;
        }
    }

    return $correntistas;
}

