@extends('adminlte::layouts.app')
@section('htmlheader_title','HOME')
@section('contentheader_title', 'PROYECTOS')
@section('main-content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h2>{{ Auth::user()->name }}, Bienvenido al panel de Proyectos!</h2></div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <br>
        </div>
      </div>
      <!--Colocar contenido aca-->
      <div class="panel panel-success">
        <div class="panel-heading"><h4>Proyectos no escogidos<h4></div> 
          <div class="panel-body">
            <p> Muestra cuáles proyectos tienen más de un año de estar ingresados,
                  y que ningún estudiante los ha escogido </p>
                  <p><a class="btn btn-success" href="RepoNoEscogido" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading"><h4>Proyectos abandonados<h4>
          </div> 
          <div class="panel-body">
            <p> Muestra cuales proyectos han sido abandonados por sus
                  integrantes y razón por la cual haya quedado inconcluso.</p>
                  <p><a class="btn btn-success" href="RepoAbandonados" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
        <div class="panel panel-success">
        <div class="panel-heading"><h4>Cupos disponibles<h4></div> 
          <div class="panel-body">
            <p>Muestra todos los proyectos que estén disponibles y los que ya están en
                  proceso, pero aún les falta un integrante del equipo</p>
                  <p><a class="btn btn-success" href="cuposDisponibles" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
        <div class="panel panel-success">
        <div class="panel-heading"><h4>Cantidad de beneficiarios<h4></div> 
          <div class="panel-body">
            <p> Reporte con proyectos que tengan mayor cantidad de beneficiarios</p>
                  <p><a class="btn btn-success" href="cantidadBeneficiarios" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
