@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="/alumnos">Alumnos</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/proyectos">Proyectos</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/serviciosocial">Servicio Social</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Otros</a>
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

            <h1>Bienvenido {{ Auth::user()->name }}!</h1>
            <br></br>



      </div>
  </div>
</div>
@endsection
