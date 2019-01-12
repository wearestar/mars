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

/*静态页面 例如header footer, 静态Body*/
Route::get('/', 'StaticPagesController@home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
