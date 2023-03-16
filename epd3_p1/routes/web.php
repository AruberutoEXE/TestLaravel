<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\EmpleadoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect('Persona');
});
//Route::get('/', 'PersonaController@index')->name('Persona.index');
Route::resource('Persona', PersonaController::class);
Route::resource('Trabajador', TrabajadorController::class);
Route::resource('Gerente', GerenteController::class);
Route::resource('Empleado', EmpleadoController::class);
//Route::get('Persona.create', function () {    return view('welcome');    });