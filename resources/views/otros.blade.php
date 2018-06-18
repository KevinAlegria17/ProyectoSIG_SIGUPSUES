@extends('adminlte::layouts.app')
@section('htmlheader_title','HOME')
@section('contentheader_title', 'OTROS')
@section('main-content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h2>{{ Auth::user()->name }}, Bienvenido al panel Otros!</h2></div>
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
        <div class="panel-heading"><h4>Cantidad de peticiones que llegan a las escuelas<h4></div> 
          <div class="panel-body">
            <p>Muestra las peticiones que llegan a las escuelas de servicios sociales.</p>
            <p><a class="btn btn-success" href="{{ route('peticiones') }}" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading"><h4>Existencias de un determinado servicio social para una escuela<h4>
          </div> 
          <div class="panel-body">
            <p>Muestra las existencia de algun servicio social en las escuelas almacenadas en el sistema.</p>
            <p><a class="btn btn-success" href="#" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading"><h4>Tutores con mas proyectos asesorados<h4>
          </div> 
          <div class="panel-body">
            <p>Muestra la cantidad de proyectos asesoradpos por tutor.</p>
            <p><a class="btn btn-success" href="#" role="button">Obtener &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
