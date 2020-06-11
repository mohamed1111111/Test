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

Route::POST('/categories/{categories}/produts','CategoriesProdutsController@store');

Route::resource('categories', 'CategoriesController');
Route::get('/produts/{{produts->id}}/edit','ProdutsController@edit');
Route::get('produts', 'ProdutsController@index');

Route::resource('produts', 'ProdutsController');

Route::get('/home', 'HomeController@index')->name('home');
