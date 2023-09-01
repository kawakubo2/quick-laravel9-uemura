<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'HelloController@index');
Route::get('/hello/view', 'HelloController@view');

Route::get('/book/list', 'BookController@list');
Route::get('/book/create', 'BookController@create');
Route::post('/book/save', 'BookController@save');
Route::get('/book/{id}/edit', 'BookController@edit');
Route::patch('/book/{id}', 'BookController@update');
Route::get('/book/{id}', 'BookController@show');
Route::delete('/book/{id}', 'BookController@destroy');
