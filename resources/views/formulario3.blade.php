@extends ('template.layout')

@section ('title') Formulario 3 @stop

@section ('contenido')

@include('template/errors')

<?php
if ( session('data') )
	{
		$data = [ 
			'nombre' => session('data')['nombre'], 
			'apellido' => session('data')['apellido'],
			'materno' => session('data')['materno'],
			'fuck' => session('data')['fuck']
		];
	}
?>

Formulario3

{!! Form::open(array('url' => 'formulario4')) !!}

	<br>
	<br>
	{{ $data['nombre'] }}
	<br>
	{{ $data['apellido'] }}
	<br>
	{{ $data['materno'] }}
	<br>
	{{ $data['fuck'] }}

	<br>
	<br>
	<br>
	{!! Form::label('nombre', 'Nombre') !!}
	{!! Form::text('nombre', $data['nombre']) !!}

	{!! Form::label('apellido', 'Apellido Oculto (PEREZ)') !!}
	{!! Form::text('apellido', $data['apellido']) !!}

	{!! Form::label('materno', 'Materno') !!}
	{!! Form::text('materno', $data['materno']) !!}

	{!! Form::label('fuck', 'Variable hidden Fuck') !!}
	{!! Form::text('fuck', $data['fuck']) !!}

	{!! Form::label('f', 'Al form 4') !!}
	{!! Form::text('f') !!}

<br>
<br>
​
{!! Form::submit('Formulario 4') !!}
​
​
{!! Form::close() !!}



@endsection