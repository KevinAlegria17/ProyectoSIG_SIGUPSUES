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
                <h2>Servicio Social finalizado</h2>
                <p>Estadísticas de cantidad de alumnos que terminaron su servicio social
                en un ciclo </p>
                <p><a class="btn btn-outline-success" href="servicioSocialFinalizado" role="button">Obtener &raquo;</a></p>
              </div>
              <div class="col-md-6">
                <h2>Empresas solicitantes</h2>
                <p>Empresas con las que se ha llegado a un acuerdo para mandar alumnos
                periódicamente.</p>
                <p><a class="btn btn-outline-success" href="empresasSolicitantes" role="button">Obtener &raquo;</a></p>
              </div>
              
            </div>

          </div>
        </div>
      </div>
      @endsection
