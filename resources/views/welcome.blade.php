@extends('layouts.main')

@section('conteudo')
    
    <div id="container-busca" class="col-md-12">
        <h1>Busque Eventos</h1>
        <form action="" method="">
            <input type="text" name="busca" class="form-control" placeholder="Busque aqui...">
        </form>
    </div>
    <div id="container-eventos" class="col-md-12">
        <h2 class="ms-3 mt-5">Próximos Eventos</h2>
        <p class="ms-3 mb-4">Veja os eventos que estão pra começar</p>
        <div id="cards-eventos" class="row mb-4">
            @foreach($evento as $eventos)
            <div class="card-group col-md-3">
                <div class="card mb-4 shadow p-3 mb-5 bg-body rounded">
                    <img class="card-img-top" src="/imagem/eventos/{{ $eventos->imagem }}" alt="{{ $eventos->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $eventos->nome }}
                        </h5>
                        <p class="card-text mb-4"> 
                            {{ $eventos->descricao }}
                        </p>
                        <a class="btn btn-primary" href="/">Saiba mais</a>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>

@endsection