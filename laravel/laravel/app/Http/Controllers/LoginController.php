<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $usuario = ['id' => rand(1, 9999), "name" => "Lucas"];
        session(['usuario' => $usuario]);
    }

    public function logout()
    {
        session()->forget('usuario');
    }
}
