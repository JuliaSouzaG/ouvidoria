<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


// Rotas do menu
Route::get('/',[\App\Http\Controllers\HomeController::class, 'home'])->name('home'); 

Route::get('/cadastro', [\App\Http\Controllers\CadastroAdminController::class,'cadastro'])->name('cadastro');

// Home
Route::get('/elogios', [\App\Http\Controllers\ElogiosController::class, 'elogios'])->name('elogios');

Route::get('/solicitacoes', [\App\Http\Controllers\SolicitacoesController::class, 'solicitacoes'])->name('solicitacoes');

Route::get('/reclamacoes', [\App\Http\Controllers\ReclamacoesController::class, 'reclamacoes'])->name('reclamacoes');

Route::get('/sugestoes', [\App\Http\Controllers\SugestoesController::class, 'sugestoes'])->name('sugestoes');

Route::get('/denuncias', [\App\Http\Controllers\DenunciasController::class, 'denuncias'])->name('denuncias');

Route::get('/feedback', [\App\Http\Controllers\FeedbackController::class, 'feedback'])->name('feedback');

//simulando envio de parametros
Route::get(
    '/cadastro/{nome}/{categoria}', 
    function(
        string $nome, 
        string $categoria){
    echo 'Meu nome é: '.$nome. ' - Categoria: '.$categoria;
});