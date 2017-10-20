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

// Route::get('todo',function(){
// 	return view('todo');
// });

Route::get('/', 'CreatesController@todo');
Route::get('/create', function(){
	return view('create');
});
Route::POST('/insert', 'CreatesController@add');
Route::GET('/update/{id}', 'CreatesController@update');
Route::POST('/edit/{id}', 'CreatesController@edit');
Route::GET('/read/{id}', 'CreatesController@read');
Route::GET('/delete/{id}', 'CreatesController@delete');