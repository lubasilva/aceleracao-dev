<?php

class Pessoa
{
    private string $nome;
    private string $cpf;
    private string $endereco;
    private string $nomePai;
    private string $nomeMae;
    private string $rg;
    private string $serialDeIdentificacao;

    public function __construct( string $nome, string $cpf, string $endereco, string $nomePai, string $nomeMae, string $rg, string $serialDeIdentificacao)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->nomePai = $nomePai;
        $this->nomeMae = $nomeMae;
        $this->rg = $rg;
        $this->serialDeIdentificacao = $serialDeIdentificacao;
    }

    public function __toString()
    {
        return json_encode([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'endereco' => $this->endereco,
            'nomePai' => $this->nomePai,
            'nomeMae' => $this->nomeMae,
            'rg' => $this->rg,
            'serialDeIdentificacao' => $this->serialDeIdentificacao,
        ]);
    }
}

$luana = new Pessoa("Luana Batista", "0101010", "Avenida 425", "Joao", "Maria", "00990", "fghdf");
$lilian = new Pessoa("Lilian Batista", "45684567", "Rodovia 23", "Joao", "Maria", "567456", "cvbncv");


var_dump($luana->__toString());
echo "<br>";
var_dump($lilian->__toString());