<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\ControllerCRUDD;


//Rutas ControllerCRUDD
Route::get('/recuerdo/create',[ControllerCRUDD::class,'create'] )->name('recuerdo.create');
Route::post('/recuerdo',[ControllerCRUDD::class,'store'] )->name('recuerdo.store');
Route::get('/recuerdo',[ControllerCRUDD::class,'index'] )->name('recuerdo.index');
Route::post('/recuerdo/{id}/confirm',[ControllerCRUDD::class,'update'] )->name('recuerdo.update');


// Rutas IdiarioController

Route::get('/',[diarioController::class,'metodoInicio'] )->name('apodoInicio');




















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