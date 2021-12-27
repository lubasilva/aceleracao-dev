<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documento::create([
                'titulo' => 'Titulo 1 seeder',
                'tamanho_mb' => 12,
                'numero_assinaturas' => 3,
                'assinatura_responsavel' => 'Assinatura seeder 1',
                'quantidade_paginas' => 10,

                'titulo' => 'Titulo 2 seeder',
                'tamanho_mb' => 13,
                'numero_assinaturas' => 4,
                'assinatura_responsavel' => 'Assinatura seeder 2',
                'quantidade_paginas' => 10,

                'titulo' => 'Titulo 3 seeder',
                'tamanho_mb' => 14,
                'numero_assinaturas' => 5,
                'assinatura_responsavel' => 'Assinatura seeder 3',
                'quantidade_paginas' => 1
        ]);
    }
}
