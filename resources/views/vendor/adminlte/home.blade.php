@extends('adminlte::layouts.app')

@section('htmlheader_title','HOME')


@section('contentheader_title', '')

@section('main-content')
	
<div class="container-fluid">
  

              <h1>Bienvenido {{ Auth::user()->name }}!</h1>
              <br></br>
        

  <div class="row">
    
    <div class="info-box-content col-md-4">
      <a style="text-decoration: none; color:black;" href="RepoNoEscogido">
              <span class="info-box-text">Proyectos No Escogidos</span>
              <span class="info-box-number">{{$noEscogido}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$noEscogido}}%"></div>
              </div>
              <span class="progress-description">
                    {{$noEscogido}}% Incrementado en los ultimos 30 Dias
                  </span>
      </a>
    </div>


            <div class="info-box-content col-md-4">
              <a style="text-decoration: none; color:black;" href="RepoAbandonados">
              <span class="info-box-text">Proyectos Abandonados</span>
              <span class="info-box-number">{{$Abandonados}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$Abandonados}}%"></div>
              </div>
              <span class="progress-description">
                    {{$Abandonados}}% Incrementado en los ultimos 30 Dias
                  </span>
                </a>
            </div>
</div>
<br>
<div class="row">

            <div class="info-box-content col-md-4">
              <a style="text-decoration: none; color:black;" href="cantidadBeneficiarios">
              <span class="info-box-text">Cantidad Beneficiarios</span>
              <span class="info-box-number">{{$CantidadBeneficiarios}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$CantidadBeneficiarios}}%"></div>
              </div>
              <span class="progress-description">
                    {{$CantidadBeneficiarios}}% Incrementado en los ultimos 30 Dias
                  </span>
                </a>
            </div>


            <div class="info-box-content col-md-4">
              <a style="text-decoration: none; color:black;" href="cuposDisponibles">
              <span class="info-box-text">Cupos Disponibles</span>
              <span class="info-box-number">{{$Cupos}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$Cupos}}%"></div>
              </div>
              <span class="progress-description">
                    {{$Cupos}}% Incrementado en los ultimos 30 Dias
                  </span>
                </a>
            </div>
</div>
<br/>
<div class="row">
            <div class="info-box-content col-md-4">
              <a style="text-decoration: none; color:black; color:black;" href="{{ route('peticiones') }}" style="text-decoration: none; color:black;">
              <span class="info-box-text">Cantidad de Peticiones</span>
              <span class="info-box-number">{{$CantidadPeticiones}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$CantidadPeticiones}}%"></div>
              </div>
              <span class="progress-description">
                    {{$CantidadPeticiones}}% Incrementado en los ultimos 30 Dias
                  </span>
                </a>
            </div>

            <div class="info-box-content col-md-4">
              <a style="text-decoration: none; color:black;" href="/dineroAhorrado">
              <span class="info-box-text">Dinero Ahorrado</span>
              <span class="info-box-number">{{$dineroAhorrado}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$dineroAhorrado}}%"></div>
              </div>
              <span class="progress-description">
                    {{$dineroAhorrado}}% Incrementado en los ultimos 30 Dias
                  </span>
                </a>
            </div>
  </div>

</div>



@endsection
