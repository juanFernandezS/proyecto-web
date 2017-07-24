@extends('admin.template.main')

@section('title','Agregar News')

@section('content')
    {!! Form::open(['route'=>'news.store','method'=>'POST','files'=>true])!!}
        <div class="form-group">
            {!! Form::label('titulo','Titulo') !!}
            {!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Nombre de la News','required']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('cuerpo_noticia','Escriba su Noticia aqui:') !!}
                {!! Form::textarea('cuerpo_noticia',null,['class'=>'form-control','placeholder'=>'Text News','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('estado','Estado de Noticia') !!}
            {!! Form::checkbox('estado',true,['class'=>'form-control']) !!}
            {!! Form::label('estado','Activo') !!}
        </div>

        <div class="form-group">
            {{Form::label('image','Image')}}
            {{Form::file('image')}}
        </div>
        <div class="form-group">
            {!! Form::submit('Ingresar Noticia',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection