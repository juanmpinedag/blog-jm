@extends('layouts.app')

@section('title','Crear Categoria')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	
	<div class="row">
    <div class="container text-aling">
  <div class="panel panel-info">
  <div class="panel-heading"><h3 class="text-center">Categorias</h3></div>
  <div class="panel-body">
@include('alerts._dangers')
  <h1>Crear nueva categoria</h1>
  <hr>
    {!! Form::open(['route'=>'categories.store', 'method'=>'POST']) !!}
		{{ csrf_field() }}
		<div class="form-group">
				{{ Form::label('name', 'Nombre') }}
				{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingresa tu nombre']) }}
		</div>
		
	
		<div class="form-group">
			{{ Form::submit('Crear categoria', ['class'=>'btn btn-primary ']) }}
		</div>
	{!! Form::close() !!}
    <hr>
  </div>
  <div class="panel-footer">Todos los derechos reservados</div>
</div>
    </div>
    
</div>
</div>
@endsection