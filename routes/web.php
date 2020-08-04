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
    return redirect()->action('PropertyController@index');
});

Route::get('/imoveis', 'PropertyController@index');

Route::get('/imoveis/novo', 'PropertyController@create');
Route::post('/imoveis/salvar', 'PropertyController@salvar');

Route::get('/imoveis/{id}', 'PropertyController@listar');
Route::get('/imoveis/salvar', 'PropertyController@salvar');