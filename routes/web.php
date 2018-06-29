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
    return redirect(url('/login'));
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
Route::get('/otros', 'HomeController@otros')->name('otros');

Route::get('/servicioSocialFinalizado', 'AlumnosController@servicioSocialFinalizado')->name('servicioSocialFinalizado');

Route::get('/empresasSolicitantes', 'AlumnosController@empresasSolicitantes')->name('empresasSolicitantes');

Route::get('/RepoNoEscogido', 'ProyectosController@reponoesco')->name('RepoNoEscogido');
Route::get('/RepoAbandonados', 'ProyectosController@repoabandonados')->name('RepoAbandonados');
Route::get('/cuposDisponibles', 'ProyectosController@cuposdisponibles')->name('cuposDisponibles');
Route::get('/cantidadBeneficiarios', 'ProyectosController@cantidadBeneficiarios')->name('cantidadBeneficiarios');

Route::get('/peticiones', 'OtrosController@peticiones')->name('peticiones');

Route::get('/mayorDemanda', 'ServicioSocialController@mayorDemanda')->name('mayorDemanda');
Route::get('/dineroAhorrado', 'ServicioSocialController@dineroAhorrado')->name('dineroAhorrado');
Route::get('/existenciasPorEscuela', 'ServicioSocialController@existenciasPorEscuela')->name('existenciasPorEscuela');




/*Reportes para SS finalizado*/
 Route::post('/reportes/post', 'ReporteController@servicioSocialFinalizado')->name('reporte');
 Route::post('/reportes/descargar', 'ReporteController@reporteDescargar')->name('reporteDescargar');
 
 Route::post('/reportes/emp', 'ReporteController@reporteEmpresas')->name('reporteEmpresas');
 Route::post('/reportes/emp_descargar', 'ReporteController@reporteEmpresasDescargar')->name('reporteEmpresasDescargar');
 Route::post('/reportes/no_esc', 'ReporteController@reporteNoEscogidos')->name('reporteNoEscogidos');
 Route::post('/reportes/no_esc_descargar', 'ReporteController@reporteNoEscogidosDescargar')->name('reporteNoEscogidosDescargar');
 Route::post('/reportes/aband', 'ReporteController@reporteAbandonados')->name('reporteAbandonados');
 Route::post('/reportes/aband_descargar', 'ReporteController@reporteAbandonadosDescargar')->name('reporteAbandonadosDescargar');
 Route::post('/reportes/cant_bene', 'ReporteController@reporteCantidadBeneficiarios')->name('reporteCantidadBeneficiarios');
 Route::post('/reportes/cant_bene_descargar', 'ReporteController@reporteCantidadBeneficiariosDescargar')->name('reporteCantidadBeneficiariosDescargar');
 Route::post('/reportes/cupos', 'ReporteController@reporteCupos')->name('reporteCupos');
 Route::post('/reportes/cupos_descargar', 'ReporteController@reporteCuposDescargar')->name('reporteCuposDescargar');

 Route::post('/reportes/dineroAhorrado', 'ReporteController@dineroAhorrado')->name('dineroAhorrado');
 Route::post('/reportes/dineroAhorrado_descargar', 'ReporteController@dineroAhorradoDescargar')->name('dineroAhorradoDescargar');

 
 Route::post('/reportes/mayorDemanda', 'ReporteController@mayorDemanda')->name('mayorDemanda');
  Route::post('/reportes/mayorDemandaDescargar', 'ReporteController@mayorDemandaDescargar')->name('mayorDemandaDescargar');
 Route::post('/repoexistenciasPorEscuela', 'ReporteController@reporteExistencias')->name('existenciaEscuela');
Route::post('/repoexistenciasPorEscuelaDescargar', 'ReporteController@reporteExistenciasDescargar')->name('existenciaEscuelaDescargar');

 Route::post('/reportes/peticiones', 'ReporteController@cantidadPeticiones')->name('cantidadPeticiones');
 Route::post('/reportes/peticiones_descargar', 'ReporteController@cantidadPeticiones')->name('cantidadPeticionesDescargar');

});
