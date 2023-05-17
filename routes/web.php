<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventoControle;

Route::get('/', [eventoControle::class, 'index']);
Route::get('/eventos/criar', [eventoControle::class, 'criar']);

Route::get('/lista/{id}', function ($id) {
    return view('/eventos/lista',['id' => $id]);
    
});