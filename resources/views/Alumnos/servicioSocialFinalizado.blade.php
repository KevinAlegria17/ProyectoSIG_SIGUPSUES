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

            <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <!--input class="form-control pull-right" id="datepicker" type="text"-->
                      <input type="text" class="form-control">
                </div>
                <!-- /.input group -->
              <div class="col-md-12">
                <h2>El futuro es hoy viejo! SS finalizado</h2>
                <p>Estadísticas de cantidad de alumnos que terminaron su servicio social
                en un ciclo </p>
                
              </div>
              
            </div>
            <p align="center"><a class="btn btn-success col-md-3 col-md-offset-5" href="#" role="button"><i class="fa fa-download"> Obtener Reporte</i></a></p>
            <p><a class="btn btn-danger col-md-3 col-md-offset-1" href="/alumnos" role="button"><i class="fa fa-backward"> Cancelar y regresar</i></a></p>

          </div>
        </div>
      </div>
      <script type="text/javascript">
           $('#sandbox-container input').datepicker({
        format: "yyyy",
        endDate: "31/12/2018"
    });
      </script>
      @endsection
