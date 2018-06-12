@extends('adminlte::layouts.app')

@section('htmlheader_title','HOME')


@section('contentheader_title', 'HOME')

@section('main-content')
<div class="container-fluid">
  <div class="row">
   

      <div class="col-md-9">
        <div class="card">
          <div class="card-header">PROYECTOS</div>

          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif

            <h1>{{ Auth::user()->name }}, Bienvenido al panel de Proyectos !</h1>
            <br></br>

            <div class="container">
              <!-- Example row of columns -->
              <div class="row">
                <div class="col-md-3">
                  <h2>Proyectos no escogidos</h2>
                  <p> Muestra cuáles proyectos tienen más de un año de estar ingresados,
                  y que ningún estudiante los ha escogido </p>
                  <p><a class="btn btn-outline-success" href="RepoNoEscogido" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-3">
                  <h2>Proyectos abandonados</h2>
                  <p> Muestra cuales proyectos han sido abandonados por sus
                  integrantes y razón por la cual haya quedado inconcluso.</p>
                  <p><a class="btn btn-outline-success" href="RepoAbandonados" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-3">
                  <h2>Cupos disponibles</h2>
                  <p>Muestra todos los proyectos que estén disponibles y los que ya están en
                  proceso, pero aún les falta un integrante del equipo</p>
                  <p><a class="btn btn-outline-success" href="cuposDisponibles" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-3">
                  <h2>Cantidad de beneficiarios</h2>
                  <p> Reporte con proyectos que tengan mayor cantidad de beneficiarios</p>
                  <p><a class="btn btn-outline-success" href="cantidadBeneficiarios" role="button">Obtener &raquo;</a></p>
                </div>
              </div>

            </div>
          </div>
        </div>
        @endsection
