<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;



Route::get('/',[\App\Http\Controllers\HomeController::class, 'home']); 

Route::get('/cadastro', [\App\Http\Controllers\CadastroAdminController::class,'cadastro']);

Route::get('/elogios', [\App\Http\Controllers\ElogiosController::class, 'elogios']);

Route::get('/solicitacoes', [\App\Http\Controllers\SolicitacoesController::class, 'solicitacoes']);

Route::get('/reclamacoes', [\App\Http\Controllers\ReclamacoesController::class, 'reclamacoes']);

Route::get('/sugestoes', [\App\Http\Controllers\SugestoesController::class, 'sugestoes']);

Route::get('/denuncias', [\App\Http\Controllers\DenunciasController::class, 'denuncias']);

Route::get('/feedback', [\App\Http\Controllers\FeedbackController::class, 'feedback']);

//simulando envio de parametros
Route::get(
    '/cadastro/{nome}/{categoria}', 
    function(
        string $nome, 
        string $categoria){
    echo 'Meu nome é: '.$nome. ' - Categoria: '.$categoria;
});