<?php
use Illuminate\Support\Facades\Route;

// Você pode deixar vazio ou adicionar uma rota básica para teste.
Route::get('/', function () {
    return response()->json(['message' => 'API is working!']);
});