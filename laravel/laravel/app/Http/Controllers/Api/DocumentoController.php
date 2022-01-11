<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    private $model;

    public function __construct(Documento $model)
    {
        $this->model = $model;
        // $this->middleware('jwt.auth');
    }

    public function index()
    {
        $documento = Documento::paginate(10);

        return response()->json($documento);
    }

    public function store(Request $request)
    {
        Documento::create($request->all());

        return response()->json([
            'msg' => 'Documento criado com sucesso',
            'code' => '200'
        ]);
    }

    public function show($id)
    {
        $documento = Documento::find($id);

        if(!$documento){
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        return response()->json($documento);
    }

    public function update(Request $request, $id)
    {
        $documento = Documento::find($id);

        if(!$documento){
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        $documento->update($request->all());

        return response()->json([
            'msg' => 'Documento alterado com sucesso!!',
            'code' => '200'
        ]);
    }

    public function destroy($id)
    {
        $documento = Documento::find($id);

        if(!$documento){
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        $documento->delete();

        return response()->json([
            'msg' => 'Documento deletado com sucesso!!',
            'code' => '200'
        ]);
    }
}
