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
Route::get('/vagas/ver','App\Http\Controllers\VagasController@show');
Route::get('/vagas/del/{id}', 'App\Http\Controllers\VagasController@destroy')->name('excluir_vagas');
Route::get('/vagas/edit/{id}', 'App\Http\Controllers\VagasController@edit')->name('editar_vagas');
Route::post('/vagas/edit/{id}', 'App\Http\Controllers\VagasController@edit')->name('atualizar_vagas');

Route::get('/usuario/novo', 'App\Http\Controllers\UsuarioController@create');
Route::post('/usuario/novo', 'App\Http\Controllers\UsuarioController@store')->name('salvar_usuario');

Route::get('/adm/novo', 'App\Http\Controllers\AdmController@create');
Route::post('/adm/novo', 'App\Http\Controllers\AdmController@store')->name('salvar_adm');

Route::get('/user/novo', 'App\Http\Controllers\UserController@create');
Route::post('/user/novo', 'App\Http\Controllers\UserController@store')->name('salvar_user');
