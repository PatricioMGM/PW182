<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bibliotecaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */


Route::get('/', [bibliotecaController::class, 'mInicio'])->name('apodoInicio');
Route::get('/formulario', [bibliotecaController::class, 'mFormulario'])->name('apodoFormulario');
Route::post('/RegistrarLibro', [bibliotecaController::class, 'mRegistrar'])->name('registrar');