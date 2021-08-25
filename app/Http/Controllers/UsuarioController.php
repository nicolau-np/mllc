<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $data = [
            'title'=>"MLLC - Mundo Línguas, Literaturas e Culturas",
            'menu'=>"Login",
            'submenu'=>null,
            'type'=>"login",
            'config'=>null,
        ];
        return view('user.login', $data);
    }
}