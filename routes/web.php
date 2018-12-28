<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//*************ROTAS PERSONALIZADAS******************

//ROTAS DE PLANO DE ESTUDO
Route::get('/cad_plano', 'PlanoController@index');

//ROTAS DE DISCIPLINAS
Route::get('/cad_disciplina', 'DisciplinaController@index');
