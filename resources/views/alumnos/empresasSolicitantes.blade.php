@extends('adminlte::layouts.app')

@section('htmlheader_title','HOME')


@section('contentheader_title', 'HOME')

@section('main-content')
<div class="container-fluid">
  <div class="row">

    <div class="col-md-9">
      <div class="card">
        <div class="card-header">ALUMNOS</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          <h1>{{ Auth::user()->name }}, Bienvenido al panel de Alumnos!</h1>
          <br></br>

          <div class="container">
            <!-- Example row of columns -->
            <div class="row">
              <div class="col-md-6">
                <h2>El futuro es hoy viejo! Empresas Solicitantes</h2>
                <p>Estadísticas de cantidad de alumnos que terminaron su servicio social
                en un ciclo </p>
                
              </div>
              
            </div>
            <p align="center"><a class="btn btn-success" href="#" role="button"><i class="fa fa-download"> Obtener Reporte</i></a></p>
            <p><a class="btn btn-danger" href="/alumnos" role="button"><i class="fa fa-backward"> Cancelar y regresar</i></a></p>

          </div>
        </div>
      </div>
      @endsection
