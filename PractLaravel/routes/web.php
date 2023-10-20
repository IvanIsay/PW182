<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;


// Rutas Individuales para controlador
Route::get('/',[diarioController::class,'metodoInicio'] )->name('apodoInicio');
Route::get('/formulario',[diarioController::class,'metodoFormulario'] )->name('apodoFormulario');
Route::get('/recuerdos',[diarioController::class,'metodoRecuerdos'] )->name('apodoRecuerdos');

Route::post('guardarRecuerdo',[diarioController::class,'metodoGuardar'] )->name('guardar');
















// Rutas Agrupadas tipo Controlador
/*
Route::controller(diarioController::class)->group(function (){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/formulario','metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdos','metodoRecuerdos')->name('apodoRecuerdos');
});

*/



/* Route::get('/', function () {
    return view('welcome');
});


Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/formulario', 'formulario')->name('apodoFormulario');
Route::view('/recuerdos', 'recuerdos')->name('apodoRecuerdos');
*/