<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventoControle;

Route::get('/', [eventoControle::class, 'index']);
Route::get('/eventos/criar', [eventoControle::class, 'criar']);
Route::get('/eventos/{id}', [eventoControle::class, 'show']);

Route::post('/eventos', [eventoControle::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
