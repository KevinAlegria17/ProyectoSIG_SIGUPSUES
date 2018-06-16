@extends('adminlte::layouts.app')
@section('htmlheader_title','HOME')
@section('contentheader_title', 'SERVICIO SOCIAL')
@section('main-content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h2>{{ Auth::user()->name }}, Bienvenido al panel de Servicios Sociales!</h2></div>
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
        <div class="panel-heading"><h4>Mayor demanda<h4></div> 
          <div class="panel-body">
            <p> Se muestra el tipo de servicio social más demandado </p>
                  <p><a class="btn btn-success" href="/mayorDemanda" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading"><h4>Dinero ahorrado<h4>
          </div> 
          <div class="panel-body">
            <p> Verifica todos los servicios sociales realizados en un año específico para mostrar el dinero ahorrado mediante su realizacion</p>
                  <p><a class="btn btn-success" href="/dineroAhorrado" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
        <div class="panel panel-success">
        <div class="panel-heading"><h4>Existencias<h4></div> 
          <div class="panel-body">
            <p>Existencias de un determinado servicio social para una escuela en
                  específico</p>
                  <p><a class="btn btn-success" href="/existenciasPorEscuela" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection