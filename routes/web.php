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

Route::get('/','UsuarioController@index')->name('index');
Route::get('/cadUsuario',function(){
    return view('cadUsuario');
});

Route::post('/usuario/salvar/','UsuarioController@salvar')->name('usuario.salvar');
Route::get('/usuario/editar/{id}','UsuarioController@editar')->name('usuario.editar');
Route::get('/usuario/delete/{id}','UsuarioController@deletar')->name('usuario.delete');

