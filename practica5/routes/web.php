<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoInicio');
Route::get('/formulario', [diarioController::class, 'metodoFormulario'])->name('apodoFormulario');
Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdo'])->name('apodoRecuerdos');


/* Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/formulario', 'formulario')->name('apodoFormulario');
Route::view('/recuerdos', 'recuerdos')->name('apodoRecuerdos'); */

