@extends('layouts.main')

@section('titulo', 'PÁGINA DE EVENTOS')

@section('conteudo')
    @foreach($evento as $eventos)
        <p>{{ $eventos->nome }} - {{ $eventos->descricao }}</p><br>
    @endforeach
@endsection