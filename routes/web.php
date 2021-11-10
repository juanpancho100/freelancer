<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnuncioController;
use App\Models\Anuncio;

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
    return view('welcome');
});
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/crear', function () {
    return view('crear');
});


Auth::routes();

Route::resource('anuncios','App\Http\Controllers\AnuncioController');

Route::get('/home', [AnuncioController::class, "mostrar"]);
Route::post('/crear', [AnuncioController::class, "store"]);
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/crear', function () {
    return view('crear');
});
