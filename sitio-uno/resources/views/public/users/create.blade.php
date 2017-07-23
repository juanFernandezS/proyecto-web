@extends('public.template.main')

@section('title', 'Crear Usuario')

@section('content')
    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('rut', 'Rut') !!}
            {!! Form::text('rut', null, ['class' => 'form-control', 'placeholder' => '12.345.678-9', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nickname', 'Pseudonimo') !!}
            {!! Form::text('nickname', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '************', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection