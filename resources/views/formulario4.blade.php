@extends ('template.layout')

@section ('title') Formulario 4 @stop

@section ('contenido')

@include('template/errors')

Formulario3

{!! Form::open(array('url' => 'guardar')) !!}

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

	{!! Form::label('f', 'Variable f') !!}
	{!! Form::text('f', $data['f']) !!}

<br>
<br>
​
{!! Form::submit('Formulario 4') !!}
​
​
{!! Form::close() !!}



@endsection