<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();

        return view('documentos.documento', compact('documentos'));
    }

    public function showLog($id)
    {
        $documento = Documento::find($id);

        Log::channel('documentos')->info('Documento consultado com sucesso!');

        return view('documentos.showLog', compact('documento'));
    }
}
