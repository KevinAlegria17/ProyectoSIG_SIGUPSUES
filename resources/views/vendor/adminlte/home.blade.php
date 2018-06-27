@extends('adminlte::layouts.app')

@section('htmlheader_title','HOME')


@section('contentheader_title', 'Inicio')

@section('main-content')
	
<div class="container-fluid">
  <div class="row">
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
  </div>
  </div>

  <div class="row">
    
    <div class="info-box-content col-md-4">
              <span class="info-box-text">Proyectos No Escogidos</span>
              <span class="info-box-number">{{$noEscogido}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$noEscogido}}%"></div>
              </div>
              <span class="progress-description">
                    {{$noEscogido}}% Increase in 30 Days
                  </span>
    </div>


            <div class="info-box-content col-md-4">
              <span class="info-box-text">Abandonados</span>
              <span class="info-box-number">{{$Abandonados}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$Abandonados}}%"></div>
              </div>
              <span class="progress-description">
                    {{$Abandonados}}% Increase in 30 Days
                  </span>
            </div>


            <div class="info-box-content col-md-4">
              <span class="info-box-text">Cantidad Beneficiarios</span>
              <span class="info-box-number">{{$CantidadBeneficiarios}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$CantidadBeneficiarios}}%"></div>
              </div>
              <span class="progress-description">
                    {{$CantidadBeneficiarios}}% Increase in 30 Days
                  </span>
            </div>


            <div class="info-box-content col-md-4">
              <span class="info-box-text">Cupos</span>
              <span class="info-box-number">{{$Cupos}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$Cupos}}%"></div>
              </div>
              <span class="progress-description">
                    {{$Cupos}}% Increase in 30 Days
                  </span>
            </div>

            <div class="info-box-content col-md-4">
              <span class="info-box-text">Cantidad de Peticiones</span>
              <span class="info-box-number">{{$CantidadPeticiones}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$CantidadPeticiones}}%"></div>
              </div>
              <span class="progress-description">
                    {{$CantidadPeticiones}}% Increase in 30 Days
                  </span>
            </div>

            <div class="info-box-content col-md-4">
              <span class="info-box-text">dinero Ahorrado</span>
              <span class="info-box-number">{{$dineroAhorrado}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$dineroAhorrado}}%"></div>
              </div>
              <span class="progress-description">
                    {{$dineroAhorrado}}% Increase in 30 Days
                  </span>
            </div>
  </div>
</div>



@endsection
