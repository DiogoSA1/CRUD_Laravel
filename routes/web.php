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

Route::get('/api', function () {
    $objeto = Usuario::all();
    return $objeto->toJson();
});

Route::get('/', function () {
    return redirect('/usuarios/lista');
});

Route::post('/usuarios', [App\Http\Controllers\UsuarioController::class, 'store'])->name('name.store');

Route::resource('/usuarios/lista','App\Http\Controllers\UsuarioController');

