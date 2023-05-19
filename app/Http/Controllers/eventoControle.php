<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evento;

class eventoControle extends Controller
{
    public function index(){
        
        $evento = Evento::all();
        return view('welcome', ['evento' => $evento]);
    
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
        //O if esta vendo se tem um arquivo no campo de imagem e se ele é valido
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImagem = $request->imagem;
            //to pegando a extensão da imagem
            $extensao = $requestImagem->extension();
            //agr vai renomear
            $nomeImagem = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extensao;
            $requestImagem->move(public_path('imagem/eventos'), $nomeImagem);
            //e vai salvar com o novo nome no banco
            $evento->imagem = $nomeImagem;
        }
        $evento->save();

        return redirect('/')->with('mensagem', 'Seu evento foi criado com sucesso!');
    }
}
