@extends ('template.layout')
​
@section ('title') Formulario 2 @stop
​
@section ('contenido')
​
@include('template/errors')
​
<?php
	if ( session('data') )
	{
		$data = [ 
			'nombre' => session('data')['nombre'], 
			'apellido' => session('data')['apellido'] 
		];
	}
?>
​
Formulario2
​
{!! Form::open(array('url' => 'formulario3')) !!}
​
	<br>
	<br>
	{{ $data['nombre'] }}
	<br>
	{{ $data['apellido'] }}
​
	<br>
	<br>
	<br>
	
	{!! Form::label('nombre', 'Nombre') !!}
	{!! Form::text('nombre', $data['nombre']) !!}
​
	{!! Form::label('apellido', 'Apellido Oculto (PEREZ)') !!}
	{!! Form::text('apellido', $data['apellido']) !!}
​
	{!! Form::label('materno', 'Materno:') !!}
	{!! Form::text('materno') !!}
​
	{!! Form::hidden('fuck', 'FUNCIONA') !!}
​
<br>
<br>
​
{!! Form::submit('Formulario 3') !!}
​
​
{!! Form::close() !!}
​
@endsection