@extends('adminlte::layouts.app')
@section('htmlheader_title','HOME')
@section('contentheader_title', 'PROYECTOS')
@section('main-content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"></div>
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
      <form  method="POST" target="_blank">
              {{ csrf_field() }} 
              <div class="col-xs-11">
                <h3>{{ Auth::user()->name }}, Esta a punto de generar un reporte</h3>
                  <h4>El reporte contendrá los proyectos que tienen mas de un año de estar ingresados en el sistema y que nadie ha escogido</h4>
                <div class="panel panel-success">
                  <div class="panel-heading">GENERAR REPORTE </div> 
                  <div class="panel-body">
                    <div class="input-group mb-3">
                    </div>
                    <br>
                    <table width="300">
                      <tr>
                        <td width="150">  <button formaction="{{ route('reporteNoEscogidos') }}" type="submit" class="btn btn-block btn-primary btn-xs"  style='width:100px; height:40px' target="_blank">Ver Reporte</button> </td>
                        <td width="150">
                          <button formaction="{{ route('reporteNoEscogidosDescargar') }}" type="submit" class="btn btn-block btn-success btn-xs" id="download" name="download" target="_blank" style='width:100px; height:40px'>Descargar</button> 
                        </td>
                      </tr>
                    </table>
                    <br><br>
                    <!-- </div> -->
                  </div>
                </div>
                <p align="center"><a class="btn btn-danger" href="/proyectos" role="button"><i class="fa fa-backward"> Cancelar y regresar</i></a></p>
              </div><!-- /.box-body -->
            </form>
            <!--Contenido termina aca-->
      </div>
    </div>
  </div>
  
  @endsection
