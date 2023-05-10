<?php

use Illuminate\Support\Facades\Route;

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
  return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('inscribir', [App\Http\Controllers\InscripcionesController::class, 'capacitaciones'])->name('inscribir');
Route::post('/saveinscripcion', [App\Http\Controllers\InscripcionesController::class, 'store'])->name('saveinscripcion');
Route::post('/deleteinscripcion', [App\Http\Controllers\InscripcionesController::class, 'destroy'])->name('deleteinscripcion');



Route::resource('capacitaciones', App\Http\Controllers\CapacitacionController::class);