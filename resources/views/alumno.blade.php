@extends('adminlte::layouts.app')
@section('htmlheader_title','HOME')
@section('contentheader_title', 'ALUMNOS')
@section('main-content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h2>{{ Auth::user()->name }}, Bienvenido al panel de Alumnos!</h2></div>
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
        <div class="panel-heading"><h4>Servicio Social finalizado<h4></div> 
          <div class="panel-body">
            <p>Estadísticas de cantidad de alumnos que terminaron su servicio social
            en un ciclo </p>
            <p><a class="btn btn-success" href="servicioSocialFinalizado" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading"><h4>Empresas solicitantes<h4>
          </div> 
          <div class="panel-body">
            <p>Empresas con las que se ha llegado a un acuerdo para mandar alumnos
            periódicamente.</p>
            <p><a class="btn btn-success" href="empresasSolicitantes" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
