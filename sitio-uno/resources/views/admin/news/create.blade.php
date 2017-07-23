@extends('admin.template.main')

@section('title','Agregar News')

@section('content')
    {!! Form::open(['route'=>'news.store','method'=>'POST'])!!}
        <div class="form-group">
            {!! Form::label('titulo','Titulo') !!}
            {!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Nombre de la News','required']) !!}
            {!! Form::label('cuerpo_noticia','Escriba su Noticia aqui:') !!}
            {!! Form::text('cuerpo_noticia',null,['class'=>'form-control','placeholder'=>'Text News','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Ingresar Noticia',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection