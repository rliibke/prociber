<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FreeTestController;
use App\Http\Controllers\DashboardController;

Route::middleware('visitor')->get('/', function () {
    return view('index');
});

Route::middleware('visitor')->get('/contato', function () {
    return view('contato',array('msg' => ''));
});

Route::middleware('visitor')->get('/politica', function () {
    return view('politica',array('msg' => ''));
});

Route::middleware('visitor')->get('/empresa', function () {
    return view('empresa',array('msg' => ''));
});

Route::middleware('visitor')->get('/backup', function () {
    return view('backup',array('msg' => ''));
});


Route::middleware('visitor')->get('/seguranca', function () {
    return view('seguranca',array('msg' => ''));
});


Route::middleware('visitor')->get('/clientes', function () {
    return view('clientes',array('msg' => ''));
});

Route::middleware('visitor')->get('/parceiros', function () {
    return view('parceiros',array('msg' => ''));
});



Route::get('/dashboard', [DashboardController::class,'index']);


Route::post('/contato', [ContatoController::class,'store']);
Route::post('/freetest', [FreeTestController::class,'store']);
