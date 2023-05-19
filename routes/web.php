<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventoControle;

Route::get('/', [eventoControle::class, 'index']);
Route::get('/eventos/criar', [eventoControle::class, 'criar']);
Route::get('/eventos/{$id}', [eventoControle::class, 'show']);

Route::post('/eventos', [eventoControle::class, 'store']);
