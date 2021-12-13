<?php

require_once 'exercicio66.php';

class Atendente extends Pessoa{
    private $id;
    private $funcao;
    private $horarioEntrada;
    private $horaroSaida;

    public function __construct(string $nome, string $CPF,string $endereco,string $nomePai,string $nomeMae,string $rg,string $serialDeIdentidade, int $id,string $funcao, string $horarioEntrada,string $horaroSaida)
    {
        parent::__construct($nome, $CPF, $endereco, $nomePai, $nomeMae, $rg, $serialDeIdentidade);
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horarioEntrada = $horarioEntrada;
        $this->horaroSaida = $horaroSaida;
    } 

    public function setFuncao(string $funcao){
        $this->funcao = $funcao;
    }

    public function sethorarioEntrada(string $horarioEntrada){
        $this->horarioEntrada = $horarioEntrada; 
    }

    public function setHorarioSaida(string $horarioSaido){
        $this->horaroSaida = $horarioSaido;
    }

    public function getId(){
        return $this->id;
    }

    public function getFuncao(){
        return $this->funcao;
    }

    public function gethorarioEntrada(){
        return $this->horarioEntrada; 
    }

    public function getHorarioSaida(){
        return $this->horaroSaida;
    }

    public function __toString()
    {
        return json_encode([
            'id'                    => $this->id,
            'funcao'                => $this->funcao,
            'horarioEntrada'        => $this->horarioEntrada,
            'horaroSaida'           => $this->horaroSaida
        ]);
    }

}

$lola = new Atendente("Lola", "123123", "Miguel de assis", "Joao", "Maria", "345234", "jrtye", 1, "psicologa", "8:30", "17:00");

var_dump($lola);