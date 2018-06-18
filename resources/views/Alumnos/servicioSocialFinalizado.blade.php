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

            <form  method="POST" target="_blank">
      {{ csrf_field() }} 
      <div class="col-xs-10">
       <div class="panel panel-success">
        <div class="panel-heading">GENERAR REPORTE </div> 
        <div class="panel-body">

            Ingrese el año y la escuela en que desea obtener reporte de alumnos que realizaron su Servicio Social <br><br>
            <label>Año: *</label>
            <input   type="number" id="anio" name="anio" title="Ingrese un año"   size="40" required>
            <br><br>
<br><br>
             


<table width="300">

  <tr>
            <td width="150">  <button formaction="{{ route('reporte') }}" type="submit" class="btn btn-block btn-primary btn-xs"  style='width:100px; height:40px' target="_blank">Ver Reporte</button> </td>
            <td width="150">
          <button formaction="{{ route('reporteDescargar') }}" type="submit" class="btn btn-block btn-success btn-xs" id="download" name="download" target="_blank" style='width:100px; height:40px'>Descargar</button> 
          </td></tr>
          </table>
          <br><br>


<!-- </div> -->
</div>
</div>

        </div><!-- /.box-body -->


  </form> 
            

          </div>
        </div>
      </div>
      @endsection
