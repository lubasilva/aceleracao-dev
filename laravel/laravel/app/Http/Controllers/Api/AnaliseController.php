<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Analise;
use Illuminate\Http\Request;

class AnaliseController extends Controller
{
    private $model;

    public function __construct(Analise $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $analises = Analise::paginate(10);

        return response()->json($analises);
    }

    public function store(Request $request)
    {
        Analise::create($request->all());

        return response()->json([
            'msg' => 'Analise criada com sucesso!!',
            'code' => '200'
        ]);
    }

    public function show($id)
    {
        $analise = Analise::find($id);

        if(!$analise){
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        return response()->json($analise);
    }

    public function update(Request $request, $id)
    {
        $analise = Analise::find($id);

        if(!$analise){
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        $analise->update($request->all());

        return response()->json([
            'msg' => 'Analise alterada com sucesso!!',
            'code' => '200'
        ]);
    }

    public function destroy($id)
    {
        $analise = Analise::find($id);

        if(!$analise){
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        $analise->delete();

        return response()->json([
            'msg' => 'Analise deletada com sucesso!!',
            'code' => '200'
        ]);
    }
}
