<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return 'Primeira lógica com Laravel';
});

Route::get('/produtos','ProdutoController@lista');
Route::get('/produtos/mostra/{id}','ProdutoController@mostra')->where('id', '[0-9]+');
//{id} quer dizer q o id é uma variavel q aceita tudo 
//where para controlar o q vai entrar no id
Route::get('/produtos/novo','ProdutoController@novo');
Route::post('/produtos/adiciona','ProdutoController@adiciona');
Route::get('/produtos/remove/{id}','ProdutoController@remove')->where('id', '[0-9]+');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/altera/{id}','ProdutoController@altera')->where('id', '[0-9]+');

Route::get('/login','LoginController@login');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);