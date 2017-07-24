@extends('admin.template.main')

@section('title','Edit News'.$news->titulo)

@section('content')
    {!! Form::open(['route'=>['news.update',$news],'method'=>'PUT'])!!}
    <div class="form-group">
        {!! Form::label('titulo','Titulo') !!}
        {!! Form::text('titulo',$news->titulo,['class'=>'form-control','placeholder'=>'Nombre de la News','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cuerpo_noticia','Escriba su Noticia aqui:') !!}
        {!! Form::textarea('cuerpo_noticia',$news->cuerpo_noticia,['class'=>'form-control','placeholder'=>'Text News','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('estado','Estado de Noticia') !!}
        {!! Form::checkbox('estado',true,['class'=>'form-control']) !!}
        {!! Form::label('estado','Activo') !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Noticia',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection