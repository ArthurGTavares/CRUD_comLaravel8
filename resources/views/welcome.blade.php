@extends('layouts.main')

@section('conteudo')
    
    <div id="container-busca" class="col-md-12">
        <h1>Busque Eventos:</h1>
        <form action="" method="">
            <input type="text" name="busca" class="form-control" placeholder="Busque aqui...">
        </form>
    </div>
    <div id="container-eventos" class="col-md-12">
        <h2>Próximos Eventos:</h2>
        <p>Veja os eventos que estão pra começar</p>
        <div id="cards-eventos" class="row">
            @foreach($evento as $eventos)
            <div class="card col-md-3">
                <img src="/image/images.jfif" alt="{{ $eventos->nome }}">
                <div class="card-body">
                    <div class="card-title">
                        {{ $eventos->nome }}
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>

@endsection