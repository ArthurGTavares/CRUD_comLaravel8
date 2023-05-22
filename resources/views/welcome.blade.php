@extends('layouts.main')

@section('conteudo')
    <div class="row">
    <div id="container-busca" class="col-md-12">
        <h1>Busque Eventos</h1>
        <form action="/" method="GET">
            <div class="input-group">
                <input type="text" id="pesquisa" name="pesquisa" class="form-control" placeholder="Busque aqui...">
                <div class="input-goup-append">
                    <button class="btn btn-primary" type="submit"><ion-icon name="search-outline"></ion-icon></button>
                </div>
            </div>
        </form>
    </div>
    <div id="container-eventos" class="col-md-12">
        @if($pesquisa)
            <h2 class="ms-3 mt-5 mb-4">Resultados da busca: {{$pesquisa}} </h2>
        @else
            <h2 class="ms-3 mt-5">Próximos Eventos</h2>
            <p class="ms-3 mb-4">Veja os eventos que estão pra começar</p>
        @endif
        <div id="cards-eventos" class="row mb-4">
            @foreach($evento as $eventos)
            <div class="card-group col-md-3">
                <div class="card mb-4 shadow p-3 mb-5 bg-body rounded">
                    <img class="card-img-top" src="/imagem/eventos/{{ $eventos->imagem }}" alt="{{ $eventos->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $eventos->nome }}
                        </h5>
                        <p class="card-date">{{ date('d/m/Y', strtotime($eventos->data)) }}</p>
                        <p class="card-text mb-4"> 
                            {{ $eventos->descricao }}
                        </p>
                        <a class="btn btn-primary" href="/eventos/{{ $eventos->id }}">Saiba mais</a>
                    </div>
                </div>
            </div>
            @endforeach 
            @if(count($evento) == 0 && $pesquisa)
                <p>Não foi possível encontrar nenhum evento com {{$pesquisa}}! <a href="/">Ver todos</a></p>
            @elseif(count($evento) == 0)     
                <p>Não há eventos disponíveis</p>
            @endif      
        </div>
    </div>

@endsection