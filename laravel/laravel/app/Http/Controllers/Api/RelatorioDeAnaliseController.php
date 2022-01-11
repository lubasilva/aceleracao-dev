<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Analise;
use App\Models\Assinatura;
use App\Models\Documento;
use Illuminate\Http\Request;

class RelatorioDeAnaliseController extends Controller
{
    public function index()
    {
        $documentos = Documento::paginate(15);
        $assinaturas = Assinatura::paginate(10);
        $analises = Analise::paginate(10);

        return response()->json([
            'Documentos' => $documentos,
            'Assinaturas' => $assinaturas,
            'Analises' => $analises
        ]);
    }

}
