<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FreeTestController;
use App\Http\Controllers\DashboardController;

Route::middleware('visitor')->get('/', function () {
    return view('index');
});

Route::middleware('visitor')->get('/contato', function () {
    return view('contato');
});

Route::middleware('visitor')->get('/empresa', function () {
    return view('empresa');
});

Route::middleware('visitor')->get('/clientes', function () {
    return view('clientes');
});

Route::middleware('visitor')->get('/parceiros', function () {
    return view('parceiros');
});



Route::get('/dashboard', [DashboardController::class,'index']);


Route::post('/contato', [ContatoController::class,'store']);
Route::post('/freetest', [FreeTestController::class,'store']);
