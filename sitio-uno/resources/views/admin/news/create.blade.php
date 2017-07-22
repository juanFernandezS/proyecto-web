@extends('admin.template.main')

@section('title','Agregar News')

@section('content')
    {!! Form::open(['route'=>'admin.news.store','method'=>'POST'])!!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del tag','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Ingresar Noticia',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection