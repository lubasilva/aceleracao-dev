<?php

class Revistas
{
    private string $codigo;
    private string $titulo;
    private string $tipo;
    private object $edicoes;

    public function getCodigo(): string
    {
        return $this->codigo;
    }

    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getEdicoes(): string
    {
        return $this->edicoes->getEdicao();
    }

    public function setEdicoes(Edicao $edicoes): void
    {
        $this->edicoes = $edicoes;
    }
}

class Edicao
{
    private int $ano;
    private int $qntArtigos;
    private int $numEdicao;

    public function __construct(int $ano, int $qntArtigos, int $numEdicao)
    {
        $this->ano = $ano;
        $this->qntArtigos = $qntArtigos;
        $this->numEdicao = $numEdicao;
    }

    public function setEdicao($ano, $qntArtigos, $numEdicao): void
    {
        $this->ano = $ano;
        $this->qntArtigos = $qntArtigos;
        $this->numEdicao = $numEdicao;
    }

    public function getEdicao(): string
    {
        return "Ano da edição: {$this->ano}, possui: {$this->qntArtigos} artigos, {$this->numEdicao} edição";
    }
}

$revista = new Revistas();
$revista->setTitulo("Classe");
$revista->setCodigo("23423");
$revista->setTipo("Home Office");
$edicao = new Edicao(2021, 143, 5);
$revista->setEdicoes($edicao);
var_dump($revista->getEdicoes());