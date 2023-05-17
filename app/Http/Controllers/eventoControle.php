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
}
