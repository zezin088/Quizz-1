<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerguntaController;

Route::get('/', [PerguntaController::class, 'inicio'])
    ->name('inicio');

Route::get('/responder', [PerguntaController::class, 'responder'])
    ->name('responder');

Route::post('/quizz/responder', [PerguntaController::class, 'processarRespostas'])
    ->name('quizz.responder');
