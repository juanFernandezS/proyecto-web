@extends('admin.template.main')

@section('title','LISTA DE NOTICIAS')

@section('content')
    @include('flash::message')

    <div class="container">
        <a href="{{route('news.create')}}"class="btn btn-default"><span class="glyphicon glyphicon-pencil">CREARNOTICIA</span> </a>


    <table class="table table-striped">
        <thead>
            <th> ID</th>
            <th> Titulo Noticia</th>
            <th> Fecha Creación</th>
        </thead>
        <body>
            @foreach($news as $notice)
                <tr>
                    <td>{{$notice->id_noticia}}</td>
                    <td>{{$notice->titulo}}</td>
                    <td>{{$notice->fecha_creacion}}</td>
                    <td>
                        <a href="{{route('admin.news.edit',$notice->id_noticia)}}"class="btn btn-warning">
                            <span class="glyphicon glyphicon-wrench" aria-hidden="true">
                            </span> </a>

                        <a href="{{route('admin.news.destroy',$notice->id_noticia)}}" oneclick ="return confirm('¿SEGURO QUE DESEA ELIMINARLO')"class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">
                            </span> </a>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
    <div class="text-center">
        {!! $news->render()!!}
    </div>
    </div>
@endsection