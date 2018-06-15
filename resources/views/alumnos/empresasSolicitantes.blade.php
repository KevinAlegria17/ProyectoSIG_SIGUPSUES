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

          <div class="container">
            <!-- Example row of columns -->
            <div class="row">
            </div>
            <form  method="POST" target="_blank">
              {{ csrf_field() }} 
              <div class="col-xs-11">
                <h3>{{ Auth::user()->name }}, Bienvenido al panel de Alumnos!</h3>
                <p>Estadísticas de cantidad de alumnos que terminaron su servicio social
                en un ciclo </p>
                <div class="panel panel-success">
                  <div class="panel-heading">GENERAR REPORTE </div> 
                  <div class="panel-body">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">AÑO</label>
                      </div>
                      <select class="custom-select col-4" name="anio" id="anio">
                        <option selected>Seleccione...</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2018">2018</option>
                        <option value="0">Todos</option>
                      </select>
                    </div>
                    <h4>Seleccione el ciclo a analizar su reporte</h4>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">CICLO</label>
                      </div>
                      <select class="custom-select col-4" name="ciclo" id="ciclo" >
                        <option selected>Seleccione...</option>
                        <option value="1">Ciclo I</option>
                        <option value="2">Ciclo II</option>
                        <option value="0">Ambos</option>
                      </select>
                    </div>
                    <br>
                    <table width="300">
                      <tr>
                        <td width="150">  <button formaction="{{ route('reporte') }}" type="submit" class="btn btn-block btn-primary btn-xs"  style='width:100px; height:40px' target="_blank">Ver Reporte</button> </td>
                        <td width="150">
                          <button formaction="{{ route('reporte_Descargar') }}" type="submit" class="btn btn-block btn-success btn-xs" id="download" name="download" target="_blank" style='width:100px; height:40px'>Descargar</button> 
                        </td>
                      </tr>
                    </table>
                    <br><br>
                    <!-- </div> -->
                  </div>
                </div>
                <p align="center"><a class="btn btn-danger" href="/alumnos" role="button"><i class="fa fa-backward"> Cancelar y regresar</i></a></p>
              </div><!-- /.box-body -->
            </form> 
          </div>
        </div>
      </div>
      @endsection
