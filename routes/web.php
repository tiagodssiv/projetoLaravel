<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inical;



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
Route::get('/api/contatos','App\Http\Controllers\inical@api');
Route::get('/','App\Http\Controllers\inical@index');
Route::get('/excluir/{id}','App\Http\Controllers\inical@destroy');
Route::get('/lista','App\Http\Controllers\inical@lista');
Route::get('/pesquisar','App\Http\Controllers\inical@buscaCampo');
Route::get('/cadastro','App\Http\Controllers\inical@create');
Route::get('/edicao/{id}','App\Http\Controllers\inical@show');
Route::post('/edicao/{id}','App\Http\Controllers\inical@update')->name('editar_contato');
Route::post('/cadastrar','App\Http\Controllers\inical@store');


