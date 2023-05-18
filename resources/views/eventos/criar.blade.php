@extends('layouts.main')

@section('conteudo')

<div id="Scontainer-criar-evento" class="col-md-6 offset-md-3 mt-4">
    <h1 class="mb-4">Crie seu evento aqui</h1>
    <form action="/eventos" method="POST">
        @csrf
        <div class="form-group mb-2">
            <label class="form-label" for="nome">Evento: </label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Evento">
        </div>
        <div class="form-group mb-2">
            <label class="form-label" for="descricao">Descrição: </label>
            <textarea class="form-control" id="descricao" name="descricao" placeholder="Descreva sobre o Evento..."></textarea>
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="cidade">Cidade em que vai acontecer: </label>
            <select class="form-select" name="cidade" id="cidade">
                <option selected>Selecione a cidade</option>
                <option value="Natal">Natal</option>
                <option value="Santa Cruz">Santa Cruz</option>
                <option value="São paulo">São Paulo</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
            </select>
        </div>
        <div class="form-check form-switch mb-3">
            <input class="form-check-input" name="privado" value="1" type="checkbox" id="privado">
            <label class="form-check-label" for="privado">Evento Privado</label>
        </div>
        <div class="form-group mb-5">
            <button class="btn btn-primary" type="submit">Cadastrar Evento</button>
        </div>
    </form>
</div>

@endsection