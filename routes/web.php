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

/*用户相关操作 注册， 修改密码， 用户激活等*/
Route::get('signup','UsersController@create')->name('signup');

/*用户状态操作 登录， 退出等*/
Route::get('login', 'SessionsController@create')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
