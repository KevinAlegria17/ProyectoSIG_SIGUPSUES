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
          <a class="nav-link active" href="/proyectos">Proyectos <span class="sr-only">(current)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/serviciosocial">Servicio social</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Otros</a>
          </li>
        </ul>
      </nav>

      <div class="col-md-9">
        <div class="card">
          <div class="card-header">PROYECTOS</div>

          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif

            <h1>{{ Auth::user()->name }}, Bienvenido al panel de Proyectos !</h1>
            <br></br>

            <div class="container">
              <!-- Example row of columns -->
              <div class="row">
                <div class="col-md-3">
                  <h2>Proyectos no escogidos</h2>
                  <p> Muestra cuáles proyectos tienen más de un año de estar ingresados,
                  y que ningún estudiante los ha escogido </p>
                  <p><a class="btn btn-outline-success" href="#" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-3">
                  <h2>Proyectos abandonados</h2>
                  <p> Muestra cuales proyectos han sido abandonados por sus
                  integrantes y razón por la cual haya quedado inconcluso.</p>
                  <p><a class="btn btn-outline-success" href="#" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-3">
                  <h2>Cupos disponibles</h2>
                  <p>Muestra todos los proyectos que estén disponibles y los que ya están en
                  proceso, pero aún les falta un integrante del equipo</p>
                  <p><a class="btn btn-outline-success" href="#" role="button">Obtener &raquo;</a></p>
                </div>
                <div class="col-md-3">
                  <h2>Cantidad de beneficiarios</h2>
                  <p> Reporte con proyectos que tengan mayor cantidad de beneficiarios</p>
                  <p><a class="btn btn-outline-success" href="#" role="button">Obtener &raquo;</a></p>
                </div>
              </div>

            </div>
          </div>
        </div>
        @endsection
