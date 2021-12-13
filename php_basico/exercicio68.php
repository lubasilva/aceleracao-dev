<?php

require_once 'exercicio66.php';

class Secretaria extends Pessoa{
    private int $id;
    private string $horaTrabalhada;
    private string $horasExtras;

    public function __construct(string $nome, string $CPF,string $endereco,string $nomePai,string $nomeMae,string $rg,string $serialDeIdentidade, int $id,string $horaTrabalhada, string $horasExtras)
    {
        parent::__construct($nome, $CPF, $endereco, $nomePai, $nomeMae, $rg, $serialDeIdentidade);
        $this->id = $id;
        $this->horaTrabalhada = $horaTrabalhada;
        $this->horasExtras = $horasExtras;
    } 

    public function getId(): int
    {
        return $this->id;
    }

    public function getHoraTrabalhada(): string
    {
        return $this->horaTrabalhada;
    }

    public function sethoraTrabalhada(string $horaTrabalhada): void
    {
        $this->horaTrabalhada = $horaTrabalhada;
    }

    public function gethorasExtras(): string
    {
        return $this->horasExtras; 
    }

    public function setHorasExtras(string $horasExtras): void
    {
        $this->horasExtras = $horasExtras; 
    }

    public function __toString()
    {
        return json_encode([
            'id'                    => $this->id,
            'horaTrabalhada'        => $this->horaTrabalhada,
            'horasExtras'           => $this->horasExtras
        ]);
    }
}

$lia = new Secretaria("Lia", "1231231", "Centro", "Joao", "Maria", "25342", "erdfgdf", 5, "12", "4");

echo "<br>";
var_dump($Secretaria->__toString());