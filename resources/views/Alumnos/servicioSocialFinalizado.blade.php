@extends('adminlte::layouts.app')

@section('htmlheader_title','HOME')


@section('contentheader_title', 'HOME')

@section('main-content')
<div class="container-fluid">
  <div class="row">
<<<<<<< HEAD
   
>>>>>>> dc6e4dfc09d0f85fe3bcfbf4d6a13fbbcbc01fc0

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
<<<<<<< HEAD
            <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input class="form-control pull-right" id="datepicker" type="text">
                </div>
                <!-- /.input group -->
=======
              <div class="col-md-6">
                <h2>El futuro es hoy viejo! SS finalizado</h2>
                <p>Estadísticas de cantidad de alumnos que terminaron su servicio social
                en un ciclo </p>
                
>>>>>>> dc6e4dfc09d0f85fe3bcfbf4d6a13fbbcbc01fc0
              </div>
              
            </div>
            <p align="center"><a class="btn btn-success" href="#" role="button"><i class="fa fa-download"> Obtener Reporte</i></a></p>
            <p><a class="btn btn-danger" href="/alumnos" role="button"><i class="fa fa-backward"> Cancelar y regresar</i></a></p>

          </div>
        </div>
      </div>
      @endsection
