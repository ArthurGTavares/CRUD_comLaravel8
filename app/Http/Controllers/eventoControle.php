<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventoControle extends Controller
{
    public function index(){
        $nome = "Arthur";
        $idade = 23;

        $arr = [10,20,30,40];

        $nomes = ["Arthur", "Matheus", "Xico"];

        return view('welcome', 
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "estagiário",
            'arr' => $arr,

        ]);
    }

    public function create(){
        return view('events.create');
    }
}
