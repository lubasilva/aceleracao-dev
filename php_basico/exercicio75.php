<?php

class Aluno{
    protected string $matricula;
    protected string $nome;
    protected string $sobrenome;
    protected string $cpf;
    protected string $rg;
    protected int $idade;
    protected int $nivelescolar;

    public function __construct(string $matricula , string $nome, string $sobrenome, string $cpf, string $rg, int $idade, int $nivelescolar)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->idade = $idade;
        $this->nivelescolar = $nivelescolar;   
    }

    public function realizaMatricula()
    {

    }
    public function realizaRequerimento()
    {
        
    }
    public function solicitaCertificado()
    {
        
    }
}
class Turma{
    protected int $ano;
    protected string $nome_turma;
    protected Aluno $alunos;
    protected int $capacidade;

    public function __construct(int $ano , string $nome_turma, string $sobrenome,int $capacidade)
    {
        $this->ano = $ano;
        $this->nome_turma = $nome_turma;
        $this->sobrenome = $sobrenome;
        $this->capacidade = $capacidade;
    }


    public function listaAlunos()
    {
    
    }
    public function exibeVagas()
    {
        
    }
    public function adicionaAluno(Aluno $aluno){
        
    }
}
