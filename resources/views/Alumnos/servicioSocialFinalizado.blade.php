@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Alumnos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/proyectos">Proyectos</a>
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
        <div class="card-header">ALUMNOS</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          <h1>{{ Auth::user()->name }}, Estas en los Servicios Sociales finalizados!</h1>
          <br></br>

          <div class="container">
            <!-- Example row of columns -->
            <div class="row">
              <div class="col-md-6">
              <input class="form-control pull-right" id="datepicker" type="text">
              </div>
              <div class="col-md-6">
                <h2>Elige el ciclo</h2>
                <p>Empresas con las que se ha llegado a un acuerdo para mandar alumnos
                periódicamente.</p>
                <p><a class="btn btn-outline-success" href="#" role="button">Obtener &raquo;</a></p>
              </div>
              
            </div>

          </div>
        </div>
      </div>

       
      @endsection
