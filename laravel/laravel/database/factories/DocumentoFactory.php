<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => 'Titulo fake: '.$this->faker->name(),
            'tamanho_mb' => $this->faker->randomNumber(2, false),
            'numero_assinaturas' => $this->faker->randomDigitNotNull(),
            'assinatura_responsavel' => 'Assinatura fake: '.$this->faker->name(),
            'quantidade_paginas' => $this->faker->randomDigitNotNull(),
        ];
    }
}
