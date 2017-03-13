@extends('layouts.master')

@section('title')
    Importar Casos

@stop

@section('content')

    {!! Form::open(['enctype' => 'multiplart/form-data']) !!}
        <p>
            {!!Form::label('Importar Archivo CSV')!!}
            {!! Form::file('file') !!}
        </p>
        
        <p>
            {!! Form::submit('Importar') !!}
        </p>
        
        
    {!! Form::close() !!}


@stop