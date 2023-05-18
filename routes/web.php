<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventoControle;

Route::get('/', [eventoControle::class, 'index']);
Route::get('/eventos/criar', [eventoControle::class, 'criar']);

Route::post('/eventos', [eventoControle::class, 'store']);

Route::get('/lista/{id}', function ($id) {
    return view('/eventos/lista',['id' => $id]);
    
});