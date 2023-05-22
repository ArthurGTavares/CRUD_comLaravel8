@extends('layouts.main')

@section('titulo', $evento->nome)

@section('conteudo')

    <div class="col-md-10 offset-md-1 mt-5 mb-5">
        <div class="row">
            <div id="imagem" class="col-md-6">
                <img class="img-fluid" src="/imagem/eventos/{{  $evento->imagem  }}" alt="{{$evento->nome}}">
            </div>
            <div id="informacao" class="col-md-6">
                <h1>{{ $evento->nome }}</h1>
                <p class="evento-cidade"><ion-icon name="location-outline"></ion-icon> {{ $evento->cidade }}</p>
                <p class="evento-participantes"><ion-icon name="people-outline"></ion-icon> xx Participantes Confirmados</p>
                <p class="evento-criador"><ion-icon name="star-outline"></ion-icon> Nome do criador do evento</p>
                <a href="#" class="btn btn-primary mt-3 mb-4">Confirmar Presença</a>
                <h3>O evento conta com:</h3>
                <ul id="itens-lista">
                    @foreach($evento->itens as $item)
                        <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-3">
                <h3>Sobre o evento:</h3>
                <p class="evento-descricao">{{$evento->descricao}}</p>
            </div>
        </div>
    </div>

@endsection