<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    public function index()
    {
        $assinaturas = Assinatura::all();

        return view('assinaturas.assinaturas', compact('assinaturas'));
    }

    public function show($id)
    {
        $assinatura = Assinatura::find($id);

        return view('assinaturas.show', compact('assinatura'));
    }

    public function novo()
    {
        return view('assinaturas.novo');
    }

    public function inserir(Request $request)
    {
        $assinatura = Assinatura::create($request->all());

        if(!$assinatura) dd($assinatura);

        return redirect()->route('assinatura.index')->with('msg', 'Assinatura cadastrada com sucesso!');
    }
}
