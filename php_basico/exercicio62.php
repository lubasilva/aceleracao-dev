<?php

class Plano
{
    private float $Y;
    private float $X;

    public function __construct(float $Y, float $X)
    {
        $this->Y = $Y;
        $this->X = $X;
    }

    public function getY(): float
    {
        return $this->Y;
    }

    public function getX(): float
    {
        return $this->X;
    }

    public function setEixo(float $Y, float $X): void
    {
        $this->Y += $Y;
        $this->X += $X;
    }
}