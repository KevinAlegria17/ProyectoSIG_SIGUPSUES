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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/alumnos', 'HomeController@alumnos')->name('alumnos');

Route::get('/proyectos', 'HomeController@proyectos')->name('proyectos');

Route::get('/serviciosocial', 'HomeController@serviciosocial')->name('serviciosocial');