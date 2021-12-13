<?php

class ItemOrcamento
{
    private string $historico;
    private float $valor;

    public function __construct(string $historico, float $valor)
    {
        $this->historico = $historico;
        $this->valor = $valor;
    }

    public function getHistorico(): string
    {
        return $this->historico;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}

class ItemOrcamentoComplexo extends ItemOrcamento
{
    private $subItens = [];

    public function __construct(string $historico, float $valor, array $subItens)
    {
        parent::__construct($historico, $valor);
        $this->subItens = $subItens;
    }

    public function getValor(): float
    {
        $quantidade = 0;
        foreach ($this->subItens as $subItem) {
            $quantidade += $subItem->getValor();
        }

        return (float) $quantidade;
    }

    public function encontraItem(string $historico): ?string
    {
        $item = NULL;
        
        foreach ($this->subItens as $subItem) {
            if ($historico === $subItem->getHistorico()) {
                $item = $subItem;
            }
        }

        return $item;
    }
}