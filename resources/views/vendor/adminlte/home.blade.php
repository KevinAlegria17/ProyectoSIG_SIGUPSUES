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
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">92,050</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
              <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
            </div>
            <div class="info-box-content col-md-4">
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">92,050</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
              <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
            </div>
            <div class="info-box-content col-md-4">
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">92,050</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
              <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
            </div>
            <div class="info-box-content col-md-4">
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">92,050</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
              <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
            </div>
  </div>
</div>



@endsection
