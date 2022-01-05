<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index() {
        $usuarios = Usuario::usuario();
        return view('perfil.perfil', compact('usuarios'));
    }
}
