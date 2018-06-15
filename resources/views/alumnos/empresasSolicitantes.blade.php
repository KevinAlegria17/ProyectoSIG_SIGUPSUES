@extends('adminlte::layouts.app')
@section('htmlheader_title','HOME')
@section('contentheader_title', 'ALUMNOS')
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
                  <h4>El reporte contendrá las empresas con las que se tienen acuerdos para enviar alumnos a desarrollar su servicio social </h4>
                <h4>Debe seleccionar un año para hacer los filtros y procesos necesarios</h4>
                
                <div class="panel panel-success">
                  <div class="panel-heading">GENERAR REPORTE </div> 
                  <div class="panel-body">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">AÑO</label>
                      </div>
                      <select class="custom-select col-4" name="anio" id="anio">
                        <option selected value="0">Todos</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2018">2018</option>
                      </select>
                    </div>
                    
                    <br>
                    <table width="300">
                      <tr>
                        <td width="150">  <button formaction="{{ route('reporteEmpresas') }}" type="submit" class="btn btn-block btn-primary btn-xs"  style='width:100px; height:40px' target="_blank">Ver Reporte</button> </td>
                        <td width="150">
                          <button formaction="{{ route('reporteEmpresasDescargar') }}" type="submit" class="btn btn-block btn-success btn-xs" id="download" name="download" target="_blank" style='width:100px; height:40px'>Descargar</button> 
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
            <!--Contenido termina aca-->
      </div>
    </div>
  </div>
  
  @endsection
