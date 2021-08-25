<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'title'=>"MLLC - Mundo Línguas, Literaturas e Culturas",
            'menu'=>"Principal",
            'submenu'=>null,
            'type'=>"home",
            'config'=>null,
        ];
        return view('home', $data);
    }

    public function sobre(){
        $data = [
            'title'=>"MLLC - Mundo Línguas, Literaturas e Culturas",
            'menu'=>"Sobre",
            'submenu'=>null,
            'type'=>null,
            'config'=>null,
        ];
        return view('sobre', $data);
    }
}