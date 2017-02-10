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

Route::get('/', 'HomeController@index');
Route::get('/vitrine', 'VitrineController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/message', 'MessageController@index');
Route::get('/contact/new', 'ContactController@contactForm');
Route::post('/contact/new', 'ContactController@newMessage');
