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

Auth::routes();

Route::get('/', 'IndexController@welcome')->name('welcome');
Route::get('/page/{id}', 'IndexController@page')->name('page');
Route::get('/admin', 'HomeController@index')->name('home');

Route::resource('about',  'AboutController');