<?php

class Porta
{
    private bool $aberta;
    private string $cor;
    private float $dimensaoX;
    private float $dimensaoY;
    private float $dimensaoZ;

    public function __construct(bool $aberta = false, string $cor, float $dimensaoX, float $dimensaoY, float $dimensaoZ)
    {
        $this->aberta = $aberta;
        $this->cor = $cor;
        $this->dimensaoX = $dimensaoX;
        $this->dimensaoY = $dimensaoY;
        $this->dimensaoZ = $dimensaoZ;
    }

    public function abre(): void
    {
        $this->aberta = true;
    }

    public function fecha(): void
    {
        $this->aberta = false;
    }

    public function pinta(string $cor): void
    {
        $this->cor = $cor;
    }
}

class Imovel
{
    private string $cor;

    public function __construct(string $cor)
    {
        $this->cor = $cor;
    }

    public function pinta(string $cor): void
    {
        $this->cor = $cor;
    }

    public function getCor(): string
    {
        return $this->cor;
    }
}

class Casa extends Imovel
{
    private Porta $porta1;
    private Porta $porta2;
    private Porta $porta3;

    public function __construct(string $cor, bool $porta1, bool $porta2, bool $porta3)
    {
        parent::__construct($cor);
        $this->porta1 = $porta1;
        $this->porta2 = $porta2;
        $this->porta3 = $porta3;
    }

    public function totalDePortas()
    {

    }

    public function quantasPortasEstaoAbertas(): int
    {
        $quantidade = 0;

        if($this->porta1->abre() === true) $quantidade ++;
        if($this->porta2->abre() === true) $quantidade ++;
        if($this->porta3->abre() === true) $quantidade ++;

        return $quantidade;
    }
}

class Edificio extends Imovel
{
    private int $totalDePortas;
    private int $totalDeAndares;
    private $portas = [];

    public function __construct(string $cor, int $totalDeAndares, array $portas = [])
    {
        parent::__construct($cor);
        $this->totalDeAndares = $totalDeAndares;
        $this->portas = $portas;
    }

    public function quantasPortasEstaoAberta(): int
    {
        $quantidade = 0;

        foreach ($this->portas as $porta) {
            if ($porta->abre() === true) {
                $quantidade++;
            }
        }

        return $quantidade;
    }

    public function adicionaPorta(Porta $porta): void
    {
        $this->portas[] = $porta;
        $this->totalDePortas++;
    }

    public function totalDePortas(): int
    {
        return $this->totalDePortas;
    }

    public function adicionarAndar(): void
    {
        $this->totalDeAndares++;
    }

    public function totalDeAndares(): int
    {
        return $this->totalDeAndares;
    }
}