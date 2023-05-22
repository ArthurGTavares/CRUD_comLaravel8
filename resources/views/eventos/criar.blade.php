@extends('layouts.main')

@section('conteudo')

<div id="Scontainer-criar-evento" class="col-md-6 offset-md-3 mt-4">
    <h1 class="mb-4">Crie seu evento aqui</h1>
    <form action="/eventos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <label for="imagem" class="form-label">Imagem do evento:</label>
            <input type="file" id="imagem" name="imagem" class="form-control">
        </div>
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
        <div class="form-group mb-3">
            <label class="form-label" for="data">Data do Evento:</label>
            <input type="date" class="form-control" id="data" name="data">
        </div>          
        <div class="form-check form-switch mb-3">
            <input class="form-check-input" name="privado" value="1" type="checkbox" id="privado">
            <label class="form-check-label" for="privado">Evento Privado</label>            
        </div>
        <div class="form-group mb-3">                    
            <label class="form-label" for="title">Adicione Itens Presentes no Evento:</label><br>
            <div class="form-group">
                <input name="itens[]" type="checkbox" value="Cadeiras" > Cadeiras<br>   
            </div>    
            <div class="form-group">             
                <input name="itens[]" type="checkbox" value="Computadores" > Computadores<br>
            </div>
            <div class="form-group">
                <input name="itens[]" type="checkbox" value="Palco" > Palco<br>
            </div>
            <div class="form-group">
                <input name="itens[]" type="checkbox" value="Equipamento de Som" > Equipamento de Som<br>
            </div>
            <div class="form-group">
                <input name="itens[]" type="checkbox" value="Brindes" > Brindes    
            </div>
        </div>
        <div class="form-group mb-5">
            <button class="btn btn-primary" type="submit">Cadastrar Evento</button>
        </div>
    </form>
</div>

@endsection