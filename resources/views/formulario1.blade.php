@extends ('template.layout')

@section ('title') @stop

@section ('contenido')

@include('template/errors')

Formulario1

<br>

{!! Form::open(array('url' => 'formulario2')) !!}

<br>
<br>
{!! Form::label('nombre', 'Nombre') !!}

{!! Form::text('nombre') !!}
<br>
<br>
{!! Form::label('apellido', 'Apellido Oculto (PEREZ)') !!}
{!! Form::hidden('apellido', 'PEREZ') !!}

<br>
<br>

{!! Form::submit('Formulario 2') !!}

{!! Form::close() !!}

@endsection