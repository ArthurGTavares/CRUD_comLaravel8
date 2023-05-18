<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evento;

class eventoControle extends Controller
{
    public function index(){
        
        $eventos = Evento::all();
        return view('welcome', ['evento' => $eventos]);
    
    }

    public function criar(){
        return view('eventos.criar');

    }

    public function store(Request $request){
        $evento = new Evento;

        $evento->nome = $request->nome;
        $evento->descricao = $request->descricao;
        $evento->cidade = $request->cidade;
        $evento->privado = $request->privado;

        if($evento->privado == null){
            $evento->privado = "0"; 
        }

        $evento->save();

        return redirect('/');
    }
}
