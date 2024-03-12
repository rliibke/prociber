<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FreeTestController;
use App\Http\Controllers\DashboardController;

Route::middleware('visitor')->get('/', function () {
    return view('index');
});

Route::middleware('visitor')->get('/webprinter', function () {
    return view('webprinter');
});

Route::middleware('visitor')->get('/webassist', function () {
    return view('webassist');
});

Route::middleware('visitor')->get('/contato', function () {
    return view('contato');
});

Route::middleware('visitor')->get('/duvidas', function () {
    return view('perguntas');
});

Route::middleware('visitor')->get('/clientes', function () {
    return view('clientes');
});

Route::middleware('visitor')->get('/parceiros', function () {
    return view('parceiros');
});

Route::middleware('visitor')->get('/blog', function () {
    return view('blog');
});


Route::get('/dashboard', [DashboardController::class,'index']);


Route::post('/contact', [ContatoController::class,'store']);
Route::post('/freetest', [FreeTestController::class,'store']);

Route::get('/details', function () {
    return view('topics-detail');
});

