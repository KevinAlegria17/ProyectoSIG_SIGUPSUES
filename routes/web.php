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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
Route::get('/alumnos', 'HomeController@alumnos')->name('alumnos');
Route::get('/proyectos', 'HomeController@proyectos')->name('proyectos');
Route::get('/serviciosocial', 'HomeController@serviciosocial')->name('serviciosocial');

Route::get('/servicioSocialFinalizado', 'AlumnosController@servicioSocialFinalizado')->name('servicioSocialFinalizado');
});
Route::get('/empresasSolicitantes', 'AlumnosController@empresasSolicitantes')->name('empresasSolicitantes');

Route::get('/RepoNoEscogido', 'ProyectosController@reponoesco')->name('RepoNoEscogido');
Route::get('/RepoAbandonados', 'ProyectosController@repoabandonados')->name('RepoAbandonados');
Route::get('/cuposDisponibles', 'ProyectosController@cuposdisponibles')->name('cuposDisponibles');
Route::get('/cantidadBeneficiarios', 'ProyectosController@cantidadBeneficiarios')->name('cantidadBeneficiarios');

