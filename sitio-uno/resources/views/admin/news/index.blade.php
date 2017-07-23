@extends('admin.template.main')

@section('title','LISTA DE NOTICIAS')

@section('content')
    @include('flash::message')
    <table class="table table-striped">
        <thead>
            <th> ID</th>
            <th> Titulo Noticia</th>
            <th> Cuerpo Noticia</th>
            <th> Fecha Creación</th>
        </thead>
        <body>
            @foreach($news as $notice)
                <tr>
                    <td>{{$notice->id_noticia}}</td>
                    <td>{{$notice->titulo}}</td>
                    <td>{{$notice->cuerpo_noticia}}</td>
                    <td>{{$notice->fecha_creacion}}</td>
                    <td>
                        <a href=""class="btn btn-warning">
                            <span class="glyphicon glyphicon-wrench" aria-hidden="true">
                            </span> </a>

                        <a href="" oneclick ="return confirm('¿SEGURO QUE DESEA ELIMINARLO')"class="btn btn-danger">
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
@endsection