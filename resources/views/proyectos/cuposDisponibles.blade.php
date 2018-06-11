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

          <h1>{{ Auth::user()->name }}, Vamos por ese reporte!</h1>
          <br></br>

          <div class="container">
            <!-- Example row of columns -->
            <div >
                <h4>Seleccione el año del que desea conocer los Cupos Disponibles</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">AÑO</label>
                  </div>
                  <select class="custom-select col-4" id="inputGroupSelect01">
                    <option selected>Seleccione...</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="0">Todos</option>
                  </select>
                </div>
                <h4>Seleccione el ciclo a analizar su reporte</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">CICLO</label>
                  </div>
                  <select class="custom-select col-4" id="inputGroupSelect01" >
                    <option selected>Seleccione...</option>
                    <option value="1">Ciclo I</option>
                    <option value="2">Ciclo II</option>
                    <option value="0">Ambos</option>
                  </select>
                </div>
                
                <p align="center"><a class="btn btn-success" href="#" role="button"><i class="fa fa-download"> Obtener Reporte</i></a></p>
                <p><a class="btn btn-danger" href="/proyectos" role="button"><i class="fa fa-backward"> Cancelar y regresar</i></a></p>
              </div>

          </div>
        </div>
      </div>
      @endsection
