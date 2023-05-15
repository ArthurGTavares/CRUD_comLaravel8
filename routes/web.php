<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventoControle;


Route::get('/', [eventoControle::class, 'index']);
Route::get('/events/create', [eventoControle::class, 'create']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});
