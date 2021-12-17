<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestDocumentos;
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

    public function novo()
    {
        return view('documentos.novo');
    }

    public function inserir(RequestDocumentos $request)
    {
        $documento = Documento::create($request->all());

        if(!$documento) dd($documento);

        return redirect()->route('documentos')->with('msg', 'Documento cadastrado com sucesso!');
    }

    // public function showLog($id)
    // {
    //     $documento = Documento::find($id);

    //     Log::channel('documentos')->info('Documento consultado com sucesso!');

    //     return view('documentos.showLog', compact('documento'));
    // }
}
