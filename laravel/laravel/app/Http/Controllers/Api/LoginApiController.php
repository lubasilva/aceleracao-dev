<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {
        $credencias = $request->all(['email', 'password']);

        $token = auth('api')->attempt($credencias);
        // dd($token);
        if(!$token)
        {
            return response()->json(["Não é um usúario valido"], 401);
        }

        return response()->json([
            'token' => $token
        ], 201);
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['Mensagem' => 'Saiu com sucesso!'], 200);
    }

    public function refresh()
    {
        $token = auth('api')->refresh();

        return response()->json([
            'token' => $token,
            'aviso' => 'Token atualizado com sucesso!'
        ], 201);
    }
}
