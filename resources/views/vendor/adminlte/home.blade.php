@extends('adminlte::layouts.app')

@section('htmlheader_title','HOME')


@section('contentheader_title', 'HOME')

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

@endsection
