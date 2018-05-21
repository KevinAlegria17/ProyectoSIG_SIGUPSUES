@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="/alumnos">Alumnos </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/proyectos">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/serviciosocial">Servicio Social  <span class="sr-only">(current)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu opcion 4</a>
          </li>
        </ul>
      </nav>

      <div class="col-md-9">
        <div class="card">
          <div class="card-header">PANEL PRINCIPAL</div>

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
                  <p><a class="btn btn-secondary" href="#" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-4">
                  <h2>Dinero ahorrado</h2>
                  <p> Verifica todos los servicios sociales realizados en un año específico para mostrar el dinero ahorrado mediante su realizacion</p>
                  <p><a class="btn btn-secondary" href="#" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-4">
                  <h2>Existencias</h2>
                  <p>Existencias de un determinado servicio social para una escuela en
                  específico</p>
                  <p><a class="btn btn-secondary" href="#" role="button">Obtener &raquo;</a></p>
                </div>

              </div>

            </div>
          </div>
        </div>
        @endsection
