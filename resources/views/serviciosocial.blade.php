@extends('adminlte::layouts.app')

@section('htmlheader_title','HOME')


@section('contentheader_title', 'HOME')

@section('main-content')
<div class="container-fluid">
  <div class="row">
    

      <div class="col-md-9">
        <div class="card">
          <div class="card-header bg-outline-primary ">SERVICIO SOCIAL</div>

          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif

            <h1>{{ Auth::user()->name }}, Bienvenido al panel de Servicos sociales !</h1>
            <br></br>

            <div class="container">
              <!-- Example row of columns -->
              <div class="row">
                <div class="col-md-4">
                  <h2>Mayor demanda</h2>
                  <p> Se muestra el tipo de servicio social más demandado </p>
                  <p><a class="btn btn-outline-success" href="#" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-4">
                  <h2>Dinero ahorrado</h2>
                  <p> Verifica todos los servicios sociales realizados en un año específico para mostrar el dinero ahorrado mediante su realizacion</p>
                  <p><a class="btn btn-outline-success" href="#" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-4">
                  <h2>Existencias</h2>
                  <p>Existencias de un determinado servicio social para una escuela en
                  específico</p>
                  <p><a class="btn btn-outline-success" href="#" role="button">Obtener &raquo;</a></p>
                </div>

              </div>

            </div>
          </div>
        </div>
        @endsection
