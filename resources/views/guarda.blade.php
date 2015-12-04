@extends ('template.layout')

@section ('title') Nuevo Usuarios @stop

@section ('contenido')

Formulario

{!! Form::open(['url'=>'formulario1','method'=>'POST', 'class'=>'form-horizontal']) !!}

{!! Form:close() !!}



@endsection