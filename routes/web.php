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
use App\Models\vagas;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/vagas/novo', 'App\Http\Controllers\VagasController@create');
Route::post('/vagas/novo', 'App\Http\Controllers\VagasController@store')->name('salvar_vaga');
