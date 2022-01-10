<?php

namespace AceleracaoDev;

class Pessoa
{
    private int $id;
    private string $nome;
    private string $email;
    private string $profissao;
    private string $escolaridade;
    private string $token;

    public function __construct($id, $nome, $email, $profissao, $escolaridade)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->profissao = $profissao;
        $this->escolaridade = $escolaridade;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getProfissao() {
        return $this->profissao;
    }

    public function getEscolaridade() {
        return $this->escolaridade;
    }

    public function setToken(string $token)
    {
        $this->token = $token;
    }

    public function __toString()
    {
        return json_encode([
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'profissao' => $this->profissao,
            'escolaridade' => $this->escolaridade,
        ]);
    }
}